<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {   $search = ($request->name) ? $request->name : "a";
        $empdata = Employee::where('name','LIKE',"%{$search}%")->orderby('id','desc')->paginate(15);
        return response(['employee' => $empdata, 'message' => 'data retrive successfully'],200);
    }
    public function save(Request $request)
    {
        $data=$request->all();
        $empdata = Employee::create($data);
        return response(['employee' => $empdata, 'message' => 'data save successfully'],201);
    }
    public function update(Request $request, $id)
    {   //return $request->all();
        $empdata = Employee::find($id);
        if(!$empdata){
            return "id not found";
        }
        $empdata->name=$request->name;
        $empdata->office=$request->office;
        $empdata->age=$request->age;
        $empdata->position=$request->position;

        $empdata->save();
        return response(['employee' => $empdata, 'message' => 'data updated successfully'],201);
    }
    public function delete($id)
    {
        $empdata = Employee::destroy($id);
        return response(['employee' => $empdata, 'message' => 'data deleted successfully'],201);
        
    }
}
