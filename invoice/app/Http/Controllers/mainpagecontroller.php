<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainpagecontroller extends Controller
{
    public function bodycall(){
        return view('mainbody.body');
    }

    public function callabout(){
        return view('main.About');
    }
    public function callservice(){
        return view('main.service');
    }

}
