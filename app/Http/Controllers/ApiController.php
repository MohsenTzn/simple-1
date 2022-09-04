<?php

namespace App\Http\Controllers;

use App\Models\Student;
use http\Env\Response;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function store(Request $request)
    {
        $student=new Student();
        $student->fname = $request->input('fname');
        $student->lname = $request->input('lname');
        $student->password = $request->input('password');
        $student->save();
        return response()->json($student);
    }

    public function index(Request $request)
    {
        $student=Student::all();
       if (isset($student))
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
