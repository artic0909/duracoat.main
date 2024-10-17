<?php

namespace App\Http\Controllers;

use App\Models\AdminBendingServiceModel;
use Illuminate\Http\Request;

class AdminBendingServiceController extends Controller
{
    public function getbService()
    {
        $adminbServices = AdminBendingServiceModel::all();
        return view('admin.admin-bendingservice', compact('adminbServices'));
    }




    public function addbService(Request $request)
    {
        $validated = $request->validate([
            'sb_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'sb_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'sb_title' => 'nullable|string',
            'sb_s_desc' => 'nullable|string',
            'sb_l_desc' => 'nullable|string',
        ]);

        $sIconPath = null;
        $sImagePath = null;


        if ($request->hasFile('sb_icon')) {
            $sIconFile = $request->file('sb_icon');
            $sIconName = time() . '_icon_' . $sIconFile->getClientOriginalName();
            $sIconPath = $sIconFile->storeAs('uploads/services', $sIconName, 'public');
        }


        if ($request->hasFile('sb_image')) {
            $sImageFile = $request->file('sb_image');
            $sImageName = time() . '_image_' . $sImageFile->getClientOriginalName();
            $sImagePath = $sImageFile->storeAs('uploads/bservices', $sImageName, 'public');
        }


        AdminBendingServiceModel::create([
            'sb_icon' => $sIconPath,
            'sb_image' => $sImagePath,
            'sb_title' => $request->input('sb_title'),
            'sb_s_desc' => $request->input('sb_s_desc'),
            'sb_l_desc' => $request->input('sb_l_desc'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }




    public function editbService(Request $request, $id)
    {

        $validated = $request->validate([
            'sb_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'sb_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'sb_title' => 'nullable|string',
            'sb_s_desc' => 'nullable|string',
            'sb_l_desc' => 'nullable|string',
        ]);


        $serviceb = AdminBendingServiceModel::find($id);

        if ($serviceb) {

            if ($request->hasFile('sb_icon')) {

                if (file_exists(public_path('storage/' . $serviceb->sb_icon))) {
                    unlink(public_path('storage/' . $serviceb->sb_icon));
                }


                $iconFile = $request->file('sb_icon');
                $iconFileName = time() . '_icon_' . $iconFile->getClientOriginalName();
                $iconFilePath = $iconFile->storeAs('uploads/bservices', $iconFileName, 'public');
                $serviceb->sb_icon = $iconFilePath;
            }


            if ($request->hasFile('sb_image')) {

                if (file_exists(public_path('storage/' . $serviceb->sb_image))) {
                    unlink(public_path('storage/' . $serviceb->sb_image));
                }


                $imageFile = $request->file('sb_image');
                $imageFileName = time() . '_image_' . $imageFile->getClientOriginalName();
                $imageFilePath = $imageFile->storeAs('uploads/bservices', $imageFileName, 'public');
                $serviceb->sb_image = $imageFilePath;
            }


            $serviceb->sb_title = $request->input('sb_title');
            $serviceb->sb_s_desc = $request->input('sb_s_desc');
            $serviceb->sb_l_desc = $request->input('sb_l_desc');

            // Save the changes
            $serviceb->save();

            return back()->with('success', 'Service updated successfully!');
        } else {
            return back()->with('error', 'Service not found.');
        }
    }







    public function deletebService($id)
    {
        
        $serviceb = AdminBendingServiceModel::find($id);

        if ($serviceb) {
            
            if ($serviceb->sb_icon && file_exists(public_path('storage/' . $serviceb->sb_icon))) {
                unlink(public_path('storage/' . $serviceb->sb_icon));
            }

            
            if ($serviceb->sb_image && file_exists(public_path('storage/' . $serviceb->sb_image))) {
                unlink(public_path('storage/' . $serviceb->sb_image));
            }

            
            $serviceb->delete();

            
            return back()->with('success', 'Service deleted successfully!');
        } else {
            
            return back()->with('error', 'Service not found.');
        }
    }
}
