<?php

namespace App\Http\Controllers;

use App\Models\AdminGalleryBendingModel;
use Illuminate\Http\Request;

class AdminGalleryBendingController extends Controller
{
    public function getGB()
    {
        $gbs = AdminGalleryBendingModel::orderBy('created_at', 'desc')->get();
        return view('admin.admin-gallery-bending', compact('gbs'));
    }




    public function addGB(Request $request)
    {
        $validated = $request->validate([
            'g_bending' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'g_b_title' => 'string',
        ]);

        if ($request->hasFile('g_bending')) {
            $file = $request->file('g_bending');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/gb', $fileName, 'public');
        }


        AdminGalleryBendingModel::create([
            'g_bending' => $filePath ?? null,
            'g_b_title' => $request->input('g_b_title'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }




    public function editGB(Request $request, $id)
    {
        $validated = $request->validate([
            'g_bending' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'g_b_title' => 'string',
        ]);

        $gbInfo = AdminGalleryBendingModel::find($id);

        if ($gbInfo) {
            if ($request->hasFile('g_bending')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $gbInfo->g_bending))) {
                    unlink(public_path('storage/' . $gbInfo->g_bending));
                }

                // Store the new image
                $file = $request->file('g_bending');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/gb', $fileName, 'public');
                $gbInfo->g_bending = $filePath;
            }

            $gbInfo->g_b_title = $request->input('g_b_title');
            $gbInfo->save();

            return back()->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }






    public function deleteGB($id)
    {
        $gbInfo = AdminGalleryBendingModel::find($id);

        if ($gbInfo) {

            if (file_exists(public_path('storage/' . $gbInfo->g_bending))) {
                unlink(public_path('storage/' . $gbInfo->g_bending));
            }


            $gbInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }
}
