@extends('home')
@section('content')

<form action="{{route('add')}}" class="col-md-6" method="post">

{{csrf_field()}}

<div class="col-md-4 form-group">
   <span>Product Name</span>
<input type="text" name="name" value="{{old('name')}}" class="form-control">
@error('name')
   <span class="text-danger">{{$message}}</span>
@enderror</div>

<div class="col-md-4 form-group">
<span>Product Price </span>
<input type="text" name="price" value="{{old('price')}}" class="form-control">
@error('price')
  <span class="text-danger">{{$message}}</span>
@enderror
</div>

<div class="col-md-4 form-group">
<span>Quantity</span>
<input type="text" name="quantity" value="{{old('quantity')}}" class="form-control">
@error('quantity')
<span class="text-danger">{{$message}}</span>
@enderror
</div>

<div class="col-md-4 form-group">
<span>Description</span>
<input type="text" name="des" value="{{old('des')}}" class="form-control">
@error('des')
<span class="text-danger">{{$message}}</span>
@enderror
</div>


<br>
<input type="submit" value="ADD" class="btn btn-success">
</form>

@endsection