@extends('layouts.app')
@section('content')

<h1>All Students List</h1>

    <table class="table table-bordered">
        <tr>
            <th>STUDENT ID</th>
            <th>STUDENT NAME</th>
            <th>STUDENT EMAIL</th>
            <th>STudent DEPARTMENT</th>
         
        </tr>
        @foreach($students as $s)
            <tr>
                <td>{{$s->ID}}</td>
                <td>{{$s->NAME}}</td>
                <td>{{$s->EMAIL}}</td>
                <td>{{$s->DEPT}}</td>
            </tr>
        @endforeach
    </table>
@endsection