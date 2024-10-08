<?php

namespace App\Http\Controllers;

use App\Models\AdminGalleryCoatingModel;
use Illuminate\Http\Request;

class AdminGalleryCoatingController extends Controller
{
    public function getGC()
    {
        $gcs = AdminGalleryCoatingModel::all();
        return view('admin.admin-gallery-coating', compact('gcs'));
    }




    public function addGC(Request $request)
    {
        $validated = $request->validate([
            'g_powder' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'g_c_title' => 'string',
        ]);

        if ($request->hasFile('g_powder')) {
            $file = $request->file('g_powder');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/gc', $fileName, 'public');
        }


        AdminGalleryCoatingModel::create([
            'g_powder' => $filePath ?? null,
            'g_c_title' => $request->input('g_c_title'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }




    public function editGC(Request $request, $id)
    {
        $validated = $request->validate([
            'g_powder' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'g_c_title' => 'string',
        ]);

        $gcInfo = AdminGalleryCoatingModel::find($id);

        if ($gcInfo) {
            if ($request->hasFile('g_powder')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $gcInfo->g_powder))) {
                    unlink(public_path('storage/' . $gcInfo->g_powder));
                }

                // Store the new image
                $file = $request->file('g_powder');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/gc', $fileName, 'public');
                $gcInfo->g_powder = $filePath;
            }

            $gcInfo->g_c_title = $request->input('g_c_title');
            $gcInfo->save();

            return back()->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }






    public function deleteGC($id)
    {
        $gcInfo = AdminGalleryCoatingModel::find($id);

        if ($gcInfo) {

            if (file_exists(public_path('storage/' . $gcInfo->g_powder))) {
                unlink(public_path('storage/' . $gcInfo->g_powder));
            }


            $gcInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }
}
