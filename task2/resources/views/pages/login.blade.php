@extends('pages.home')

@section('content')

<form action="{{route('login')}}" method="post">

{{csrf_field()}}

<div class=col-md-4 form group>

<span>Student Id</span>
<input type="text" name="id" value="{{old('id')}}" class="form-control">
@error('id')
  <span class="text-danger">{{$message}}</span>
@enderror

</div>

<div class=col-md-4 form group>

<span>Password</span>
<input type="password" name="pass" value="{{old('pass')}}" class="form-control">

@error('pass')
   <span class="text-danger">{{$message}}</span>
@enderror
<br>
</div>
<input type="submit" class="btn btn-success" value="Login">
</form>

@endsection