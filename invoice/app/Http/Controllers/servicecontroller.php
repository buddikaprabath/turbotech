<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\services;

class servicecontroller extends Controller
{
    public function stocksdetail(){
        $types = services::latest()->get();
        return view('employee.service.servicedetail',compact('types'));
    }
    
    public function addservice(Request $request){
        
        $service = new services;
        $service->name=$request->Type;
        $service->cost=$request->Cost;

        $service->save();
        return view('employee.service.addservice');

    }
    public function viewadd(){
        return view('employee.service.addservice');
    }

    public function editservicedetail($id){
        $types=services::findorFail($id);
        return view('employee.service.editfile.editservice',compact('types'));
    }

    public function deleteservice($id){
        $types=services::findorFail($id)->delete();
        return redirect()->back();
    }

}
