<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;
use App\user;
use App\staff;
class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function __construct(){
       if(Auth::user()){
         if(strtolower(Auth::user()->role[0]->name) == 'student'){
           return redirect('/student/dashboard/');
         }
       }
     }

    public function index()
    {
        return view('staff.login');
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
      $input = $request->all();
      $email = $request->input('staff_email');
      $password = bcrypt($request->input('staff_password'));
      $checker = user::where('email', '=', $email)->orWhere('password', '=', $password)->first();
      if (count($checker) < 1) {
        return redirect('/staff');
      }else{
        $staff = user::findOrFail($checker->id);
        echo $staff->id;
        $student_id = staff::where('user_id', '=', $staff->id)->first();
        Auth::loginUsingId($staff->id);
        return redirect('staff/dashboard');
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
