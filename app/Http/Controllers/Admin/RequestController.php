<?php

namespace App\Http\Controllers\Admin;

use App\Models\ContactRequest;
use App\Models\MoreInformation;
use App\Models\OfferMade;
use App\Models\TestDrive;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequestController extends Controller
{
    public function getContacts()
    {
        $requests = ContactRequest::latest()->paginate(30);
        return view('admin.requests.contacts.index', compact('requests'));
    }

    public function deleteContacts(Request $request)
    {
        $selected = $request->only('select');
        $all = array_keys($selected['select']);
        ContactRequest::destroy($all);
        return back()->with('message', 'Contact requests deleted successfully.');
    }

    public function getMoreInfo()
    {
        $requests = MoreInformation::latest()->paginate(30);
        return view('admin.requests.more_information.index', compact('requests'));
    }

    public function deleteMoreInfo(Request $request)
    {
        $selected = $request->only('select');
        $all = array_keys($selected['select']);
        MoreInformation::destroy($all);
        return back()->with('message', 'More info requests deleted successfully.');
    }

    public function getTestDrive()
    {
        $requests = TestDrive::latest()->paginate(30);
        return view('admin.requests.test_drive.index', compact('requests'));
    }

    public function deleteTestDrive(Request $request)
    {
        $selected = $request->only('select');
        $all = array_keys($selected['select']);
        TestDrive::destroy($all);
        return back()->with('message', 'Test drive requests deleted successfully.');
    }

    public function getOffersMade()
    {
        $requests = OfferMade::latest()->paginate(30);
        return view('admin.requests.offers_made.index', compact('requests'));
    }

    public function deleteOffersMade(Request $request)
    {
        $selected = $request->only('select');
        $all = array_keys($selected['select']);
        OfferMade::destroy($all);
        return back()->with('message', 'Offer requests deleted successfully.');
    }
}
