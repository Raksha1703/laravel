<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return response(['product' => $product, 'message' => 'data retrive successfully'],200);
    }
    public function save(Request $request)
    {
        $data=$request->all();
        $product = Product::create($data);

        return response(['product' => $product, 'message' => 'data save successfully'],201);
        
    }
    public function update(Request $request, $id)
    {   //return $request->all();
        $product = Product::find($id);
        $product->name=$request->name;
        $product->save();
        return response(['product' => $product, 'message' => 'data updated successfully'],201);

    }
    public function delete($id)
    {
        $product = Product::destroy($id);
        return response(['product' => $product, 'message' => 'data updated successfully'],401);
        
    }
}
