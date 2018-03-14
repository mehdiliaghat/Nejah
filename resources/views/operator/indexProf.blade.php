@extends('operator.base')
@section('page-wrapper')
    <br>
    <div class="page-wraper">
        <div class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown open">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">سایر<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                            </ul>
                        </li>

                    </ul>

                    <div class="navbar-right col-sm-10">
                        <form action="" class="navbar-form row" method="post" role="form">
                            <div class="col-sm-3">
                                <div class="form-group">

                                    <input class="form-control" name="andrew_id" placeholder="نام خانوادگی" type="text">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">

                                    <input class="form-control" name="andrew_id" placeholder="نام" type="text">
                                </div>
                            </div>
                            <div class="col-sm-3 ">
                                <div class="form-group">

                                    <input class="form-control" name="secret" placeholder="شماره دانشجویی" type="password">
                                </div>

                            </div>
                            <div class="col-sm-1 col-sm-offset-1">
                                <button class="btn btn-success  btn-group-lg" type="submit">جستوجو</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="">
                <table class="table-hover" style="text-align: left">
                    <thead >
                    <tr >
                        <th></th>

                        <th> ایمیل</th>
                        <th> تلفن</th>
                        <th> آدرس</th>
                        <th> جنسیت</th>
                        <th> تحصیلات</th>
                        <th>رمز عبور</th>
                        <th>کد ملی</th>
                        <th> تاریخ تولد</th>
                        <th>نام خانوادگی</th>
                        <th>نام</th>
                        <th>کد</th>
                        <th> تصویر</th>
                        <th>ردیف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $key=>$user)
                        <tr>
                            <td>
                                <form method="post" id="delete-form-{{$user->id}}" action="{{route('users.deleteProf',$user->id)}}" style="display: none ;">
                                    {{csrf_field()}}
                                    {{method_field('delete')}}
                                </form>
                                <button onclick="if(confirm(' آیا می خواهید کاربر مورد نظر را حذف کنید؟')){
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{$user->id}}').submit();
                                        }else{
                                        event.preventDefault();
                                        }" class="btn btn-raised btn-primary btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                <a class="btn btn-raised btn-danger btn-sm" href="{{route('userEdit', $user->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->sex}}</td>
                            <td>{{$user->edu}}</td>
                            <td>{{$user->password}}</td>
                            <td>{{$user->national_id}}</td>
                            <td>{{$user->date_birth}}</td>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->first_name}}</td>
                            <td>{{$user->post_id}}</td>
                            <td>@if ( $user->photo)
                                    <img src="{{ url('upload_files/users/' . $user->photo) }}" style="width:50px">
                                @else
                                    <p>No image found</p>
                                @endif</td>
                            <td>{{ ($key+1) }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop