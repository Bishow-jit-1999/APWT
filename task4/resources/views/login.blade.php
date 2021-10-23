<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIUB</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<body>

<div>
<h1 class="display-1"> Welcome to Aiub Portal </h1>
</div>



<form action="{{route('loginSub')}}" class="col-md-6" method="post">

{{csrf_field()}}

<div class="col-md-4 form-group" style="text-align:center">
<span>Type</span>
<select name="type">
   <option value=""></option>
   <option value="ADMIN">Admin</option>
  <option value="STUDENT">Student</option>
  <option value="TEACHER">Teacher</option>
</select>
@error('type')
   <span class="text-danger">{{$message}}</span>
@enderror
</div>
<br>
<br>

<div class="col-md-6 form-group">
   <span>UserName</span>
<input type="text" name="username" value="{{old('username')}}" class="form-control"><br>
@error('username')
   <span class="text-danger">{{$message}}</span>
@enderror
</div>

<div class="col-md-6 form-group">
<span>Password </span>
<input type="password" name="password" value="{{old('username')}}"  class="form-control">
@error('password')
  <span class="text-danger">{{$message}}</span>
@enderror
</div>


<br>
<input type="submit" value="login" class="btn btn-success">
    
</form>
</body>


</html>