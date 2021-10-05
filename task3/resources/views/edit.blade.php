@extends('home')
@section('content')

<form action="{{route('editlist')}}" Class="col-md-6" method="post">

{{csrf_field()}}


<div class="col-md-4 form-group">

<input type="hidden" name="id" value="{{$product->id}}">
   <span>Product Name</span>
<input type="text" name="name" value="{{$product->Name}}" class="form-control">
@error('name')
   <span class="text-danger">{{$message}}</span>
@enderror</div>

<div class="col-md-4 form-group">
<span>Product Price </span>
<input type="text" name="price" value="{{$product->Price}}" class="form-control">
@error('price')
  <span class="text-danger">{{$message}}</span>
@enderror
</div>

<div class="col-md-4 form-group">
<span>Quantity</span>
<input type="text" name="quantity" value="{{$product->Quantity}}" class="form-control">
@error('quantity')
<span class="text-danger">{{$message}}</span>
@enderror
</div>

<div class="col-md-4 form-group">
<span>Description</span>
<input type="text" name="des" value="{{$product->Description}}" class="form-control">
@error('des')
<span class="text-danger">{{$message}}</span>
@enderror
</div>


<br>
<input type="submit" value="Update" class="btn btn-success">
</form>

@endsection