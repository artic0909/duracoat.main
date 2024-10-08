<?php

namespace App\Http\Controllers;

use App\Models\AdminCollabCompanyModel;
use Illuminate\Http\Request;

class AdminCollabCompanyController extends Controller
{
    public function getCollab()
    {
        $collabs = AdminCollabCompanyModel::all();
        return view('admin.admin-collab', compact('collabs'));
    }




    public function addCollab(Request $request)
    {
        $validated = $request->validate([
            'collab_company' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'collab_company_name' => 'string',
        ]);

        if ($request->hasFile('collab_company')) {
            $file = $request->file('collab_company');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/collab', $fileName, 'public');
        }


        AdminCollabCompanyModel::create([
            'collab_company' => $filePath ?? null,
            'collab_company_name' => $request->input('collab_company_name'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }




    public function editCollab(Request $request, $id)
    {
        $validated = $request->validate([
            'collab_company' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'collab_company_name' => 'string',
        ]);

        $collabInfo = AdminCollabCompanyModel::find($id);

        if ($collabInfo) {
            if ($request->hasFile('collab_company')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $collabInfo->collab_company))) {
                    unlink(public_path('storage/' . $collabInfo->collab_company));
                }

                // Store the new image
                $file = $request->file('collab_company');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/collab', $fileName, 'public');
                $collabInfo->collab_company = $filePath;
            }

            $collabInfo->collab_company_name = $request->input('collab_company_name');
            $collabInfo->save();

            return back()->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }






    public function deleteCollab($id)
    {
        $collabInfo = AdminCollabCompanyModel::find($id);

        if ($collabInfo) {

            if (file_exists(public_path('storage/' . $collabInfo->collab_company))) {
                unlink(public_path('storage/' . $collabInfo->collab_company));
            }


            $collabInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }
}
