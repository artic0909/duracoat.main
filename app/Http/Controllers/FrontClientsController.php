<?php

namespace App\Http\Controllers;

use App\Models\AdminClientsModel;
use Illuminate\Http\Request;
use App\Models\AdminOtherBannerModel;


class FrontClientsController extends Controller
{
    public function getAllClients()
    {
        $otherbanners = AdminOtherBannerModel::all();
        $clients = AdminClientsModel::all();
        return view('clients', compact('otherbanners', 'clients'));
    }
}
