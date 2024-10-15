<?php

namespace App\Http\Controllers;

use App\Models\AdminCompanyDetailsModel;
use App\Models\AdminOtherBannerModel;
use Illuminate\Http\Request;

class FrontTestCirController extends Controller
{
    public function getAllTestCir()
    {
        $otherbanners = AdminOtherBannerModel::all();
        $contacts = AdminCompanyDetailsModel::all();

        return view('test-cirtificate', compact('otherbanners', 'contacts'));
    }
}
