@extends('home')
@section('content')
<form action="{{route('deleteitem')}}" Class="col-md-6" method="post">

{{csrf_field()}}


<div class="col-md-4 form-group">


   <span>ID</span>
<input type="text" name="id"  class="form-control">
@error('id')
   <span class="text-danger">{{$message}}</span>
@enderror</div>


<br>
<input type="submit" value="Delete" class="btn btn-danger">
</form>

@endsection