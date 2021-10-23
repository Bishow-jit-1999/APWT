@extends('layouts.app')
@section('content')

<h1>All Students List</h1>

    <table class="table table-bordered">
        <tr>
            <th>TEACHER ID</th>
            <th>TEACHER NAME</th>
            <th>TEACHER EMAIL</th>
            <th>TEACHER DEPARTMENT</th>
         
        </tr>
        @foreach($teachers as $t)
            <tr>
                <td>{{$t->ID}}</td>
                <td>{{$t->NAME}}</td>
                <td>{{$t->EMAIL}}</td>
                <td>{{$t->DEPT}}</td>
            </tr>
        @endforeach
    </table>
@endsection