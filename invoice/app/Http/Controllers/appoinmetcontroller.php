<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\appoinments;

class appoinmetcontroller extends Controller
{
    public function makeappoinment(){
        return view('main.Appointment');
    }

    public function storeappoinment(Request $request){
        $app = new appoinments;
        $app->name=$request->name;
        $app->appoinment_date=$request->date;
        $app->appoinment_time=$request->time;
        $app->phone=$request->phone;

        $app->save();
        return view('main.Appointment');

    }

    public function apoinmentdetail(){
        $types = appoinments::latest()->get();
        return view('employee.appoinments.appoinmentdetail',compact('types'));
    }

    public function editappoinment($id){
        $types=appoinments::findorFail($id);
        return view('employee.appoinments.appoinmentedit',compact('types'));
    }
    public function deleteappoinment($id){
        $types=appoinments::findorFail($id)->delete();
        return redirect()->back();
    }
 
}
