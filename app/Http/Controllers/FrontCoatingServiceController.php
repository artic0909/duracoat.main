<?php

namespace App\Http\Controllers;

use App\Models\AdminCompanyDetailsModel;
use App\Models\AdminOtherBannerModel;
use App\Models\AdminServiceModel;
use Illuminate\Http\Request;



class FrontCoatingServiceController extends Controller
{
    public function getAllCoating()
    {
        $services = AdminServiceModel::all();
        $contacts = AdminCompanyDetailsModel::all();
        $otherbanners = AdminOtherBannerModel::all();
        return view('coating-service', compact('services', 'contacts', 'otherbanners'));
    }
}
