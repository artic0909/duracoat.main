<?php

namespace App\Http\Controllers;

use App\Models\AdminAboutDataModel;
use App\Models\AdminAboutNumberModel;
use App\Models\AdminBlogsModel;
use App\Models\AdminCollabCompanyModel;
use App\Models\AdminGalleryBendingModel;
use App\Models\AdminGalleryCoatingModel;
use App\Models\AdminHomeBannerModel;
use App\Models\AdminServiceModel;
use App\Models\AdminTeamsModel;
use App\Models\AdminTestimonialModel;
use Illuminate\Http\Request;

class FrontHomeController extends Controller
{




    public function getAll()
    {
        $bigbanners = AdminHomeBannerModel::all();
        $aboutDatas = AdminAboutDataModel::all();
        $aboutNums = AdminAboutNumberModel::all();
        $services = AdminServiceModel::all();
        $gcs = AdminGalleryCoatingModel::all();
        $gbs = AdminGalleryBendingModel::all();
        $brands = AdminCollabCompanyModel::all();
        $teams = AdminTeamsModel::all();
        $tsts = AdminTestimonialModel::all();
        return view('home', compact('bigbanners', 'aboutDatas', 'aboutNums', 'services', 'gcs', 'gbs', 'brands', 'teams', 'tsts'));
    }











    public function addBlog(Request $request)
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
}
