@extends('pages.home')
@section('content')

<form action="{{route('create')}}" method="post">

{{csrf_field()}}

<div class="col-md-4 form-group">
   <span>Name</span>
<input type="text" name="name" value="{{old('name')}}" class="form-control">
@error('name')
   <span class="text-danger">{{$message}}</span>
@enderror</div>

<div class="col-md-4 form-group">
<span>Student Id</span>
<input type="text" name="id" value="{{old('id')}}" class="form-control">
@error('id')
  <span class="text-danger">{{$message}}</span>
@enderror
</div>

<div class="col-md-4 form-group">
<span>Email</span>
<input type="text" name="email" value="{{old('email')}}" class="form-control">
@error('email')
<span class="text-danger">{{$message}}</span>
@enderror
</div>

<div class="col-md-4 form-group">
<span>Date of birth</span>
<input type="date" name="dob" value="{{old('dob')}}" class="form-control">
@error('dob')
<span class="text-danger">{{$message}}</span>
@enderror
</div>

<div  class="col-md-4 form-group">
<span>Phone</span>
<input type="text" name="phone" value="{{old('phone')}}"class="form-control">
@error('phone')
<span class="text-danger">{{$message}}</span>
@enderror
</div>

<div  class="col-md-4 form-group">
<span>Password</span>
<input type="password" name="pass" value="{{old('pass')}}"class="form-control">
@error('pass')
   <span class="text-danger">{{$message}}</span>
@enderror

</div>
<br>
<input type="submit" value="ADD" class="btn btn-success">
</form>

@endsection