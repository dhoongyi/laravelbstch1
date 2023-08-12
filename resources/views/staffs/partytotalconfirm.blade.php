<!DOCTYPE html>
<html>
<head>
    <title>Party Total Confirm</title>
    <style type="text/css">
        body{
            background-color: steelblue;
        }
    </style>
</head>
<body>
    <h1>Welcome to our website.</h1>
    <p>This is staffs partytotal page</p>
    <p>staffs party total is = {{$total}} and status is {{$status}}</p>

    <ul>
        <li><a href="{{URL::to('staffs')}}">Home</a></li>
        <li><a href="{{route('staffs.party')}}">Party</a></li>
        <li><a href="">Edit</a></li>
    </ul>
</body>
</html>