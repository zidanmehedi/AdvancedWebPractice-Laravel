<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentTopicsWindow extends Controller
{
    public function index(){
    	return view('student.topics.index');
    }

    public function topicDetails(){
    	return view('student.topics.topicDetails');
    }
}