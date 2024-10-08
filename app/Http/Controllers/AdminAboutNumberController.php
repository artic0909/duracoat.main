<?php

namespace App\Http\Controllers;

use App\Models\AdminAboutNumberModel;
use Illuminate\Http\Request;

class AdminAboutNumberController extends Controller
{
    public function getAboutNumber()
    {
        $aboutNumbers = AdminAboutNumberModel::all();
        return view('admin.admin-numbers', compact('aboutNumbers'));
    }




    public function addAboutNumber(Request $request)
    {
        $validated = $request->validate([
            'clients' => 'string',
            'projects' => 'string',
            'staff' => 'string',
            'awards' => 'string',
        ]);

        

        AdminAboutNumberModel::create([
            
            'clients' => $request->input('clients'),
            'projects' => $request->input('projects'),
            'staff' => $request->input('staff'),
            'awards' => $request->input('awards'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }




    public function editAboutNumber(Request $request, $id)
    {
        $validated = $request->validate([
            'clients' => 'string',
            'projects' => 'string',
            'staff' => 'string',
            'awards' => 'string',
        ]);

        $aboutNumberInfo = AdminAboutNumberModel::find($id);

        if ($aboutNumberInfo) {

            $aboutNumberInfo->clients = $request->input('clients');
            $aboutNumberInfo->projects = $request->input('projects');
            $aboutNumberInfo->staff = $request->input('staff');
            $aboutNumberInfo->awards = $request->input('awards');
            $aboutNumberInfo->save();

            return back()->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }






    public function deleteAboutNumber($id)
    {
        $aboutNumberInfo = AdminAboutNumberModel::find($id);

        if ($aboutNumberInfo) {

            $aboutNumberInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }
}
