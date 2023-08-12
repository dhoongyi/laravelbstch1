<!DOCTYPE html>
<html>
<head>
    <title>Employee Page</title>
    <style type="text/css">
        body{
            background-color: #333;
            color:#fff;
        }
    </style>
</head>
<body>
    <h1>Welcome to our website.</h1>
    <p>This is employees Data Four page</p>

    {{$greeting}}


    <ul>
        @foreach($students as $value)
        <li>{{$value}}</li>
        @endforeach
    </ul>
</body>
</html>