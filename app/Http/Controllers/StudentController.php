<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use http\Env\Response;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(StudentRequest $request)
    {
        $data = Student::create($request->validated());
        return response()->json([
            $data
        ]);
        Student::query()->create([
            'fname' => $request['fname'],
            'lname' => $request['lname'],
            'password' => $request['password'],
        ]);
        return response()->json(Student::query());
    }

    public function index(Request $request)
    {
        $student = Student::all();
        if ($student) {
            return response()->json([
                'student' => $student
            ]);
        } else {
            return response()->json([
                'Error' => 'data not found'
            ]);

        }
    }
}
