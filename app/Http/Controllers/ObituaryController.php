<?php

namespace App\Http\Controllers;

use App\Models\Obituary;
use Illuminate\Http\Request;
use App\Models\Tribute;
use App\Models\Photo;

class ObituaryController extends Controller
{

  

    public function store(Request $request)
    {

        // Validation rules
        $request->validate([
            'remembrance' => 'required|string',
            'full_name' => 'required|string',
            'profession' => 'required|string',
            'birth_date' => 'required|date',
            'birth_country'=>'required|string',
            'birth_place' => 'required|string',
            'lived_places' => 'nullable|string',
            'death_date' => 'required|date',
            'notification' => 'nullable|string',
            // 'photo' => 'sometimes|photo|mimes:jpeg,png,jpg,gif,ico|max:2048',
            'video' => 'nullable|mimes:mp4,avi,mov,wmv|max:10240',
        ]);

        $storingObj = new Obituary();
        $storingObj->remembrance_day = $request->remembrance;
        $storingObj->full_name = $request->full_name;
        $storingObj->profession = $request->profession;
        $storingObj->birth_date = $request->birth_date;
        $storingObj->religion = $request->religion;
        
        $storingObj->birth_country = ucfirst($request->birth_country);
        $storingObj->birth_place = $request->birth_place;
        $storingObj->lived_places = $request->lived_places;
        $storingObj->death_date = $request->death_date;
        $storingObj->notification = $request->notification;

        // Handle photo upload
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = uniqid() . time() . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('uploads'), $photoName);
            $storingObj->photo = $photoName;
        }

        // Handle video upload
        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoName = mt_rand(100000, 999999) . uniqid() . time() . '.' . $video->getClientOriginalExtension();
            $video->move(public_path('uploads/videos'), $videoName);
            $storingObj->video = $videoName;
        }


        $storingObj->save();
        return response()->json(['success' => 'OB saved successfully']);


    }

    public function toBeEdited($id)
    {
        $data = Obituary::findOrFail($id);
        return view('edit', compact('data'));
    }

    public function editObituary(Request $request, $id)
    {
        
        $updateObituary = Obituary::findorFail($id);
        $updateObituary->remembrance_day = $request->remembrance;
        $updateObituary->full_name = $request->full_name;
        $updateObituary->profession = $request->profession;
        $updateObituary->birth_date = $request->birth_date;
        $updateObituary->birth_place = $request->birth_place;
        $updateObituary->lived_places = $request->lived_places;
        $updateObituary->death_date = $request->death_date;
        $updateObituary->notification = $request->notification;


        if ($request->hasFile('photo')) {
            // Delete the old photo if it exists
            if ($updateObituary->photo) {
                $oldPhotoPath = public_path('uploads/' . $updateObituary->photo);
                if (file_exists($oldPhotoPath)) {
                    unlink($oldPhotoPath);
                }
            }
    
            // Upload and save the new photo
            $photo = $request->file('photo');
            $photoName = uniqid() . time() . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('uploads'), $photoName);
            $updateObituary->photo = $photoName;
        }

        if ($request->hasFile('video')) {
            // Delete the old video if it exists
            if ($updateObituary->video) {
                $oldVideoPath = public_path('uploads/videos/' . $updateObituary->video);
                if (file_exists($oldVideoPath)) {
                    unlink($oldVideoPath);
                }
            }
    
            // Upload and save the new video
            $video = $request->file('video');
            $videoName = mt_rand(100000, 999999) . uniqid() . time() . '.' . $video->getClientOriginalExtension();
            $video->move(public_path('uploads/videos'), $videoName);
            $updateObituary->video = $videoName;
        }
       $updateObituary->save();
    }



    public function allData()
    {
        $data = Obituary::all();
        return view('admin.everyObituary')->with('list', $data);
    }

    public function delete($id)
    {
        $data = Obituary::findorFail($id);
        $data->delete();
        return redirect()->back();
    }


    public function clickedObituary($id)
    {
        $obit = Obituary::findorFail($id);
        // return view('obituary-page');
        
        return view ('obituary-page',compact('obit'));
    }

}
