<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contacts;

class contactcontroller extends Controller
{
    public function callcontact(){
        return view('main.Contact');
    }
      public function processForm(Request $request)
    {
        $apps = new contacts;
        $apps->full_name=$request->name;
        $apps->email=$request->email;
        $apps->message=$request->message;

        $apps->save();
        return view('main.Contact');
    }
}
