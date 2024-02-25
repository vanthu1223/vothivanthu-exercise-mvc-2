<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getStudents(){
        $rows = Student::all();
        return compact('rows');
    }
    public function showStudents(){
        $rows = Student::all();
        return view('students',compact('rows'));
    }
    public function getStudentById($id){
        $rows = Student::find($id);
        if($rows){
            return $rows;
        }
        else {
            return 'Student not found';
        } 
    }
}
