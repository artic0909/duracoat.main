<?php

namespace App\Http\Controllers;

use App\Models\AdminTestimonialModel;
use Illuminate\Http\Request;

class AdminTestimonialController extends Controller
{
    public function getTST()
    {
        $tsts = AdminTestimonialModel::all();
        return view('admin.admin-testimonial', compact('tsts'));
    }




    public function addTST(Request $request)
    {
        $validated = $request->validate([
            'tst_img' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'tst_name' => 'string',
            'tst_prof' => 'string',
            'tst_msg' => 'nullable|string',
        ]);

        if ($request->hasFile('tst_img')) {
            $file = $request->file('tst_img');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/testimonial', $fileName, 'public');
        }


        AdminTestimonialModel::create([
            'tst_img' => $filePath ?? null,
            'tst_name' => $request->input('tst_name'),
            'tst_prof' => $request->input('tst_prof'),
            'tst_msg' => $request->input('tst_msg'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }




    public function editTST(Request $request, $id)
    {
        $validated = $request->validate([
            'tst_img' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'tst_name' => 'string',
            'tst_prof' => 'string',
            'tst_msg' => 'nullable|string',
        ]);

        $tstInfo = AdminTestimonialModel::find($id);

        if ($tstInfo) {
            if ($request->hasFile('tst_img')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $tstInfo->tst_img))) {
                    unlink(public_path('storage/' . $tstInfo->tst_img));
                }

                // Store the new image
                $file = $request->file('tst_img');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/testimonial', $fileName, 'public');
                $tstInfo->tst_img = $filePath;
            }

            $tstInfo->tst_name = $request->input('tst_name');
            $tstInfo->tst_prof = $request->input('tst_prof');
            $tstInfo->tst_msg = $request->input('tst_msg');
            $tstInfo->save();

            return back()->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }






    public function deleteTST($id)
    {
        $tstInfo = AdminTestimonialModel::find($id);

        if ($tstInfo) {

            if (file_exists(public_path('storage/' . $tstInfo->tst_img))) {
                unlink(public_path('storage/' . $tstInfo->tst_img));
            }


            $tstInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }
}
