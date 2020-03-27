<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentReg extends Controller
{
    public function index(){
    	return view('student.reg.index');
    }
}
