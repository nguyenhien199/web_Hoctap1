<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function getIndex()
    {
        return view('page.home');
    }
    public function getTypeCourse()
    {
        return view('page.typeCourseware');
    }
    public function getDetaiilCourse()
    {
        return view('page.detailCourse');
    }
}
