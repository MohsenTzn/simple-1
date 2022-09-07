<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Http\Resources\StudentResource;
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
    }

    public function index()
    {
        return StudentResource::collection(Student::all());
    }

    function show(Student $student)
    {
        //$student = Student::find($id);

        return StudentResource::make($student);

    }

    function delete(Student $student)
    {
        //$student = Student::find($id);
        $student->delete();
        return response()->json([
            "deleted successfully !"
        ]);


    }
}
