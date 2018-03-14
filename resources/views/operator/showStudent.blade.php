@extends('operator.base')
@section('page-wrapper')
    <br>
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