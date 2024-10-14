<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminAboutDataModel;
use App\Models\AdminAboutNumberModel;
use App\Models\AdminOtherBannerModel;
use App\Models\AdminTeamsModel;

class FrontAboutController extends Controller
{
    public function getAllAbout()
    {
        $otherbanners = AdminOtherBannerModel::all();
        $aboutDatas = AdminAboutDataModel::all();
        $aboutNums = AdminAboutNumberModel::all();
        $teams = AdminTeamsModel::all();
        return view('about', compact('otherbanners', 'aboutDatas', 'aboutNums', 'teams'));
    }
}
