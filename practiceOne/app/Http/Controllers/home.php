<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    public function index(){
    	return view('home.index');
    }
     public function list(){

        $students = $this->getStudentList();
        return view('home.view_users', ['std'=>$students]);
    }

    public function show($id){
        $students = $this->getStudentList();
        $s="";
        foreach ($students as $std) {
            if($std['id'] == $id){
                $s = $std;
                break;
            }
        }
        return view('home.show', $s);
    }

    public function add(){
        return view('home.add');

    }

    public function create(Request $req){
        return redirect()->route('home.index');
    }

    public function edit($id){
        $students = $this->getStudentList();
        $s="";
        foreach ($students as $std) {
            if($std['id'] == $id){
                $s = $std;
                break;
            }
        }
        return view('home.edit', $s);
    }

    public function update($id, Request $req){
        return redirect()->route('home.list');
    }

    public function delete($id){
         $students = $this->getStudentList();
        $s="";
        foreach ($students as $std) {
            if($std['id'] == $id){
                $s = $std;
                break;
            }
        }
        return view('home.delete', $s);
    }

    public function destroy($id, Request $req){
        return redirect()->route('home.list');
    }

    public function getStudentList(){
        return [
            ['id'=>'12','name'=>'alamin','cgpa'=>2.4,'dept'=>'CS'],
            ['id'=>'14','name'=>'RAKIB','cgpa'=>2.4,'dept'=>'CIS'],
            ['id'=>'15','name'=>'XYZ','cgpa'=>2.4,'dept'=>'CS'],
            ['id'=>'16','name'=>'ABC','cgpa'=>2.4,'dept'=>'CSE'],
            ['id'=>'13','name'=>'sadsdj','cgpa'=>2.4,'dept'=>'CSSE']
        ];
    }
}
