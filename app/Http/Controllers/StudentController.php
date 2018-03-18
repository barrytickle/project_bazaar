<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use DB;
use App\user;
use App\student;
use App\log;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        if(Auth::user()){
          return redirect('student/dashboard');
        }else{
          return view('auth.login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $input = $request->all();
      $id = $request->input('student_email');
      $email = $id.'@go.edgehill.ac.uk';
      $password = bcrypt($request->input('student_password'));
      $checker = user::where('email', '=', $email)->orWhere('password', '=', $password)->first();
      if (count($checker) < 1) {
        echo 'Not found';
      }else{
        $student = user::findOrFail($checker->id);
        echo $student->id;
        $student_id = student::where('user_id', '=', $student->id)->first();
        $student_id = $student_id->student_id;
        $ip_address = $_SERVER['REMOTE_ADDR'] ;
        $date = date('Y-m-d H:i:s');
        log::create(['student_id' => $student_id, 'date' => $date, 'ip_address' => $ip_address]);

        Auth::loginUsingId($student->id);
        return redirect('student/dashboard');
      }


}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

}
