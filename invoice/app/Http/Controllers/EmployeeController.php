<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\appoinments;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function EmployeeDashboard(){
        return view('employee.employee_dashboard');
    }
    public function employeemain(){
        return view('employee.dashboard');
    }//end method
    public function appoinmentcall(){
        return view('employee.appoinments.appoinmentdetail');
    }
}
