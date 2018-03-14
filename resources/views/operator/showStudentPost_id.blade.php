@extends('operator.base')
@section('page-wrapper')

    <br>
    <div class="page-wraper">
        <div class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <div class="navbar-right col-sm-10">
                        <form action="{{route('selectCourses.show')}}" class="navbar-form row" method="post" role="form">
                            {!! csrf_field() !!}
                            <div class="col-sm-3">
                                <div class="form-group">

                                    <input class="form-control" name="" placeholder="نام خانوادگی" type="text">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">

                                    <input class="form-control" name="" placeholder="نام" type="text">
                                </div>
                            </div>
                            <div class="col-sm-3 ">
                                <div class="form-group">

                                    <input class="form-control" name="post_id" placeholder="شماره دانشجویی">
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
        <div class="col-lg-12">
            <h1 style="float: right"> وضعیت تحصیلی</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="">
                <table class="table-hover" style="text-align: left">
                    <thead >
                    <tr >
                        <th></th>
                        <th> معدل کل</th>
                        <th> معدل ترم</th>
                        <th> واحد اخذ شده</th>
                        <th> واحدگذرانده</th>
                        <th> واحد اخذ شده ترم</th>
                        <th> وضعیت ترم</th>
                        <th> وضعیت تحصیلی </th>
                        <th> نیم سال</th>
                        <th>سال ورود</th>
                        <th>نوع پذیرش</th>
                        <th> ترم</th>
                        <th>ردیف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $key=>$student)
                        <tr>
                            <td>
                                <form method="post" id="delete-form-{{$student->id}}" action="{{route('studentInfo.delete' ,$student->id)}}" style="display: none ;">
                                    {{csrf_field()}}
                                    {{method_field('delete')}}
                                </form>
                                <button onclick="if(confirm(' آیا می خواهید کاربر مورد نظر را حذف کنید؟')){
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{$student->id}}').submit();
                                        }else{
                                        event.preventDefault();
                                        }" class="btn btn-raised btn-primary btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                <a class="btn btn-raised btn-danger btn-sm" href="{{route('studentInfo.edit' ,$student->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                            <td>{{$student->ave}}</td>
                            <td>{{$student->ave_term}}</td>
                            <td>{{$student->unit_getting}}</td>
                            <td>{{$student->unit_spent}}</td>
                            <td>{{$student->unit_term}}</td>
                            <td>{{$student->state_term}}</td>
                            <td>{{$student->state}}</td>
                            <td>{{$student->term}}</td>
                            <td>{{$student->arrival}}</td>
                            <td>{{$student->nighday}}</td>
                            <td>{{$student->num_term }}</td>
                            <td>{{ ($key+1) }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop