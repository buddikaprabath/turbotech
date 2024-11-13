<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stocks;

class stockscontroller extends Controller
{
   
    public function stocksdetail(){
        $types = stocks::latest()->get();
        return view('employee.stocks.mainstock',compact('types'));
    }
    public function addmainstock(Request $request){
        $stock = new stocks;
        $stock->Category=$request->category;
        $stock->brand=$request->brand;
        $stock->size=$request->size;
        $stock->price=$request->price;

        $stock->save();
        return view('employee.stocks.addmainstock');

    }
    public function viewadd(){
        return view('employee.stocks.addmainstock');
    }

    public function editmainproducts($id){
        $types=stocks::findorFail($id);
        return view('employee.stocks.editfile.editmainproduct',compact('types'));
    }

    public function deletemainstock($id){
        $types=stocks::findorFail($id)->delete();
        return redirect()->back();
    }

}
