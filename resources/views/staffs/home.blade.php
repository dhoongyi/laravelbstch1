<!DOCTYPE html>
<html>
<head>
    <title>Staffs</title>
    <style type="text/css">
        body{
            background-color: orange;
        }
    </style>
</head>
<body>
    <h1>Welcome to our website.</h1>
    <p>This is staffs home page</p>

    <ul>
        <li><a href="{{URL::to('staffs')}}">Home</a></li>
        <li><a href="{{route('staffs.party')}}">Party</a></li>
        <li><a href="">Edit</a></li>
    </ul>

    @php 
    echo "Hello,".$thanks;
    @endphp
</body>
</html>