<!DOCTYPE html>
<html>
<head>
    <title>Show</title>
    <style type="text/css">
        body{
            background-color: #008080;
        }
    </style>
</head>
<body>
    <h1>Welcome to our website.</h1>
    <p>This is student edit page</p>

    <ul>
        <li><a href="{{route('students.index')}}">Home</a></li>
        <li><a href="{{route('students.show')}}">Show</a></li>
        <li><a href="{{route('students.edit')}}">Edit</a></li>
    </ul>
</body>
</html>