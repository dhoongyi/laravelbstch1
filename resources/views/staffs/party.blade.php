<!DOCTYPE html>
<html>
<head>
    <title>Staffs party</title>
    <style type="text/css">
        body{
            background-color: skyblue;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Welcome to our website.</h1>
    <p>This is staffs party page</p>

    <ul>
        <li><a href="{{URL::to('staffs')}}">Home</a></li>
        <li><a href="{{route('staffs.party')}}">Party</a></li>
        <li><a href="">Edit</a></li>
    </ul>
</body>
</html>