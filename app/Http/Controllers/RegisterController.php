<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\user;

class RegisterController extends Controller
{

    public function index()
    {
      return view('students.register');
    }

    public function store(Request $request)
    {
    
    }
}
