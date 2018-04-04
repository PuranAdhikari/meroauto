<?php

namespace App\Http\Controllers\Admin;

use App\Models\Upload;
use File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response as FacadeResponse;


class UploadsController extends Controller
{
    public function index()
    {
        return view('admin.uploads.index');
    }

    public function upload_files(Request $request)
    {
        if ($request->hasFile('file')) {

            $file = $request->file('file');

            $folder = storage_path('uploads');
            $filename = $file->getClientOriginalName();

            $date_append = date("Y-m-d-His-");
            $upload_success = $request->file('file')->move($folder, $date_append . $filename);

            if ($upload_success) {
                $public = $request->get('public');
                if (isset($public)) {
                    $public = true;
                } else {
                    $public = false;
                }

                $upload = Upload::create([
                    "name" => $filename,
                    "path" => $folder . DIRECTORY_SEPARATOR . $date_append . $filename,
                    "extension" => pathinfo($filename, PATHINFO_EXTENSION),
                    "caption" => "",
                    "hash" => "",
                    "public" => $public,
                ]);
                // apply unique random hash to file
                while (true) {
                    $hash = strtolower(str_random(20));
                    if (!Upload::where("hash", $hash)->count()) {
                        $upload->hash = $hash;
                        break;
                    }
                }
                $upload->save();

                return response()->json([
                    "status" => "success",
                    "upload" => $upload
                ], 200);
            } else {
                return response()->json([
                    "status" => "error"
                ], 400);
            }
        } else {
            return response()->json('error: upload file not found.', 400);
        }
    }


    /**
     * Get all files from uploads folder
     *
     * @return \Illuminate\Http\Response
     */
    public function uploaded_files()
    {
        $uploads = Upload::all();

        $uploads2 = array();
        foreach ($uploads as $upload) {
            $u = (object)array();
            $u->id = $upload->id;
            $u->name = $upload->name;
            $u->extension = $upload->extension;
            $u->hash = $upload->hash;
            $u->public = $upload->public;
            $u->caption = $upload->caption;

            $uploads2[] = $u;
        }
        return response()->json(['uploads' => $uploads2]);
    }


    /**
     * Get file
     *
     * @return \Illuminate\Http\Response
     */
    public function get_file(Request $request, $hash, $name)
    {
        $upload = Upload::where("hash", $hash)->first();

        // Validate Upload Hash & Filename
        if (!isset($upload->id) || $upload->name != $name) {
            return response()->json([
                'status' => "failure",
                'message' => "Unauthorized Access 1"
            ]);
        }

        if ($upload->public == 1) {
            $upload->public = true;
        } else {
            $upload->public = false;
        }

        // Validate if Image is Public
        if (!$upload->public && !isset(\Auth::user()->id)) {
            return response()->json([
                'status' => "failure",
                'message' => "Unauthorized Access 2",
            ]);
        }
        if ($upload->public || \Auth::user()->hasRole('admin')) {

            $path = $upload->path;

            if (!\File::exists($path))
                abort(404);

            // Check if thumbnail
            $size = Input::get('s');
            if (isset($size)) {
                if (!is_numeric($size)) {
                    $size = 150;
                }
                $thumbpath = storage_path("thumbnails/" . basename($upload->path) . "-" . $size . "x" . $size);

                if (File::exists($thumbpath)) {
                    $path = $thumbpath;
                } else {
                    // Create Thumbnail
//                    LAHelper::createThumbnail($upload->path, $thumbpath, $size, $size, "transparent");
//                    $path = $thumbpath;
                }
            }

            $file = File::get($path);
            $type = File::mimeType($path);

            if ($request->has('download')) {
                return response()->download($path, $upload->name);
            } else {
                $response = FacadeResponse::make($file, 200);
                $response->header("Content-Type", $type);
            }

            return $response;
        } else {
            return response()->json([
                'status' => "failure",
                'message' => "Unauthorized Access 3"
            ]);
        }

    }


    /**
     * Remove the specified upload from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete_file()
    {
        $file_id = Input::get('file_id');

        $upload = Upload::find($file_id);
        if (isset($upload->id)) {

            // Update Caption
            $upload->delete();

            return response()->json([
                'status' => "success"
            ]);

        } else {
            return response()->json([
                'status' => "failure",
                'message' => "Upload not found"
            ]);
        }

    }


    /**
     * Update Uploads Caption
     *
     * @return \Illuminate\Http\Response
     */
    public function update_caption()
    {
        $file_id = Input::get('file_id');
        $caption = Input::get('caption');

        $upload = Upload::find($file_id);
        if (isset($upload->id)) {
            if (\Auth::user()->hasRole('admin')) {

                // Update Caption
                $upload->caption = $caption;
                $upload->save();

                return response()->json([
                    'status' => "success"
                ]);

            } else {
                return response()->json([
                    'status' => "failure",
                    'message' => "Upload not found"
                ]);
            }
        } else {
            return response()->json([
                'status' => "failure",
                'message' => "Upload not found"
            ]);
        }
    }

    /**
     * Update Uploads Filename
     *
     * @return \Illuminate\Http\Response
     */
    public function update_filename()
    {
        $file_id = Input::get('file_id');
        $filename = Input::get('filename');

        $upload = Upload::find($file_id);
        if (isset($upload->id)) {
            if (\Auth::user()->hasRole('admin')) {

                // Update Caption
                $upload->name = $filename;
                $upload->save();

                return response()->json([
                    'status' => "success"
                ]);

            } else {
                return response()->json([
                    'status' => "failure",
                    'message' => "Unauthorized Access 1"
                ]);
            }
        } else {
            return response()->json([
                'status' => "failure",
                'message' => "Upload not found"
            ]);
        }
    }

    /**
     * Update Uploads Public Visibility
     *
     * @return \Illuminate\Http\Response
     */
    public function update_public()
    {
        $file_id = Input::get('file_id');
        $public = Input::get('public');
        if (isset($public)) {
            $public = true;
        } else {
            $public = false;
        }

        $upload = Upload::find($file_id);
        if (isset($upload->id)) {
            if (\Auth::user()->hasRole('admin')) {

                // Update Caption
                $upload->public = $public;
                $upload->save();
                return response()->json([
                    'status' => "success"
                ]);

            } else {
                return response()->json([
                    'status' => "failure",
                    'message' => "Unauthorized Access 1"
                ]);
            }
        } else {
            return response()->json([
                'status' => "failure",
                'message' => "Upload not found"
            ]);
        }
    }

}
