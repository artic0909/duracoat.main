<?php

namespace App\Http\Controllers;

use App\Models\AdminServiceModel;
use Illuminate\Http\Request;

class AdminServiceController extends Controller
{

    public function getService()
    {
        $adminServices = AdminServiceModel::all();
        return view('admin.admin-services', compact('adminServices'));
    }




    public function addService(Request $request)
    {
        $validated = $request->validate([
            's_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            's_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            's_title' => 'nullable|string',
            's_s_desc' => 'nullable|string',
            's_l_desc' => 'nullable|string',
        ]);

        $sIconPath = null;
        $sImagePath = null;


        if ($request->hasFile('s_icon')) {
            $sIconFile = $request->file('s_icon');
            $sIconName = time() . '_icon_' . $sIconFile->getClientOriginalName();
            $sIconPath = $sIconFile->storeAs('uploads/services', $sIconName, 'public');
        }


        if ($request->hasFile('s_image')) {
            $sImageFile = $request->file('s_image');
            $sImageName = time() . '_image_' . $sImageFile->getClientOriginalName();
            $sImagePath = $sImageFile->storeAs('uploads/services', $sImageName, 'public');
        }


        AdminServiceModel::create([
            's_icon' => $sIconPath,
            's_image' => $sImagePath,
            's_title' => $request->input('s_title'),
            's_s_desc' => $request->input('s_s_desc'),
            's_l_desc' => $request->input('s_l_desc'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }




    public function editService(Request $request, $id)
    {

        $validated = $request->validate([
            's_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            's_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            's_title' => 'nullable|string',
            's_s_desc' => 'nullable|string',
            's_l_desc' => 'nullable|string',
        ]);


        $service = AdminServiceModel::find($id);

        if ($service) {

            if ($request->hasFile('s_icon')) {

                if (file_exists(public_path('storage/' . $service->s_icon))) {
                    unlink(public_path('storage/' . $service->s_icon));
                }


                $iconFile = $request->file('s_icon');
                $iconFileName = time() . '_icon_' . $iconFile->getClientOriginalName();
                $iconFilePath = $iconFile->storeAs('uploads/services', $iconFileName, 'public');
                $service->s_icon = $iconFilePath;
            }


            if ($request->hasFile('s_image')) {

                if (file_exists(public_path('storage/' . $service->s_image))) {
                    unlink(public_path('storage/' . $service->s_image));
                }


                $imageFile = $request->file('s_image');
                $imageFileName = time() . '_image_' . $imageFile->getClientOriginalName();
                $imageFilePath = $imageFile->storeAs('uploads/services', $imageFileName, 'public');
                $service->s_image = $imageFilePath;
            }


            $service->s_title = $request->input('s_title');
            $service->s_s_desc = $request->input('s_s_desc');
            $service->s_l_desc = $request->input('s_l_desc');

            // Save the changes
            $service->save();

            return back()->with('success', 'Service updated successfully!');
        } else {
            return back()->with('error', 'Service not found.');
        }
    }







    public function deleteService($id)
    {
        
        $service = AdminServiceModel::find($id);

        if ($service) {
            
            if ($service->s_icon && file_exists(public_path('storage/' . $service->s_icon))) {
                unlink(public_path('storage/' . $service->s_icon));
            }

            
            if ($service->s_image && file_exists(public_path('storage/' . $service->s_image))) {
                unlink(public_path('storage/' . $service->s_image));
            }

            
            $service->delete();

            
            return back()->with('success', 'Service deleted successfully!');
        } else {
            
            return back()->with('error', 'Service not found.');
        }
    }
}
