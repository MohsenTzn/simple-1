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
        Student::query()->create();
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

    function show($id)
    {
        $student = Student::find($id);
        if ($student) {
            return response()->json([
                'student' => $student
            ]);
        } else {
            return response()->json([
                "message" => "No exist Student with  this Id"
            ]);

        }
    }

    function delete($id)
    {
        $student = Student::find($id);
        if ($student) {
            $student->delete($id);
            return response()->json([
                "deleted  successfully "
            ]);
        } else {
            return response()->json([
                "message" => "No exist Student with  this Id"
            ]);

        }
    }
}
