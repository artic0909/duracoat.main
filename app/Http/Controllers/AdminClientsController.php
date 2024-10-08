<?php

namespace App\Http\Controllers;

use App\Models\AdminClientsModel;
use Illuminate\Http\Request;

class AdminClientsController extends Controller
{
    public function getClient()
    {
        $clients = AdminClientsModel::all();
        return view('admin.admin-clients', compact('clients'));
    }




    public function addClient(Request $request)
    {
        $validated = $request->validate([
            'client_img' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'client_name' => 'string',
        ]);

        if ($request->hasFile('client_img')) {
            $file = $request->file('client_img');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/clients', $fileName, 'public');
        }


        AdminClientsModel::create([
            'client_img' => $filePath ?? null,
            'client_name' => $request->input('client_name'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }




    public function editClient(Request $request, $id)
    {
        $validated = $request->validate([
            'client_img' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'client_name' => 'string',
        ]);

        $clientsInfo = AdminClientsModel::find($id);

        if ($clientsInfo) {
            if ($request->hasFile('client_img')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $clientsInfo->client_img))) {
                    unlink(public_path('storage/' . $clientsInfo->client_img));
                }

                // Store the new image
                $file = $request->file('client_img');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/clients', $fileName, 'public');
                $clientsInfo->client_img = $filePath;
            }

            $clientsInfo->client_name = $request->input('client_name');
            $clientsInfo->save();

            return back()->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }






    public function deleteClient($id)
    {
        $clientsInfo = AdminClientsModel::find($id);

        if ($clientsInfo) {

            if (file_exists(public_path('storage/' . $clientsInfo->client_img))) {
                unlink(public_path('storage/' . $clientsInfo->client_img));
            }


            $clientsInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }
}
