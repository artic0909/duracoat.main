<?php

namespace App\Http\Controllers;

use App\Models\AdminCompanyDetailsModel;
use Illuminate\Http\Request;

class AdminCompanyDetailsController extends Controller
{
    public function getCDetails()
    {
        $cdatas = AdminCompanyDetailsModel::all();
        return view('admin.company-details', compact('cdatas'));
    }




    public function addCDetails(Request $request)
    {
        $validated = $request->validate([
            'c_number' => 'string',
            'c_email' => 'nullable|string',
        ]);



        AdminCompanyDetailsModel::create([
            'c_number' => $request->input('c_number'),
            'c_email' => $request->input('c_email'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }




    public function editCDetails(Request $request, $id)
    {
        $validated = $request->validate([
            'c_number' => 'string',
            'c_email' => 'nullable|string',
        ]);

        $cInfo = AdminCompanyDetailsModel::find($id);

        if ($cInfo) {


            $cInfo->c_number = $request->input('c_number');
            $cInfo->c_email = $request->input('c_email');
            $cInfo->save();

            return back()->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }






    public function deleteCDetails($id)
    {
        $cInfo = AdminCompanyDetailsModel::find($id);

        if ($cInfo) {

            $cInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }
}
