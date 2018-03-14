<?php

namespace App\Http\Controllers\operator;

use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;
use App\User;
use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SelectcoursesController extends Controller
{
    public function index()
    {
        return view('operator.indexSelectCourses');
    }
    public function indexShow()
    {
        return view('operator.indexShow');
    }
    public function show(Request $request)
    {
        $id = DB::table('users')->where('post_id', $request->post_id)->first()->id;

        return  $this->showById($id);
    }
    public function showById($id)
    {
        $data['students'] = DB::table('students')->where('user_id',$id)->get();
        return view('operator.showStudentPost_id',$data);

    }
    public function shows($user_id)
    {
        $data['students'] = DB::table('students')->where('user_id', $user_id)->get();

        return view('operator.showStudent', $data);
    }
    public function getPost_id(Request $request)
    {
        $data=DB::table('users')->where('post_id', $request->post_id)->first()->id;
        return view('operator.createStudent')->with(array('user_id'=>$data));

    }
    public function store(StudentRequest $request)
    {
        $student = new Student();
        $student->ave = $request->ave ;
        $student->ave_term =$request->ave_term;
        $student->unit_getting =$request->unit_getting;
        $student->unit_spent =$request->unit_spent;
        $student->unit_term =$request->unit_term;
        $student->state_term =$request->state_term;
        $student->state =$request->state;
        $student->term =$request->term;
        $student->arrival =$request->arrival;
        $student->nighday =$request->nighday;
        $student->num_term =$request->num_term;
        $student->user_id =$request->user_id;
        $student->save();
        return redirect(route('selectCourses.shows',$student->user_id ));
            //->with('user_id',$student->user_id);
    }
    public function delete_create($id)
    {
        $student = Student::where('id' , $id)->first();
        if($student){
            $student->delete();
            return redirect()->route('selectCourses.showById' ,$student->user_id );

        }
        return redirect()->route('selectCourses.showById' ,$student->user_id );

    }
    public function edit($id)
    {
        $student= Student::find($id);
        return view('operator.editStudent' ,compact('student'));


    }
    public function update(StudentRequest $request , $id)
    {
        $student = Student::find($id);
        $student->ave = $request->ave ;
        $student->ave_term =$request->ave_term;
        $student->unit_getting =$request->unit_getting;
        $student->unit_spent =$request->unit_spent;
        $student->unit_term =$request->unit_term;
        $student->state_term =$request->state_term;
        $student->state =$request->state;
        $student->term =$request->term;
        $student->arrival =$request->arrival;
        $student->nighday =$request->nighday;
        $student->num_term =$request->num_term;
        $student->user_id =$request->user_id;
        $student->save();
        return redirect()->route('selectCourses.showById' ,$student->user_id );


    }

}
