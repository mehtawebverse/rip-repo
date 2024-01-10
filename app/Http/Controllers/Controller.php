<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Models\Country;
use App\Models\State;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    // public function loadFirst(){

    //     $allCountries = Country::all();
    //     $allStates = State::all();
    //     $allCities = City::all();
    //     return view("add",compact("allCountries","allStates","allCities"));
        
    // }

    public function adminDashboard(){
        return view('admin.adminDash');
    }
    public function obForm(){
        return view('obituary-form');
    }
}
