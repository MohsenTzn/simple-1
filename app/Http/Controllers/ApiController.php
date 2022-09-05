<?php

namespace App\Http\Controllers;

use App\Models\Student;
use http\Env\Response;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function store(Request $request)
    {
        Student::query()->create([
            'fname'=>$request['fname'],
            'lname'=>$request['lname'],
            'password'=>$request['password'],
        ]);
        return response()->json(Student::query());
    }

    public function index(Request $request)
    {
        $student=Student::all();
       if ($student)
       {
           return response()->json([
               'student'=>$student
           ]);
       }
       else
       {
           return response()->json([
               'Error'=>'data not found'
           ]);

       }
    }
}
