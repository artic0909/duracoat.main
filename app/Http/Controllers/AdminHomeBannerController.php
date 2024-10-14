<?php

namespace App\Http\Controllers;

use App\Models\AdminHomeBannerModel;
use Illuminate\Http\Request;

class AdminHomeBannerController extends Controller
{
    public function getHomeBanner()
    {
        $homeBanners = AdminHomeBannerModel::all();
        return view('admin.home-banner', compact('homeBanners'));
    }




    public function addHomeBanner(Request $request)
    {
        $validated = $request->validate([
            'home_banner' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'home_banner_title' => 'string|nullable',
        ]);

        if ($request->hasFile('home_banner')) {
            $file = $request->file('home_banner');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/homebanner', $fileName, 'public');
        }


        AdminHomeBannerModel::create([
            'home_banner' => $filePath ?? null,
            'home_banner_title' => $request->input('home_banner_title'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }




    public function editHomeBanner(Request $request, $id)
    {
        $validated = $request->validate([
            'home_banner' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'home_banner_title' => 'string|nullable',
        ]);

        $homeBannerInfo = AdminHomeBannerModel::find($id);

        if ($homeBannerInfo) {
            if ($request->hasFile('home_banner')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $homeBannerInfo->home_banner))) {
                    unlink(public_path('storage/' . $homeBannerInfo->home_banner));
                }

                // Store the new image
                $file = $request->file('home_banner');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/homebanner', $fileName, 'public');
                $homeBannerInfo->home_banner = $filePath;
            }

            $homeBannerInfo->home_banner_title = $request->input('home_banner_title');
            $homeBannerInfo->save();

            return back()->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }






    public function deleteHomeBanner($id)
    {
        $homeBannerInfo = AdminHomeBannerModel::find($id);

        if ($homeBannerInfo) {

            if (file_exists(public_path('storage/' . $homeBannerInfo->home_banner))) {
                unlink(public_path('storage/' . $homeBannerInfo->home_banner));
            }


            $homeBannerInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }
}
