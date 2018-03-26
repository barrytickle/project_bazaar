<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;
use App\degree;
use App\project;
use App\staff;
use App\student;
use App\blog;

class StaffDashboardController extends Controller
{
    public function __construct(){
      if(!empty(Auth::user())){
        if(Auth::user()->role[0]->name != 'staff' ){
          return redirect('/student/dashboard');
        }
      }else{
        return redirect('/login');
      }
      }
    public function index(){
      $user = Auth::user();
      $staff_name = Auth::user()->staff->staff_name;
      $degree = degree::all();
      $project = project::where('is_authorized', '=', FALSE)->get();
      $degree_count = $degree->count();
      $staff_count = staff::all()->count();
      $blog = blog::all();
      $student = student::all();
      $years = array();
      foreach($project as $pro){
        $date = $pro->project_date;
        $newformat = date('Y',strtotime($date));
        if(!in_array($newformat, $years)){
          array_push($years, $newformat);
        }
      }
      return view('staff.dashboard.index', compact('staff_name', 'degree', 'project', 'degree_count', 'years', 'staff_count', 'blog', 'student'));
    }

    


  }
