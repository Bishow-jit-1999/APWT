<h1>Hello everyone this is my first laravel project</h1>

<form action="hello" method="post">

<div>
    <span>Name</span>
    <input type="text" name="name" value="{{old('name')}}" class=form-control>
</div>

<div>
    <span>Id</span>
    <input type="text" name="id" value="{{old('id')}}" class=form-control>
</div>
 
<div>
    <input type="submit" value="submit">
</div>
</form>