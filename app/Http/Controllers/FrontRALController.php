<?php

namespace App\Http\Controllers;

use App\Models\AdminCompanyDetailsModel;
use App\Models\AdminOtherBannerModel;
use App\Models\AdminRalModel;
use Illuminate\Http\Request;

class FrontRALController extends Controller
{
    public function getAllRAL()
    {
        $otherbanners = AdminOtherBannerModel::all();
        $rals = AdminRalModel::all();
        $contacts = AdminCompanyDetailsModel::all();

        return view('ral', compact('otherbanners', 'rals', 'contacts'));
    }
}
