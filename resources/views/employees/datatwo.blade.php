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
    <p>This is employees Data Two page</p>

    <ul>
        @php 
            echo "<pre>".print_r($students,true)."</pre>";
            echo "<li>$students[0]</li>";
            echo "<li>$students[1]</li>";
            echo "<li>$students[2]</li>";
        @endphp
    </ul>

    <p>Hi there , {{$greeting}}</p>


    <ul>
        @foreach($students as $value)
        <li>{{$value}}</li>
        @endforeach
    </ul>
</body>
</html>