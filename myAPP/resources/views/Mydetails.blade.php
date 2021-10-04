<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Details</title>
</head>
<style>
body {background-color: powderblue;}
h1   {color: blue;}
p    {color: red;}
 
    

</style>
<body>
<div>
<h1>MY PAGE</h1>
<h3>MY NAME:{{$name}}</h3>
<h3>MY ID:{{$id}}</h3>
<h3>MY Courses:</h3>
<table>
    @foreach($Course as $C)
    <tr><td>{{$C}}</td></tr> 
    @endforeach

</table>
</div>
</body>
</html>