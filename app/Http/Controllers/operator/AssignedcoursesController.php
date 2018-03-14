<?php

namespace App\Http\Controllers\operator;

use App\Http\Requests\AssignedcourseRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Assignedcourse;

class AssignedcoursesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   public function index()
   {
       $data['assignedcourses'] = DB::table('assignedcourses')->get();
       return view('operator.indexAssignedcourses', $data);
   }
   public function store(AssignedcourseRequest $request)
   {

       $assignedcourse = new Assignedcourse();
       if ($request->hasFile('pdf_path')) {
           $pdf_path = $request->file('pdf_path');
           $pdf_name = $request->course_id . '.' . $pdf_path->getClientOriginalExtension();
           $dir_upload = public_path() . '/upload_files/assignedCourse/';
           $pdf_path->move($dir_upload, $pdf_name);
           $assignedcourse->pdf_path = $pdf_name;
       }
       $assignedcourse->course_id =$request->course_id;
       $assignedcourse->course_gp =$request->course_gp;
       $assignedcourse->name =$request->name;
       $assignedcourse->capacity =$request->capacity;
       $assignedcourse->unit =$request->unit;
       $assignedcourse->date =$request->date;
       $assignedcourse->day =$request->day;
       $assignedcourse->time=$request->time;
       $assignedcourse->location=$request->location;
       $assignedcourse->term =$request->term;
       $assignedcourse->post_id =$request->post_id;
       $assignedcourse->prerequisite =$request->prerequisite;
       $assignedcourse->need =$request->need;
       $assignedcourse->type =$request->type;
       $assignedcourse->prof =$request->prof;
       $assignedcourse->user_id=User::where('post_id',$request->post_id)->first()->id;
       $assignedcourse->save();
       return redirect(route('assignedcourses.create'))->with('successMsg', 'user successfully added');
   }
   public function create()
   {
       return view('operator.createCourse');
   }
   public function edit($id)
   {
       $assignedcourse = Assignedcourse::find($id);
       return view('operator.editAssignedCourse', compact('assignedcourse'));
   }
   public function update(AssignedcourseRequest $request, $id)
   {
       $assignedcourse = Assignedcourse::find($id);
       $assignedcourse->course_id =$request->course_id;
       $assignedcourse->course_gp =$request->course_gp;
       $assignedcourse->name =$request->name;
       $assignedcourse->capacity =$request->capacity;
       $assignedcourse->unit =$request->unit;
       $assignedcourse->date =$request->date;
       $assignedcourse->day=$request->day;
       $assignedcourse->time=$request->time;
       $assignedcourse->location=$request->location;
       $assignedcourse->term=$request->term;
       $assignedcourse->post_id=$request->post_id;
       $assignedcourse->prerequisite=$request->prerequisite;
       $assignedcourse->need=$request->need;
       $assignedcourse->type=$request->type;
       $assignedcourse->prof=$request->prof;
       $assignedcourse->user_id=User::where('post_id',$request->post_id)->first()->id;
       $assignedcourse->save();
       return redirect(route('assignedcourses.index'));

   }
   public function delete($id)
   {
       $assignedcourse = Assignedcourse::where('id', $id)->first();
       if($assignedcourse){
           $assignedcourse->delete();
           return redirect()->route('assignedcourses.index');
       }
       return redirect()->route('assignedcourses.index');
   }
   public function show(){}
}
