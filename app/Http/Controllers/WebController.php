<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function myshop()
    {
        $address = "IT CP KKU";
        $mobilephone = "2321332";
        $location = "kku";

        return view('myshop',[
            'address'=>$address,
            'mobilephone'=>$mobilephone,
            'location'=>$location
        ]);
    }
}
