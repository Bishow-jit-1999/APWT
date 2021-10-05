<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<body>
    
<h1 class="display-1"> Welcome to our E-shop </h1>


<a class="btn btn-primary" href="{{route('add')}}">Add Product </a> 


<a class="btn btn-primary" href="{{route('view_product')}}">View Products </a> 


<a class="btn btn-primary" href="{{route('deletepage')}}">Delete Product</a> 
<div>
 @yield('content');
</div>
</body>
</html>