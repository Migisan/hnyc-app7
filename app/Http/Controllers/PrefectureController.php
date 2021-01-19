<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prefecture;

class PrefectureController extends Controller
{
    /*
     * 都道府県JSONデータ
     */
    public function json(){
        return Prefecture::all()->toJson();
    }
}
