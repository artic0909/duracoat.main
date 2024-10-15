<?php

namespace App\Http\Controllers;

use App\Models\AdminCompanyDetailsModel;
use App\Models\AdminContactModel;
use App\Models\AdminOtherBannerModel;
use Illuminate\Http\Request;

class FrontContactController extends Controller
{


    public function getContact()
    {
        $otherbanners = AdminOtherBannerModel::all();
        $contacts = AdminCompanyDetailsModel::all();

        return view('contact', compact('otherbanners', 'contacts'));
    }





    public function addContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'string',
            'email' => 'string',
            'subject' => 'nullable|string',
            'message' => 'nullable|string',
        ]);



        AdminContactModel::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }
}
