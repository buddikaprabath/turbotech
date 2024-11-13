<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\employees;

class employeedetailcontroller extends Controller
{
    public function empdetail(){
        $types = employees::latest()->get();
        return view('admin.Employeedetail.employee',compact('types'));
    }

    public function registeremployee(){
        return view('admin.Employeedetail.empregister');
    }
    public function storeemployee(Request $req){
        $emp = new employees;
        $emp->EmpName=$req->name;
        $emp->EmpAdd=$req->address;
        $emp->EmpDob=$req->DOB;
        $emp->EmpGender=$req->gender;
        $emp->EmpType=$req->position; 

        $emp->save();
        return view('admin.Employeedetail.empregister');

    }

    public function editemployee($id){
        $types=employees::findorFail($id);
        return view('admin.Employeedetail.editemployee',compact('types'));
    }
    public function deleteemployee($id){
        $types=employees::findorFail($id)->delete();
        return redirect()->back();
    }
        


        
}
