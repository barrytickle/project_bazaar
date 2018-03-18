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

class ProjectController extends Controller
{

    public function __construct()
     {
         $this->middleware('auth');

     }
    public function index(){
      echo 'Hello World';
      $student = Auth::user()->student->id;
      $user = Auth::user();
      $student_id = Auth::user()->student->student_id;
      $degree = degree::all();
      $project = project::where('project_author', '=', $student)->get();
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
      return view('student.dashboard.projects.index', compact('student_id', 'degree', 'project', 'degree_count', 'years', 'staff_count'));
    }

    public function create(){
      $student_id = Auth::user()->student->student_id;
      $degree = degree::all();
      return view('student.dashboard.projects.create', compact('student_id', 'degree'));
    }

    public function store(Request $request)
    {
      $input = $request->all();
      $id = $request->input('student_email');
      $degree = $request->input('degree');
      $email = $id.'@go.edgehill.ac.uk';
      $password = bcrypt($request->input('student_password'));
      $checker = user::where('email', '=', $email)->orWhere('password', '=', $password)->first();
      if (count($checker) < 1) {
        user::create(['email' => $email, 'password' => $password, 'role' => 1]);
        $check_2 = user::where('email', '=', $email)->first();
        print_r($check_2);
        if (count($check_2) > 0) {
          $user_id = $check_2->id;
          echo $user_id;
          student::create(['user_id' => $user_id, 'student_id' => $id, 'degree_id' => $degree]);
        }
        return redirect('/');
      }else{
        echo 'User Already Exists';
    }
  }
}
