<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
{
    /*
     * 市町村JSONデータ
     */
    public function json($id){
        return City::where('prefecture_id', $id)->get()->toJson();
    }
}
