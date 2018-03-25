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
    public function index(){
      $user = Auth::user();
      $staff_name = Auth::user()->staff->staff_name;
      $degree = degree::all()->count();
      $blog = blog::all();
      $student = student::all()->count();
      $project = project::where('is_authorized', '=', FALSE)->get();
      $staff_count = staff::all()->count();
      $years = array();
      foreach($project as $pro){
        $date = $pro->project_date;
        $newformat = date('Y',strtotime($date));
        if(!in_array($newformat, $years)){
          array_push($years, $newformat);
        }
      }
      return view('staff.dashboard.index', compact('staff_name', 'degree', 'project', 'degree', 'years', 'blog', 'student'));
    }
}
