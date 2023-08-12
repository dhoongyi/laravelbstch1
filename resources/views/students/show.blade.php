<!DOCTYPE html>
<html>
<head>
    <title>About</title>
    <style type="text/css">
        body{
            background-color: #008080;
        }
    </style>
</head>
<body>
    <h1>Welcome to our website.</h1>
    <p>This is student show page</p>

    <ul>
        <li><a href="{{URL::to('students')}}">Home</a></li>
        <li><a href="{{URL::to('students/show')}}">Show</a></li>
        <li><a href="{{URL::to('students/edit')}}">Edit</a></li>
    </ul>

    <p>Lorem Ipsum is simply dummy text of printing and typesetting industry.</p>
</body>
</html>