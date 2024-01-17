<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tribute;
use App\Models\Obituary;

class TributeController extends Controller
{
  

    public function postTribute(Request $request,$id)
    {
        $obituary = Obituary::findorFail($id);

        $tributeobj = new Tribute();
        $tributeobj->message=$request->message;
        $tributeobj->tribute_by =$request->tribute_by;
        $tributeobj->relation = $request->relation;
        $tributeobj->country = $request->country;
        $obituary->tributes()->save($tributeobj);

    }


}

