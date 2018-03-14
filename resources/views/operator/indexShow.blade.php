@extends('operator.base')
@section('page-wrapper')
    <br>
    <div class="page-wraper">
        <div class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <div class="navbar-right col-sm-10">
                        <form action="{{route('selectCourses.show')}}" class="" method="post" role="form">
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
                                    <input class="form-control" name="post_id" placeholder="شماره دانشجویی" >
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

@stop