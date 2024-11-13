<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function AdminDashboard(){
        return view('admin.index');
    }//end method

    public function adminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/mainbody/body');
    }//end method

    public function adminLogin(){
        return view('admin.admin_login');
    }//end method

    public function adminprofile(){
        $id = Auth::user()->id;
        $profileData=user::find($id);
        return view('admin.admin_profile_view',compact('profileData'));

    }//end method
    public function adminprofileStore(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->username = $request->username; 
        $data->name = $request->name; 
        $data->email = $request->email; 
        $data->phone = $request->phone; 
        $data->address = $request->address; 
         
        
        if($request->file('photo')){
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['photo'] = $filename;
        }
        $data->save();

        $notification = array(
            'message'=>'admin profile updated successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

    public function adminchangepassword(){
        $id = Auth::user()->id;
        $profileData=user::find($id);
        return view('admin.admin_change_password',compact('profileData'));
    }
    public function adminupdatepassword(Request $request){
        $request->validate([
            'old_password'=>'required',
            'new_password'=>'required|confirmed'
        ]);
        ///match the old password
        if(!Hash::check($request->old_password, auth::user()->password)){
            $notification = array(
                'message'=>'Old Password Does not Match',
                'alert-type'=>'error'
            );
            return back()->with($notification);
        }
        ////update the new password
        user::whereId(auth()->user()->id)->update([
            'password' =>Hash::make($request->new_password)
        ]);
        $notification = array(
            'message'=>'password Change Successfully',
            'alert-type'=>'success'
        );
        return back()->with($notification);
    }
   
   
    public function mainstockcll(){
        return view('admin.Stock.mainstock');
    }
    public function stockincll(){
        return view('admin.Stock.stockin');
    }
    public function stockoutcll(){
        return view('admin.Stock.stockout');
    }
    public function billcll(){
        return view('admin.bill.billdetail');
    }
    public function billcreate(){
        return view('admin.bill.makebill');
    }
    
}
