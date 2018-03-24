<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\log;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student_id = Auth::user()->student->student_id;
        $logs = log::where('student_id', '=', $student_id)->get();
        return view('student.dashboard.logs.index', compact('logs', 'student_id'));
    }
}
