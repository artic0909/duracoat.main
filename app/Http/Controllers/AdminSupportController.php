<?php

namespace App\Http\Controllers;

use App\Models\AdminContactModel;
use Illuminate\Http\Request;

class AdminSupportController extends Controller
{




    public function getSupport()
    {
        $queries = AdminContactModel::orderBy('created_at', 'desc')->get();
        return view('admin.customer-support', compact('queries'));
    }




    public function deleteSupport($id)
    {
        $supportInfo = AdminContactModel::find($id);

        if ($supportInfo) {

            $supportInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }
}
