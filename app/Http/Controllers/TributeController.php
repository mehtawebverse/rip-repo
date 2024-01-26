<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tribute;
use App\Models\Obituary;
use App\Models\Photo;

class TributeController extends Controller
{


    public function postTribute(Request $request, $id)
    {
        $obituary = Obituary::findorFail($id);

        $tributeobj = new Tribute();
        $tributeobj->message = $request->message;
        $tributeobj->name = $request->tribute_by;
        $tributeobj->relation = $request->relation;
        $tributeobj->country = $request->country;
        $obituary->tributes()->save($tributeobj);

    }


    public function tributeFor($id)
    {
        $obituary = Obituary::findorFail($id);
        return view('card-page', compact('obituary'));
    }


    public function numberOne($id)
    {
        $obituary = Obituary::findorFail($id);
        return view('tribute-type.card', compact('obituary'));

    }

    public function numberTwo($id)
    {
        $obituary = Obituary::findorFail($id);
        return view('tribute-type.lighting', compact('obituary'));

    }
    public function numberThree($id)
    {
        $obituary = Obituary::findorFail($id);
        return view('tribute-type.wreath', compact('obituary'));
    }

    public function numberFour($id)
    {
        $obituary = Obituary::findorFail($id);
        return view('tribute-type.letter', compact('obituary'));

    }
    public function numberFive($id)
    {
        $obituary = Obituary::findorFail($id);
        return view('tribute-type.treasured', compact('obituary'));

    }
    public function numberSix($id)
    {
        $obituary = Obituary::findorFail($id);
        return view('tribute-type.message', compact('obituary'));

    }


    /*   
      code to add tributes according to selection of tribute type

      one  ---------- card

      two  ---------- lighting of candle

      three ----------wreath of love

      four ---------- letter

      five ---------- treasured moments

      six ---------- message  

       */

    public function addCard(Request $request, $id)
    {

        $obituary = Obituary::findorFail($id);
        $tributeobj = new Tribute();
        $tributeobj->message = $request->message;
        $tributeobj->name = $request->name;
        $tributeobj->relation = $request->relation;
        $tributeobj->country = $request->country;
        $obituary->tributes()->save($tributeobj);

    }

    public function addLighting(Request $request, $id)
    {
        $obituary = Obituary::findorFail($id);
        $tributeobj = new Tribute();
        $tributeobj->message = $request->message;
        $tributeobj->name = $request->tribute_by;
        $tributeobj->relation = $request->relation;
        $tributeobj->country = $request->country;
        $obituary->tributes()->save($tributeobj);
    }

    public function addWreath(Request $request, $id)
    {
        $obituary = Obituary::findorFail($id);
        $tributeobj = new Tribute();
        $tributeobj->message = $request->message;
        $tributeobj->name = $request->name;
        $tributeobj->relation = $request->relation;
        $tributeobj->country = $request->country;
        $obituary->tributes()->save($tributeobj);
    }

    public function addLetter(Request $request, $id)
    {
        $obituary = Obituary::findorFail($id);
        $tributeobj = new Tribute();
        $tributeobj->message = $request->letter_body;
        $tributeobj->letter_title = $request->letter_title;
        $tributeobj->signature_title = $request->signature_title;
        $tributeobj->name = $request->name;
        $tributeobj->relation = $request->relation;
        $obituary->tributes()->save($tributeobj);
    }

    public function addMoment(Request $request, $id)
    {
        $obituary = Obituary::findorFail($id);
        $tributeobj = new Tribute();
        $tributeobj->photo_title = $request->photo_title;
        $tributeobj->photo_caption = $request->photo_caption;
        $tributeobj->message = $request->message;
        $tributeobj->name = $request->name;
        $tributeobj->relation = $request->relation;
        $tributeobj->country = $request->country;
        $obituary->tributes()->save($tributeobj);
        if ($request->hasFile('photos')) {
            // Use the createMany method to create multiple photos in one go
            $photosData = [];


            foreach ($request->file('photos') as $photo) {

                // $path = $photo->store('tribute_photos', 'public');
                // $photosData[] = ['path' => $path];

                $originalFilename = $photo->getClientOriginalName();

                // Generate a unique filename
                $filename = pathinfo($originalFilename, PATHINFO_FILENAME);
                $extension = $photo->getClientOriginalExtension();
                $uniqueFilename = $filename . '_' . time() . '.' . $extension;

                // Specify the directory where you want to move the file
                $destinationPath = public_path('uploads/tribute_photos');

                // Move the file to the specified directory
                $photo->move($destinationPath, $uniqueFilename);

                // Build the path for database storage
                $photosData[] = ['path' => $uniqueFilename];

            }


            // Save the photos using createMany
            $tributeobj->photos()->createMany($photosData);
        }


    }
    public function addMessage(Request $request, $id)
    {

        $obituary = Obituary::findorFail($id);
        $tributeobj = new Tribute();
        $tributeobj->message = $request->message;
        $tributeobj->name = $request->name;
        $tributeobj->country = $request->country;
        $tributeobj->phone_no = $request->phone_no ; 
        $tributeobj->email = $request->email ;
        $obituary->tributes()->save($tributeobj);

    }

    public function viewTributePage($id)
    {
        $obituary = Obituary::findorFail($id);
        return view('tribute_page',compact('obituary'));
    }

}

