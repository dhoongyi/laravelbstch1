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

    @php
        echo "<pre>".print_r($data["employeedata"],"true")."</pre>";
        echo $data["employeedata"]["name"];
        // echo $employeedata["email"];
        // echo $employeedata["phone"];
    @endphp
    <ul>

        
        @foreach($data as $employeedata)
            @foreach($employeedata as $value)
                <li>{{$value}}</li>
            @endforeach
        @endforeach
    </ul>

</body>
</html>