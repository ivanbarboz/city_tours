<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\User;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function index(){
        $regions = Region::get();
        return response()->json($regions);
    }
    public function store(Request $request){
        $region = Region::create($request->all());
        return response()->json($region);
    }

}
