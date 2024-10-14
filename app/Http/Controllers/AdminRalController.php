<?php

namespace App\Http\Controllers;

use App\Models\AdminRalModel;
use Illuminate\Http\Request;

class AdminRalController extends Controller
{
    public function getRal()
    {
        $rals = AdminRalModel::all();
        return view('admin.admin-ral', compact('rals'));
    }




    public function addRal(Request $request)
    {
        $validated = $request->validate([
            'ral' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ]);

        if ($request->hasFile('ral')) {
            $file = $request->file('ral');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/rals', $fileName, 'public');
        }


        AdminRalModel::create([
            'ral' => $filePath ?? null,
        ]);

        return back()->with('success', 'Added Successfully!');
    }




    public function editRal(Request $request, $id)
    {
        $validated = $request->validate([
            'ral' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ]);

        $ralInfo = AdminRalModel::find($id);

        if ($ralInfo) {
            if ($request->hasFile('ral')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $ralInfo->ral))) {
                    unlink(public_path('storage/' . $ralInfo->ral));
                }

                // Store the new image
                $file = $request->file('ral');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/rals', $fileName, 'public');
                $ralInfo->ral = $filePath;
            }

            $ralInfo->save();

            return back()->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }






    public function deleteRal($id)
    {
        $ralInfo = AdminRalModel::find($id);

        if ($ralInfo) {

            if (file_exists(public_path('storage/' . $ralInfo->ral))) {
                unlink(public_path('storage/' . $ralInfo->ral));
            }


            $ralInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }
}
