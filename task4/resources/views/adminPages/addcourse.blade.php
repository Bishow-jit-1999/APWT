@extends('layouts.app')
@section('content')


<form action="{{route('addcourse.add')}}" class="col-md-6" method="post">

{{csrf_field()}}


<div class="col-md-6 form-group">
   <span>Couse ID</span>
<input type="text" name="c_id" value="{{old('c_id')}}" class="form-control"><br>
@error('c_id')
   <span class="text-danger">{{$message}}</span>
@enderror
</div>


<div class="col-md-6 form-group">
   <span>Couse Name</span>
<input type="text" name="c_name" value="{{old('c_name')}}" class="form-control"><br>
@error('c_name')
   <span class="text-danger">{{$message}}</span>
@enderror
</div>

<div class="col-md-6 form-group">
   <span>Couse Credit</span>
<input type="number" name="c_credit" value="{{old('c_credit')}}" class="form-control"><br>
@error('c_credit')
   <span class="text-danger">{{$message}}</span>
@enderror
</div>

<br>
<input type="submit" value="Add" class="btn btn-success">


</form>

@endsection