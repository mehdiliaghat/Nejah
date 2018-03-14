<?php

namespace App\Http\Controllers\operator;

use App\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SelectCourseStudentController extends Controller
{
     public function index()
     {
         return view('operator.studentSelectCourses');

     }
    public function getPost_id(Request $request)
    {
        $id = DB::table('users')->where('post_id', $request->post_id)->first()->id;
        $data = DB::table('students')->where('user_id',$id)->first()->id;
        return $this->student_id($data);
    }
    public function student_id($data)
    {
        $student = Student::find($data);
        $assignedcourses = $student->assignedcourses;

        return view('operator.studentSelectCourseIndex' ,compact('assignedcourses'))->with(array('student_id'=>$data));
    }

    public function store(Request $request)
    {
        $data = $request->student_id;

        $student = Student::find($data);
        $assignedcourse_id = DB::table('assignedcourses')
            ->where('course_id',$request->course_id)
            ->where('course_gp' ,$request->course_gp)
            ->first()->id;
        $student->assignedcourses()->attach($assignedcourse_id);

        return redirect(route('selectCourse.student_id' ,$data ));

    }
    public function delete($id ,$data)
    {
        $student = Student::find($data);
        $student->assignedcourses()->detach($id);
        return redirect(route('selectCourse.student_id' ,$data ));

    }

}
