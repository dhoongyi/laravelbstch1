<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>
    <h1>Welcome to Our Website </h1>
    <p>This is student index</p>

    <ul>
        <li><a href="{{URL::to('students')}}">Index</a></li>
        <li><a href="{{URL::to('students/show')}}">Show</a></li>
        <li><a href="{{URL::to('students/edit')}}">Edit</a></li>
    </ul>

    <hr/>
</body>
</html>