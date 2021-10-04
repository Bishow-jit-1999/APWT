@extends('template.app')
@section('dynamicInfo')

<h2 style="text-align:center">Our Services </h2>
<table>
    @foreach($service as $s)
    <tr><td><h3>{{$s}}</h3></td></tr> 
    @endforeach
    
</table>

@endsection