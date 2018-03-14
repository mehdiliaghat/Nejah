@extends('operator.base')
@section('page-wrapper')
    <br>
    <div class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container-fluid">
                <div class="navbar-right col-sm-10">
                    <form method="get" action="{{route('selectCourses.student')}}" class="navbar-form row"  role="form">
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

                                <input class="form-control" value="post_id" name="post_id" placeholder="شماره دانشجویی" type="password">
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
@stop