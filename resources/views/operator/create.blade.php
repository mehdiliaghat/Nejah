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
                <form method="post" action="{{route('users.store')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text"  name="phone" placeholder="تلفن" class="form-control" id="inputWarning" required  {{old('phone')}}>
                        </div>
                        <div class="form-group">
                            <input type="text"  name="edu" placeholder="تحصیلات" class="form-control" id="inputError" required  {{old('edu')}}>
                        </div>
                        <div class="form-group">
                            <input type="text"  name="national_id" placeholder="کدملی" class="form-control" id="inputError" required  {{old('national_id')}}>
                        </div>
                        <div class="form-group">
                            <input type="text"  name="date_birth" placeholder="تاریخ تولد" class="form-control" id="inputWarning"   {{old('date_birth')}}>
                        </div>
                        <div class="form-group ">
                            <select class="form-control"  name="sex">
                                <option value="male">مرد</option>
                                <option value="female"> زن</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <input type="text"  name="address" placeholder=" آدرس" class="form-control" id="inputWarning" required {{old('address')}} >
                        </div>
                    </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text"  name="first_name" placeholder="نام" class="form-control" id="inputSuccess" required  {{old(' first_name')}}>
                            </div>
                        <div class="form-group">
                            <input type="text"  name="last_name" placeholder="نام خانوادگی" class="form-control" id="inputError" required  {{old(' last_name')}}>
                        </div>
                            <div class="form-group ">
                                <select class="form-control" name="type" >
                                    <option value="Student">دانشجو</option>
                                    <option value="Prof">استاد</option>
                                    <option value="Manager"> مدیرگروه</option>
                                    <option value="Operator">مسول سیستم</option>
                                    <option value="Employee">مسول آموزش</option>
                                </select>
                            </div>

                        <div class="form-group">
                            <input type="text"  name="post_id" placeholder="کلمه عبور" class="form-control" id="inputWarning" required  {{old('post_id')}}>
                        </div>
                        <div class="form-group">
                            <input type="text"  name="password" placeholder="رمز عبور" class="form-control" id="inputSuccess" required  {{old('password')}}>
                        </div>
                        <div class="form-group">
                            <input type="text"  name="email" placeholder="ایمیل" class="form-control" id="inputError" required  {{old('email')}}>
                        </div>

                            <div class="form-group  ">
                                <input class="form-control"  name="photo" type="file">
                            </div>
                    </div>
                    <div class="form-group ">
                        <button type="submit" class="btn btn-outline btn-primary btn-block " value="">ثبت</button>
                    </div>
                </form>
            </div>
        <hr size="30">

    @stop