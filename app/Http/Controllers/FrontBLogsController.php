<?php

namespace App\Http\Controllers;

use App\Models\AdminBlogsModel;
use App\Models\AdminCompanyDetailsModel;
use App\Models\AdminOtherBannerModel;
use Illuminate\Http\Request;

class FrontBLogsController extends Controller
{
    public function getAllBlogs()
    {
        $otherbanners = AdminOtherBannerModel::all();
        $blogs = AdminBlogsModel::orderBy('created_at', 'desc')->get();
        $contacts = AdminCompanyDetailsModel::all();

        return view('blog', compact('otherbanners', 'blogs', 'contacts'));
    }
}
