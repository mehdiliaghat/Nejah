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
                        <th>مرجع</th>
                        <th> پیش نیاز</th>
                        <th> همنیاز</th>
                        <th> مکان وزمان کلاس</th>
                        <th>  تاریخ امتحان</th>
                        <th>ترم</th>
                        <th> ظرفیت</th>
                        <th>استاد</th>
                        <th>نوع</th>
                        <th> واحد</th>
                        <th>گروه</th>
                        <th>کد</th>
                        <th> نام درس</th>
                        <th>ردیف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($assignedcourses as $key=>$assignedcourse)
                        <tr>
                            <td>
                                <form method="post" id="delete-form-{{$assignedcourse->id}}" action="{{route('assignedcourses.delete',$assignedcourse->id)}}" style="display: none ;">
                                    {{csrf_field()}}
                                    {{method_field('delete')}}
                                </form>
                                <button onclick="if(confirm(' آیا می خواهید کاربر مورد نظر را حذف کنید؟')){
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{$assignedcourse->id}}').submit();
                                        }else{
                                        event.preventDefault();
                                        }" class="btn btn-raised btn-primary btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                <a class="btn btn-raised btn-danger btn-sm" href="{{route('assignedcourses.edit',$assignedcourse->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                            <td>{{$assignedcourse->pdf_path}}</td>
                            <td>{{$assignedcourse->prerequisite}}</td>
                            <td>{{$assignedcourse->need}}</td>
                            <td>
                                   {{$assignedcourse->day}}
                                    {{$assignedcourse->location}}
                                {{$assignedcourse->time}}
                            </td>
                            <td>{{$assignedcourse->date}}</td>
                            <td>{{$assignedcourse->term}}</td>
                            <td>{{$assignedcourse->capacity}}</td>
                            <td>{{$assignedcourse->prof}}</td>
                            <td>{{$assignedcourse->type}}</td>
                            <td>{{$assignedcourse->unit}}</td>
                            <td>{{$assignedcourse->course_gp}}</td>
                            <td>{{$assignedcourse->course_id}}</td>
                            <td>{{$assignedcourse->name}}</td>
                            <td>{{ ($key+1) }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop