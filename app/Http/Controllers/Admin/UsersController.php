<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Response;

class UsersController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::latest()->paginate(30);
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(UserCreateRequest $request)
    {
        $user = User::create($request->all());
        $user->password = bcrypt($request->get('password'));
        $user->save();
        return redirect('/admin/users')->with('message', 'User created successfully !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(User $user, UserEditRequest $request)
    {
        $user->update($request->all());
        $user->password = bcrypt($request->get('password'));
        $user->save();
        return redirect('/admin/users')->with('message', 'User updated successfully !');
    }

    public function bulkDelete(Request $request)
    {
        $selected = $request->only('select');
        $all = array_keys($selected['select']);
        if (in_array(\Auth::id(), $all)) {
            $all = array_diff($all, [\Auth::id()]);
            $me = true;
        }
        $msg = isset($me) ? ' But except yourself.' : '';
        User::destroy($all);
        return back()->with('message', 'Users deleted successfully.' . $msg);
    }

    public function search(Request $request)
    {
        $users = User::query();
        if ($request->name) {
            $users->where('name', 'LIKE', '%' . $request->name . '%');
        }
        if ($request->email) {
            $users->where('email', 'LIKE', '%' . $request->email . '%');
        }
        $paginateItems = $request->items_per_page;
        $users = $users->latest()->paginate($paginateItems);
        $searching = true;
        return view('admin.users.index', compact('users', 'searching'));
    }
}