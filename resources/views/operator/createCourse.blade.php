@extends('operator.base')
@section('page-wrapper')
    <div class="row">
        <div class="col-lg-12">
            <h1 style="float: right">فرم ثبت نام</h1>
        </div>
    </div>
    <hr size="30">

<div class="col-lg-12">
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form method="post"  action="{{route('assignedCourses.store')}}" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="col-lg-6">
    <div class="form-group   ">
        <input name="name" placeholder="نام درس" class="form-control" id="inputError" type="text" {{old(' first_name')}}>
    </div>
    <div class="form-group   ">
        <input name="course_id" placeholder=" کد درس" class="form-control" id="inputSuccess" type="text" {{old(' first_name')}}>
    </div>
    <div class="form-group   ">
        <input name="course_gp" placeholder="گروه" class="form-control" id="inputWarning" type="text" {{old(' first_name')}}>
    </div>
    <div class="form-group   ">
        <input name="unit" placeholder="واحد" class="form-control" id="inputSuccess" type="text" {{old(' first_name')}}>
    </div>
        <div class="form-group   ">
            <input name="post_id" placeholder="ادی استاد" class="form-control" id="inputSuccess" type="text" {{old(' first_name')}}>
        </div>

    </div>
    <div class="col-lg-6">
     <div class="form-group ">
            <select class="form-control" name="type">
                <option value="action"> عملی</option>
                <option value="theory"> تئوری</option>
            </select>
        </div>
    <div class="form-group   ">
        <input name="prof" placeholder="نام استاد" class="form-control" id="inputError" type="text" {{old(' first_name')}}>
    </div>
    <div class="form-group   ">
        <input name="capacity" placeholder=" ظرفیت " class="form-control" id="inputError" type="text" {{old(' first_name')}}>
    </div>
    <div class="form-group   ">
        <input name="term" placeholder="ترم" class="form-control" id="inputWarning" type="text" {{old(' first_name')}}>
    </div>
    <div class="form-group   ">
        <input name="date" placeholder="تاریخ امتحان" class="form-control" id="inputWarning" type="text" {{old(' first_name')}}>
    </div>
     <div class="form-group   ">
            <input name="location" placeholder=" مکان برگزاری کلاس " class="form-control" id="inputError" type="text" {{old(' first_name')}}>
        </div>
     <div class="form-group   ">
            <input name="time" placeholder=" زمان برگزاری کلاس" class="form-control" id="inputError" type="text" {{old(' first_name')}}>
        </div>
        <div class="form-group   ">
            <input name="day" placeholder=" روز برگزاری کلاس" class="form-control" id="inputError" type="text" {{old(' first_name')}}>
        </div>
        <div class="form-group   ">
            <input name="need" placeholder=" همنیاز ها" class="form-control" id="inputError" type="text" {{old(' first_name')}}>
        </div>
        <div class="form-group   ">
            <input name="prerequisite" placeholder="پیشنیاز ها" class="form-control" id="inputError" type="text" {{old(' first_name')}}>
        </div>
    <div class="form-group  ">
        <input name="pdf_path" class="form-control" type="file">
    </div>
    </div>
    <div class="form-group col-md-">
        <button class="btn btn-outline btn-primary btn-block " style="background-color:#2ab27b " value="">ثبت</button>
    </div>
</form>
</div>
@stop

