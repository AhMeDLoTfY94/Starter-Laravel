<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class FristController extends Controller
{
    public function __construct()
    {
        $this ->middleware("auth")->except("getindex");
    }

    public function show(){
        return "lolo";
    }

    public function getindex(){

        $data=['ahmedlotfy','noor alby'];
        return view("welcome",compact('data'));
    }
}
