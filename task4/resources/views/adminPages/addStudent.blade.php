@extends('layouts.app')
@section('content')


<form action="{{route('admin.addstudent.save')}}" class="col-md-6" method="post">

{{csrf_field()}}


<div class="col-md-6 form-group">
   <span>Student ID</span>
<input type="text" name="student_id" value="{{old('student_id')}}" class="form-control"><br>
@error('student_id')
   <span class="text-danger">{{$message}}</span>
@enderror
</div>


<div class="col-md-6 form-group">
   <span>Student Name</span>
<input type="text" name="student_name" value="{{old('student_name')}}" class="form-control"><br>
@error('student_name')
   <span class="text-danger">{{$message}}</span>
@enderror
</div>

<div class="col-md-6 form-group">
   <span>Student UserName</span>
<input type="text" name="student_username" value="{{old('student_username')}}" class="form-control"><br>
@error('student_username')
   <span class="text-danger">{{$message}}</span>
@enderror
</div>


<div class="col-md-6 form-group">
    <span>Student Password</span>
      <input type="password" name="student_password" value="{{old('student_password')}}" class="form-control"><br>
      @error('student_password')
      <span class="text-danger">{{$message}}</span>
      @enderror

</div>

<div class="col-md-6 form-group">
   <span>Student Email</span>
<input type="email" name="student_email" value="{{old('student_email')}}" class="form-control"><br>
@error('student_email')
   <span class="text-danger">{{$message}}</span>
@enderror
</div>

<div class="col-md-6 form-group">
   <span>Student Department</span>
<input type="text" name="student_dept" value="{{old('student_dept')}}" class="form-control"><br>
@error('student_dept')
   <span class="text-danger">{{$message}}</span>
@enderror
</div>
<br>
<input type="submit" value="Add" class="btn btn-success">


</form>

@endsection