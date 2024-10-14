<?php

namespace App\Http\Controllers;

use App\Models\AdminBlogsModel;
use Illuminate\Http\Request;

class AdminBlogsController extends Controller
{
    public function getBlogs()
    {
        $blogDatas = AdminBlogsModel::orderBy('created_at', 'desc')->get();
        return view('admin.admin-blogs', compact('blogDatas'));
    }




    public function addBlogs(Request $request)
    {
        $validated = $request->validate([
            'b_img' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'b_title' => 'string',
            'b_message' => 'nullable|string',
        ]);

        if ($request->hasFile('b_img')) {
            $file = $request->file('b_img');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/blogdata', $fileName, 'public');
        }


        AdminBlogsModel::create([
            'b_img' => $filePath ?? null,
            'b_title' => $request->input('b_title'),
            'b_message' => $request->input('b_message'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }




    public function editBlogs(Request $request, $id)
    {
        $validated = $request->validate([
            'b_img' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'b_title' => 'string',
            'b_message' => 'nullable|string',
        ]);

        $blogDataInfo = AdminBlogsModel::find($id);

        if ($blogDataInfo) {
            if ($request->hasFile('b_img')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $blogDataInfo->b_img))) {
                    unlink(public_path('storage/' . $blogDataInfo->b_img));
                }

                // Store the new image
                $file = $request->file('b_img');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/blogdata', $fileName, 'public');
                $blogDataInfo->b_img = $filePath;
            }

            $blogDataInfo->b_title = $request->input('b_title');
            $blogDataInfo->b_message = $request->input('b_message');
            $blogDataInfo->save();

            return back()->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }






    public function deleteBlogs($id)
    {
        $blogDataInfo = AdminBlogsModel::find($id);

        if ($blogDataInfo) {

            if (file_exists(public_path('storage/' . $blogDataInfo->b_img))) {
                unlink(public_path('storage/' . $blogDataInfo->b_img));
            }


            $blogDataInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }
}
