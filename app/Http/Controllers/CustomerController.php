<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use app\Models\Customer;
use DB;

class CustomerController extends Controller
{
    public function add()
    {           
    return view('add');
    }
    public function save(Request $request)
    {
        DB::table('customers')->insert([
            //$customer = new Customer;
            //$customer->name=$requset->name;
            //$customer->description=$requset->description;
            //$customer->save();
            'name'=>$request->name,
            'description'=>$request->description,

        ]);
        return back()->with('post_add','Data added successfully');
    }
    public function list()
    {
        $cust = DB::table('customers')->get();
        return view('display', ['cust' => $cust]);
    }
}
