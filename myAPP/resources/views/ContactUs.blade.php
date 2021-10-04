@extends('template.app')
@section('dynamicInfo')


<h2 style="text-align:center">Here is our contact details</h2>
<h4>Our office address:{{$Office}}</h4>
<h4>Our Phone number:{{$Number}}</h4>
<h4>Our Email:<a href="{{$Email}}">{{$Email}}</a></h4>
<h4>Our facebook: <a href="{{$Fb}}">{{$Fb}}</a></h4>

@endsection