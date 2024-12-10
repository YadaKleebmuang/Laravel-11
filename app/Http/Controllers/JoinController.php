<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\support\Facades\DB;

class JoinController extends Controller
{
    public function InnerJoin()
    {
        $result = DB::table('Students')
        ->Join('teachers','students.id','=','teachers.student_id')
        ->select('students.name as student_name','teachers.name as teacher_name')
        ->get();
        return $result;
    }
    
    ///Left Join
    public function LeftJoin()
    {
        $result = DB::table('Students')
        ->LeftJoin('teachers','students.id','=','teachers.student_id')
        ->select('students.name as student_name','teachers.name as teacher_name')
        ->get();
        return $result;
    }
    
    ///Right Join
    public function RightJoin()
    {
        $result = DB::table('Students')
        ->RightJoin('teachers','students.id','=','teachers.student_id')
        ->select('students.name as student_name','teachers.name as teacher_name')
        ->get();
        return $result;
    }
    
    ///FullOuter Join
    public function FullOuterJoin()
    {
        $re_leftjoin = DB::table('Students')
        ->LeftJoin('teachers','students.id','=','teachers.student_id')
        ->select('students.name as student_name','teachers.name as teacher_name');
        
        $re_rightjoin = DB::table('Students')
        ->RightJoin('teachers','students.id','=','teachers.student_id')
        ->select('students.name as student_name','teachers.name as teacher_name');

        $result = $re_leftjoin->union($re_rightjoin)
        ->get();

        return $result;
    }
}