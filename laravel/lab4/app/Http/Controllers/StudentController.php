<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function get_students($id) {
    	$students=array(0 => 'Dauren', 1=>'Talgat', 2 => 'Maksat');
    	return view('student_information', ["name"=>$students[$id]]);
    }
    public function get_data($id) {
        $data = array(0 => "27/09/1993", 1 => "15/04/1991", 2 => "01/01/1994");
        return view('birth', ["birth"=>$data[$id]]);
    }
 
    public function get_age($id) {
        $age = array(0 => '28', 1 => '30', 2 => '27' );
        return view('ages', ["age"=>$age[$id]]);
    }
   
}
