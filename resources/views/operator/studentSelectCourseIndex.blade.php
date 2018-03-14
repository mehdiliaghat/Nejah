@extends('operator.base')
@section('page-wrapper')
    <br>

    <form method="post" action="{{route('selectCourseStudent.store')}}"  role="form" >
        {!! csrf_field() !!}
        <div class="form-group">
            <input type="hidden" id="" name="student_id" value="{{$student_id}}">
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text"  name="course_gp" placeholder="گروه درس" class="form-control" id="inputWarning" required  {{old('phone')}}>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text"  name="course_id" placeholder="کد درس" class="form-control" id="inputError" required  {{old('edu')}}>
            </div>
        </div>
        <div class="form-group ">
            <button type="submit" class="btn btn-outline btn-primary btn-block " value="">ثبت</button>
        </div>
    </form>
    <hr>
@stop