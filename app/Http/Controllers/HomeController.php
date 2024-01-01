<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Institution;

class HomeController extends Controller
{
    public function index()
    {
        $newestCourses = Course::orderBy('id', 'desc')->take(3)->get();
        $randomInstitutions = Institution::inRandomOrder()->take(3)->get();

        return view('home', compact(['newestCourses', 'randomInstitutions']));
    }
}
