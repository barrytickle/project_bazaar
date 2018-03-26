<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\role;
use App\User;
use App\degree;
use App\project;
use App\student;
use App\staff;
use App\like;
class StudentDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
      {
          $this->middleware('auth');
      }
    public function index()
    {
        $user = Auth::user();
        $student_id = Auth::user()->student->student_id;
        $degree = degree::all();
        $project = project::where('is_authorized', '=', TRUE)->get();
        $degree_count = $degree->count();
        $staff_count = staff::all()->count();
        $years = array();
        foreach($project as $pro){
          $date = $pro->project_date;
          $newformat = date('Y',strtotime($date));
          if(!in_array($newformat, $years)){
            array_push($years, $newformat);
          }
        }
        return view('student.dashboard.index', compact('student_id', 'degree', 'project', 'degree_count', 'years', 'staff_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = project::findOrFail($id);
        $user = Auth::user();
        $student_id = Auth::user()->student->student_id;
        $like = project::find($id)->like()->where('student_id', '=', Auth::user()->student->id)->first();
        $like = count($like);
        return view('student.dashboard.show', compact('project', 'student_id', 'like'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function projectdisplay($project)
    {
      $student_id = Auth::user()->student->student_id;
      $project = project::where('project_slug', '=', $project)->first();
      return view('students.project', compact('project', 'student_id'));
    }

}
