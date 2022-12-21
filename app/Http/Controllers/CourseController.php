<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    //
    function show ()
    {
        $data = Course::all();
        return view('list',['courses'=> $data]);
    }
}
