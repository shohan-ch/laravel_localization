<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalController extends Controller
{
    //

    public function welcome()
    {


        $arr = ["Ronaldo", "Messi", "Other"];
        return view("front.index")->with("array", $arr);
        // return "hello";
    }

    public function formsubmit(Request $request)
    {

        return $request->all();
    }
}