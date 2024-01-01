<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::searchResults()
            ->paginate(6);

        $breadcrumb = "課程";

        return view('courses.index', compact(['courses', 'breadcrumb']));
    }

    public function show(Course $course)
    {
        $course->load('institution');
        $breadcrumb = $course->name;

        return view('courses.show', compact(['course', 'breadcrumb']));
    }
}
