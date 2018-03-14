@extends('operator.base')
@section('page-wrapper')
    <div class="row">
        <div class="col-lg-12">
            <h1 style="float: right">فرم ویرایش </h1>
        </div>
    </div>
    <hr size="30">
    <div class="row">
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
            <form method="post" action="{{route('userUpdate',$user->id)}}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="form-group col-lg-6 ">
                    <select class="form-control"  name="sex"  >
                        <option value="male"  @if($user->sex=='male') selected @endif>مرد</option>
                        <option value="female"  @if($user->sex=='female') selected @endif> زن</option>
                    </select>

                </div>
                <div class="form-group col-lg-6 ">
                    <select class="form-control" name="type" >
                        <option value="Student" @if($user->type=='Student') selected @endif>دانشجو</option>
                        <option value="Prof" @if($user->type=='Prof') selected @endif>استاد</option>
                        <option value="Manager" @if($user->type=='Manager') selected @endif> مدیرگروه</option>
                        <option value="Operator" @if($user->type=='Operator') selected @endif>مسول سیستم</option>
                        <option value="Employee" @if($user->type=='Employee') selected @endif>مسول آموزش</option>
                    </select>
                </div>
                <div class="form-group col-lg-6 ">
                    <input type="text" value="{{$user->last_name}}" name="last_name" placeholder="نام خانوادگی" class="form-control" id="inputError" required  {{old(' last_name')}}>
                </div>
                <div class="form-group col-lg-6 ">
                    <input type="text" value="{{$user->first_name}}" name="first_name" placeholder="نام" class="form-control" id="inputSuccess" required  {{old(' first_name')}}>
                </div>
                <div class="form-group col-lg-6 ">
                    <input type="text" value="{{$user->post_id}}" name="post_id" placeholder="کلمه عبور" class="form-control" id="inputWarning" required  {{old('post_id')}}>
                </div>
                <div class="form-group col-lg-6 ">
                    <input type="text" value="{{$user->password}}" name="password" placeholder="رمز عبور" class="form-control" id="inputSuccess" required  {{old('password')}}>
                </div>
                <div class="form-group col-lg-6 ">
                    <input type="text" value="{{$user->email}}" name="email" placeholder="ایمیل" class="form-control" id="inputError" required  {{old('email')}}>
                </div>
                <div class="form-group col-lg-6 ">
                    <input type="text" value="{{$user->phone}}" name="phone" placeholder="تلفن" class="form-control" id="inputWarning" required  {{old('phone')}}>
                </div>
                <div class="form-group col-lg-6 ">
                    <input type="text" value="{{$user->edu}}" name="edu" placeholder="تحصیلات" class="form-control" id="inputError" required  {{old('edu')}}>
                </div>
                <div class="form-group col-lg-6 ">
                    <input type="text" value="{{$user->national_id}}" name="national_id" placeholder="کدملی" class="form-control" id="inputError" required  {{old('national_id')}}>
                </div>
                <div class="form-group col-lg-6 ">
                    <input type="text" value="{{$user->date_birth}}" name="date_birth" placeholder="تاریخ تولد" class="form-control" id="inputWarning"   {{old('date_birth')}}>
                </div>
                <div class="form-group col-lg-6 ">
                    <input type="text" value="{{$user->address}}" name="address" placeholder=" آدرس" class="form-control" id="inputWarning" required {{old('address')}} >
                </div>
                <div class="form-group col-lg-9 ">
                    <button type="submit" class="btn btn-outline btn-primary btn-block " value="">ثبت</button>
                </div>
                <div class="form-group col-lg-9 ">
                @if ( $user->photo)
                    <img src="{{ url('upload_files/users/' . $user->photo) }}" style="width:50px">
                @else
                    <p>No image found</p>
                    @endif
                </div>
                <div class="form-group col-lg-3 ">
                    <input class="form-control"  name="photo" type="file">
                </div>
            </form>
        </div>
    </div>
    <hr size="30">

@stop