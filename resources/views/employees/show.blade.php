<!DOCTYPE html>
<html>
<head>
    <title>Employee Page</title>
    <style type="text/css">
        body{
            background-color: gray;
        }
    </style>
</head>
<body>
    <h1>Welcome to our website.</h1>
    <p>This is employees show page.</p>

    <ul>

        @php
            // echo "<pre>".print_r($employeedata,"true")."</pre>";
            // echo $employeedata["name"];
            // echo $employeedata["email"];
            // echo $employeedata["phone"];
        @endphp

        @foreach($employeedata as $value)
            <li>{{$value}}</li>
        @endforeach
    </ul>

</body>
</html>