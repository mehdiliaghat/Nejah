@extends('operator.base')
@section('page-wrapper')
    <div class="row">
        <div class="col-lg-12">
            <h1 style="float: right"> فرم ویرایش</h1>
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
        <form method="post" action="{{route('studentInfo.update' ,$student->id)}}" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="hidden" id="" name="user_id" value="{{$student->user_id}}">
                </div>
                <div class="form-group">
                    <input type="text" value="{{$student->ave}}"  name="ave" placeholder="معدل کل" class="form-control" id="inputError" required  {{old('edu')}}>
                </div>
                <div class="form-group">
                    <input type="text" value="{{$student->ave_term}}"  name="ave_term" placeholder="معدل نیم سال" class="form-control" id="inputError" required  {{old('national_id')}}>
                </div>
                <div class="form-group">
                    <input type="text" value="{{$student->unit_getting}}"  name="unit_getting" placeholder=" واحد اخذ شده" class="form-control" id="inputWarning"   {{old('date_birth')}}>
                </div>
                <div class="form-group ">
                    <select class="form-control"  name="state_term">
                        <option value="normal"  @if($student->state_term=='normal') selected @endif>عادی</option>
                        <option value="Conditional"  @if($student->state_term=='Conditional') selected @endif> مشروط</option>
                    </select>
                </div>
                <div class="form-group ">
                    <select class="form-control"  name="state">
                        <option value="Study"  @if($student->state=='Study') selected @endif>درحال تحصیل</option>
                        <option value="vacation"  @if($student->state=='vacation') selected @endif> مرخصی</option>
                        <option value="expulsion"  @if($student->state=='expulsion') selected @endif>اخراج</option>
                        <option value="Cancel"  @if($student->state=='Cancel') selected @endif> انصراف</option>
                    </select>
                </div>
                <div class="form-group ">
                    <select class="form-control"  name="nighday">
                        <option value="day"  @if($student->nighday=='day') selected @endif>روزانه</option>
                        <option value="night"  @if($student->nighday=='night') selected @endif> شبانه</option>
                    </select>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" value="{{$student->unit_spent}}"  name="unit_spent" placeholder="واحد گذرانده" class="form-control" id="inputSuccess" required  {{old(' first_name')}}>
                </div>
                <div class="form-group">
                    <input type="text" value="{{$student->unit_term}}"  name="unit_term" placeholder=" واحد نیم سال" class="form-control" id="inputError" required  {{old(' last_name')}}>
                </div>

                <div class="form-group">
                    <input type="text" value="{{$student->term}}"  name="term" placeholder="نیمسال" class="form-control" id="inputWarning" required  {{old('post_id')}}>
                </div>
                <div class="form-group">
                    <input type="text" value="{{$student->arrival}}"  name="arrival" placeholder=" سال ورود" class="form-control" id="inputSuccess" required  {{old('password')}}>
                </div>
                <div class="form-group">
                    <input type="text" value="{{$student->num_term}}"  name="num_term" placeholder="ترم" class="form-control" id="inputError" required  {{old('email')}}>
                </div>
            </div>
            <div class="form-group ">
                <button type="submit"   class="btn btn-outline btn-primary btn-block " value="">ثبت</button>
            </div>
        </form>
    </div>
    <hr size="30">
@stop