<?php

namespace App\Http\Controllers;

use App\Models\AdminBendingServiceModel;
use App\Models\AdminCompanyDetailsModel;
use App\Models\AdminOtherBannerModel;
use Illuminate\Http\Request;

class FrontBendingServiceController extends Controller
{
    public function getAllBending()
    {
        $services = AdminBendingServiceModel::all();
        $contacts = AdminCompanyDetailsModel::all();
        $otherbanners = AdminOtherBannerModel::all();
        return view('bending-service', compact('services', 'contacts', 'otherbanners'));
    }
}
