@extends('layouts.app')
@section('content')

<h1>All Courses</h1>

    <table class="table table-bordered">
        <tr>
            <th>COURSE CODE</th>
            <th>COURSE NAME</th>
            <th>COURSE CREDIT</th>
         
        </tr>
        @foreach($courses as $c)
            <tr>
                <td>{{$c->ID}}</td>
                <td>{{$c->COURSE_NAME}}</td>
                <td>{{$c->CREDIT}}</td>
                <td><a class="btn btn-info" href="">ADD COURSE</a></td>
            </tr>
        @endforeach
    </table>
@endsection