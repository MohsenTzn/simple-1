<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Article;
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

    function show(Student $student)
    {
        //$student = Student::find($id);

        return response()->json([
            'student' => $student
        ]);
    }

    function delete(Student $student)
    {
        //$student = Student::find($id);
        $student->delete();
        return response()->json([
            "deleted  successfully "
        ]);


    }
}
