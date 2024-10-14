<?php

namespace App\Http\Controllers;

use App\Models\AdminTeamsModel;
use Illuminate\Http\Request;

class AdminTeamsController extends Controller
{
    public function getTeam()
    {
        $teams = AdminTeamsModel::all();
        return view('admin.admin-team', compact('teams'));
    }




    public function addTeam(Request $request)
    {
        $validated = $request->validate([
            't_img' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            't_name' => 'string',
            't_prof' => 'string',
            't_insta' => 'nullable|string',
            't_fb' => 'nullable|string',
            't_twit' => 'nullable|string',
        ]);

        if ($request->hasFile('t_img')) {
            $file = $request->file('t_img');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/teams', $fileName, 'public');
        }


        AdminTeamsModel::create([
            't_img' => $filePath ?? null,
            't_name' => $request->input('t_name'),
            't_prof' => $request->input('t_prof'),
            't_insta' => $request->input('t_insta'),
            't_fb' => $request->input('t_fb'),
            't_twit' => $request->input('t_twit'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }




    public function editTeam(Request $request, $id)
    {
        $validated = $request->validate([
            't_img' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            't_name' => 'string',
            't_prof' => 'string',
            't_insta' => 'nullable|string',
            't_fb' => 'nullable|string',
            't_twit' => 'nullable|string',
        ]);

        $teamInfo = AdminTeamsModel::find($id);

        if ($teamInfo) {
            if ($request->hasFile('t_img')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $teamInfo->t_img))) {
                    unlink(public_path('storage/' . $teamInfo->t_img));
                }

                // Store the new image
                $file = $request->file('t_img');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/teams', $fileName, 'public');
                $teamInfo->t_img = $filePath;
            }

            $teamInfo->t_name = $request->input('t_name');
            $teamInfo->t_prof = $request->input('t_prof');
            $teamInfo->t_insta = $request->input('t_insta');
            $teamInfo->t_fb = $request->input('t_fb');
            $teamInfo->t_twit = $request->input('t_twit');
            $teamInfo->save();

            return back()->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }






    public function deleteTeam($id)
    {
        $teamInfo = AdminTeamsModel::find($id);

        if ($teamInfo) {

            if (file_exists(public_path('storage/' . $teamInfo->t_img))) {
                unlink(public_path('storage/' . $teamInfo->t_img));
            }


            $teamInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }
}
