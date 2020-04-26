<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\HighSeverity;
use App\MediumSeverity;
use App\LeastSeverity;

class LocationController extends Controller
{
    public function saveloc(Request $request){
       
        $input = $request -> all();
        $lat = $input['lat'];
        $long = $input['long'];
        $location = new Location();
        $location->latitude = $lat;
        $location->longitude = $long;    
        $location->save();
        return ['success' => true, 'message' => 'Location inserted successfully'];
    } 

    public function index(Request $request){
        $input = $request->all();

        if ($input['choice']=='least'){
        $highSeverity = LeastSeverity::all();
        return view('welcome',compact('highSeverity'));
        }
        if($input['choice']=='high'){
        $highSeverity = HighSeverity::all();
        return view('welcome',compact('highSeverity'));
        }
        if($input['choice']=='medium'){
        $highSeverity = MediumSeverity::all();
        return view('welcome',compact('highSeverity'));        
        }
    }
}
