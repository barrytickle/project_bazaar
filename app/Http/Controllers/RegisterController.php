<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\user;
use App\student;
use App\degree;

class RegisterController extends Controller
{

    public function index()
    {
      $degree = degree::all();
      $array = array();
      foreach($degree as $deg){
        $array[$deg->id] = $deg->name;
      }
      return view('auth.register', compact('array'));
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
        user::create(['email' => $email, 'password' => $password]);
        $check_2 = user::where('email', '=', $email)->first();
        print_r($check_2);
        if (count($check_2) > 0) {
          $user_id = $check_2->id;
          echo $user_id;
          student::create(['user_id' => $user_id, 'student_id' => $id, 'degree_id' => $degree]);
        }

        $checker_3 = user::where('email', '=', $email)->first();
        echo $checker_3;
        if($checker_3){
          echo 'works';
          $checker_3->role()->attach(1);
        }
        // return redirect('/');
      }else{
        // return redirect('/login');
    }
  }
}
