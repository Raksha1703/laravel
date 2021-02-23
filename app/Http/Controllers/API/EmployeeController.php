<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $empdata = Employee::paginate(15);
        return response(['employee' => $empdata, 'message' => 'data retrive successfully'],200);
    }
}
