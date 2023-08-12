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
    <p>This is employees index page</p>

    <?php
        // foreach ($employeedata as $value) {
        //     echo "$value <br/>";
        // }
    ?>

    <!-- @php

    foreach($employeedata as $value){
        echo $value."<br/>";
    }

    @endphp; -->

    <!-- <ul>
        @php 
        foreach($employeedata as $value){
            echo "<li>".$value."</li>";
        }
        @endphp
    </ul> -->

    <ul>
        @foreach($employeedata as $value)
        <!-- <li>{{$value}}</li> -->
        <li>{!!$value!!}</li>
        @endforeach
    </ul>

    <hr/>

    <ul>
        @php 
            $city = "Mandalay";
            echo "<li>$city</li>";

        @endphp
    </ul>


    @if($city === "Yangon")
        <h3>You are correct.</h3>
    @else
        <h3>You are wrong.</h3>
    @endif

    @php 
        echo "<h1>$greeting</h1>";
        echo "<p>Copyright $getyear ,. All rights reerved. And today is $gettoday</p>";
        echo $thanks;
    @endphp
</body>
</html>