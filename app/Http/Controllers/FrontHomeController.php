<?php

namespace App\Http\Controllers;

use App\Models\AdminAboutDataModel;
use App\Models\AdminAboutNumberModel;
use App\Models\AdminBendingServiceModel;
use App\Models\AdminBlogsModel;
use App\Models\AdminCollabCompanyModel;
use App\Models\AdminCompanyDetailsModel;
use App\Models\AdminContactModel;
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
        $bservices = AdminBendingServiceModel::all();
        $gcs = AdminGalleryCoatingModel::all();
        $gbs = AdminGalleryBendingModel::all();
        $brands = AdminCollabCompanyModel::all();
        $teams = AdminTeamsModel::all();
        $tsts = AdminTestimonialModel::all();
        $contacts = AdminCompanyDetailsModel::all();
        return view('home', compact('bigbanners', 'aboutDatas', 'aboutNums', 'services', 'bservices', 'gcs', 'gbs', 'brands', 'teams', 'tsts', 'contacts'));
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
