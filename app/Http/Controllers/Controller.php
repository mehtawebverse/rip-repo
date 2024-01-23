<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Obituary;
use App\Models\State;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function demo($id)
    {
        $obituary = Obituary::findorFail($id);
        return view('postTribute',compact('obituary'));
        // return view('postTribute');
    }

    public function adminDashboard()
    {
        return view('admin.adminDash');
    }
    public function obForm()
    {
        return view('obituary-form');
    }

    public function homePage()
    {
        $obit = Obituary::all();
        $recentObituaries = Obituary::latest()->take(5)->get();
        $countryCounts = $recentObituaries->groupBy('birth_country')->map->count();

        return view('feeds', compact('obit','recentObituaries','countryCounts'));
    }

    public function testing ()
    {

        return view('card-page');
    }


public function newHome()
{
    return view('newHome');
}

}
