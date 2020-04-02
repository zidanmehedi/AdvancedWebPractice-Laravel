<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentHome extends Controller
{
    public function index(){
    	return view('student.home.content');
    }
}
