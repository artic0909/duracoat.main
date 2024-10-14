<?php

namespace App\Http\Controllers;

use App\Models\AdminBlogsModel;
use App\Models\AdminOtherBannerModel;
use Illuminate\Http\Request;

class FrontBLogsController extends Controller
{
    public function getAllBlogs()
    {
        $otherbanners = AdminOtherBannerModel::all();
        $blogs = AdminBlogsModel::orderBy('created_at', 'desc')->get();
        return view('blog', compact('otherbanners', 'blogs'));
    }
}
