<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Tech</title>
</head>
  <h1 style="text-align:center">Welcome to smart tech</h1>
<body>
    <h2 style="text-align:center">Here you can get Advance IT solution </h2>

     <a class="btn btn-primary" href="{{route('Service')}}">Our Services</a>
     <a class="btn btn-success" href="{{route('Teams')}}">Our Team</a>
     <a class="btn btn-primary" href="{{route('About_US')}}">About us</a>
     <a class="btn btn-success" href="{{route('Contact_US')}}">Our Contact</a>

     <div>
         @yield('dynamicInfo');
     </div>
</body>
</html>