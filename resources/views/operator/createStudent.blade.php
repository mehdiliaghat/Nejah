@extends('operator.base')
@section('page-wrapper')
    <div class="row">
        <div class="col-lg-12">
            <h1 style="float: right">فرم</h1>
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
        <form method="post" action="{{route('selectCourses.store')}}" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="col-lg-6">
                <div class="form-group">
                <input type="hidden" id="" name="user_id" value="{{$user_id}}">
                </div>
                <div class="form-group">
                    <input type="text"  name="ave" placeholder="معدل کل" class="form-control" id="inputError" required  {{old('edu')}}>
                </div>
                <div class="form-group">
                    <input type="text"  name="ave_term" placeholder="معدل نیم سال" class="form-control" id="inputError" required  {{old('national_id')}}>
                </div>
                <div class="form-group">
                    <input type="text"  name="unit_getting" placeholder=" واحد اخذ شده" class="form-control" id="inputWarning"   {{old('date_birth')}}>
                </div>
                <div class="form-group ">
                    <select class="form-control"  name="state_term">
                        <option value="normal">عادی</option>
                        <option value="Conditional"> مشروط</option>
                    </select>
                </div>
                <div class="form-group ">
                    <select class="form-control"  name="state">
                        <option value="Study">درحال تحصیل</option>
                        <option value="vacation"> مرخصی</option>
                        <option value="expulsion">اخراج</option>
                        <option value="Cancel"> انصراف</option>
                    </select>
                </div>
                <div class="form-group ">
                    <select class="form-control"  name="nighday">
                        <option value="day">روزانه</option>
                        <option value="night"> شبانه</option>
                    </select>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text"  name="unit_spent" placeholder="واحد گذرانده" class="form-control" id="inputSuccess" required  {{old(' first_name')}}>
                </div>
                <div class="form-group">
                    <input type="text"  name="unit_term" placeholder=" واحد نیم سال" class="form-control" id="inputError" required  {{old(' last_name')}}>
                </div>

                <div class="form-group">
                    <input type="text"  name="term" placeholder="نیمسال" class="form-control" id="inputWarning" required  {{old('post_id')}}>
                </div>
                <div class="form-group">
                    <input type="text"  name="arrival" placeholder=" سال ورود" class="form-control" id="inputSuccess" required  {{old('password')}}>
                </div>
                <div class="form-group">
                    <input type="text"  name="num_term" placeholder="ترم" class="form-control" id="inputError" required  {{old('email')}}>
                </div>
            </div>
            <div class="form-group ">
                <button type="submit" class="btn btn-outline btn-primary btn-block " value="">ثبت</button>
            </div>
        </form>
    </div>
    <hr size="30">
@stop