@extends('layouts.app')
@section('content')


<form action="{{route('admin.addTeacher.save')}}" class="col-md-6" method="post">

{{csrf_field()}}


<div class="col-md-6 form-group">
   <span>Teacher ID</span>
<input type="text" name="teacher_id" value="{{old('teacher_id')}}" class="form-control"><br>
@error('teacher_id')
   <span class="text-danger">{{$message}}</span>
@enderror
</div>


<div class="col-md-6 form-group">
   <span>Teacher Name</span>
<input type="text" name="teacher_name" value="{{old('teacher_name')}}" class="form-control"><br>
@error('teacher_name')
   <span class="text-danger">{{$message}}</span>
@enderror
</div>

<div class="col-md-6 form-group">
   <span>Teacher UserName</span>
<input type="text" name="teacher_username" value="{{old('teacher_username')}}" class="form-control"><br>
@error('teacher_username')
   <span class="text-danger">{{$message}}</span>
@enderror
</div>


<div class="col-md-6 form-group">
    <span>Teacher Password</span>
      <input type="password" name="teacher_password" value="{{old('teacher_username')}}" class="form-control"><br>
      @error('teacher_password')
      <span class="text-danger">{{$message}}</span>
      @enderror

</div>

<div class="col-md-6 form-group">
   <span>Teacher Email</span>
<input type="email" name="teacher_email" value="{{old('teacher_email')}}" class="form-control"><br>
@error('teacher_email')
   <span class="text-danger">{{$message}}</span>
@enderror
</div>

<div class="col-md-6 form-group">
   <span>Teacher Department</span>
<input type="text" name="teacher_dept" value="{{old('teacher_dept')}}" class="form-control"><br>
@error('teacher_dept')
   <span class="text-danger">{{$message}}</span>
@enderror
</div>
<br>
<input type="submit" value="Add" class="btn btn-success">


</form>

@endsection