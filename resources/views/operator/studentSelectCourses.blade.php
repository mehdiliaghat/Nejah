@extends('operator.base')
@section('page-wrapper')
    <br>
    <div class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-right col-sm-10">
                <form method="post" action="{{route('selectCourse.post_id')}}" class="navbar-form row"  role="form">
                    {!! csrf_field() !!}
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input class="form-control" name="" placeholder="گروه" type="text">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input class="form-control" name="term" placeholder="ترم" type="text">
                        </div>
                    </div>
                    <div class="col-sm-3 ">
                        <div class="form-group">

                            <input class="form-control" name="post_id" placeholder=" شماره دانشجویی" >
                        </div>

                    </div>
                    <div class="col-sm-1 col-sm-offset-1">
                        <button class="btn btn-success  btn-group-lg" type="submit">جستوجو</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop