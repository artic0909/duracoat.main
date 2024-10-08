<?php

namespace App\Http\Controllers;

use App\Models\AdminAboutDataModel;
use Illuminate\Http\Request;

class AdminAboutDataController extends Controller
{
    public function getAboutData()
    {
        $aboutDatas = AdminAboutDataModel::all();
        return view('admin.admin-about', compact('aboutDatas'));
    }




    public function addAboutData(Request $request)
    {
        $validated = $request->validate([
            'about_image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'about_title' => 'string',
            'about_desc' => 'nullable|string',
            'about_ex' => 'string',
        ]);

        if ($request->hasFile('about_image')) {
            $file = $request->file('about_image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/aboutdata', $fileName, 'public');
        }


        AdminAboutDataModel::create([
            'about_image' => $filePath ?? null,
            'about_title' => $request->input('about_title'),
            'about_desc' => $request->input('about_desc'),
            'about_ex' => $request->input('about_ex'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }




    public function editAboutData(Request $request, $id)
    {
        $validated = $request->validate([
            'about_image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'about_title' => 'string',
            'about_desc' => 'nullable|string',
            'about_ex' => 'string',
        ]);

        $aboutDataInfo = AdminAboutDataModel::find($id);

        if ($aboutDataInfo) {
            if ($request->hasFile('about_image')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $aboutDataInfo->about_image))) {
                    unlink(public_path('storage/' . $aboutDataInfo->about_image));
                }

                // Store the new image
                $file = $request->file('about_image');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/aboutdata', $fileName, 'public');
                $aboutDataInfo->home_banner = $filePath;
            }

            $aboutDataInfo->about_title = $request->input('about_title');
            $aboutDataInfo->about_desc = $request->input('about_desc');
            $aboutDataInfo->about_ex = $request->input('about_ex');
            $aboutDataInfo->save();

            return back()->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }






    public function deleteAboutData($id)
    {
        $aboutDataInfo = AdminAboutDataModel::find($id);

        if ($aboutDataInfo) {

            if (file_exists(public_path('storage/' . $aboutDataInfo->about_image))) {
                unlink(public_path('storage/' . $aboutDataInfo->about_image));
            }


            $aboutDataInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }
}
