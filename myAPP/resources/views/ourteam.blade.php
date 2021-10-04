@extends('template.app')
@section('dynamicInfo')

<h3 style="text-align:center">We have a expert team</h3>
<table>
    @foreach($teams as $t)
    <tr><td><h3>{{$t}}</h3></td></tr>
    @endforeach
</table>

@endsection