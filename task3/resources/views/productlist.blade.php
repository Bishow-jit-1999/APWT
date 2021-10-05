@extends('home')
@section('content')

<table class="table table-borded">
    <tr>
        <td>Product ID</td>
        <td>Product Name</td>
        <td>Product Price</td>
        <td>Quantity</td>
        <td>Product Description</td>
    </tr>
    @foreach($products as $s)
    <tr> 
        <td>{{($s->id)}}</td>
        <td>{{($s->Name)}}</td>
        <td>{{($s->Price)}}{{"tk"}}</td>
        <td>{{($s->Quantity)}}</td>
        <td>{{($s->Description)}}</td>
        <td><a href="/edit/{{$s->id}}/{{$s->Name}}">edit</a></td>
    </tr>
    @endforeach
</table>

@endsection