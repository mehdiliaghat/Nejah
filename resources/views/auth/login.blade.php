

@extends('auth.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
                <img src="img/logoe.png" alt=""/>
            </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">ورود کاربر</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="{{route('login')}}" method="post">
                            {!!csrf_field() !!}
                                <div class="form-group">
                                    <select class="form-control" id="tde" name="type">
                                        <option value="Student">دانشجو</option>
                                        <option value="Prof">استاد</option>
                                        <option value="Manager">مدیرگروه</option>
                                        <option value="Operator">مسول سیستم</option>
                                        <option value="Employee">مسول آموزش</option>
                                    </select>
                                </div>
                                <div class="form-group"{{$errors->has('post_id') ? 'has-error' : ''}}>
                                    <input class="form-control"  placeholder="کد کاربری"
                                           name="post_id" type="text" value="{{ old('post_id') }}" required >
                                    @if($errors->has('post_id'))
                                        <span class="help-block"><strong>{{$errors->first('post_id')}}</strong></span>
                                    @endif

                                </div>
                                <div class="form-group"{{$errors->has('password') ? 'has-error' : ''}}>
                                    <input class="form-control" placeholder="کلمه ورود"
                                           name="password" type="password"  value="" required>
                                    @if($errors->has('post_id'))
                                        <span class="help-block"><strong>{{$errors->first('password')}}</strong></span>
                                    @endif
                                </div>
                                    <!-- Change this to a button or input when using this as a form -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-success btn-block">ورود</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

