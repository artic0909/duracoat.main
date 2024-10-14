<?php

namespace App\Http\Controllers;

use App\Models\AdminOtherBannerModel;
use Illuminate\Http\Request;

class FrontTestCirController extends Controller
{
    public function getAllTestCir()
    {
        $otherbanners = AdminOtherBannerModel::all();
        return view('test-cirtificate', compact('otherbanners'));
    }
}
