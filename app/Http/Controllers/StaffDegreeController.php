<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\degree;

class StaffDegreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(){

       if(Auth::user()->role[0]->name == 'student'){
         return redirect('/student/dashboard');
       }
     }

    public function index()
    {
      $staff_name = Auth::user()->staff->staff_name;
      $degrees = degree::all();
      return view('staff.dashboard.degrees.index', compact('staff_name', 'degrees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $staff_name = Auth::user()->staff->staff_name;
      return view('staff.dashboard.degrees.create', compact('staff_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $name = $request->input('name');
      degree::create(['name' => $name] );
      return redirect('/staff/dashboard/degrees');
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
      $degree = degree::findOrFail($id);
      $staff_name = Auth::user()->staff->staff_name;
      return view('staff.dashboard.degrees.edit', compact('degree', 'staff_name'));
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
      $degree = degree::findOrFail($id);
      $name = $request->input('name');
      $degree->update(['name' => $name]);
      return redirect('/staff/dashboard/degrees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $degree = degree::find($id);
      $degree->delete();
      return redirect('/staff/dashboard/degrees');
    }
}
