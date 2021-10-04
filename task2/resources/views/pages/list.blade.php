@extends('pages.home')

@section('content')

<table class="table table-borded">
    <tr>
        <td>Name</td>
        <td> Student ID</td>
        <td> Student Phone</td>
    </tr>
    @foreach($students as $s)
    <tr>
        <td>{{($s->NAME)}}</td>
        <td>{{($s->S_id)}}</td>
        <td>{{($s->Phone)}}</td>
    </tr>
    @endforeach
</table>

@endsection