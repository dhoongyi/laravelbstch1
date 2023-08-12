<!DOCTYPE html>
<html>
    <head>
        <title>Employees Update</title>
    </head>
    <body>
        <h1>Welcome to Our Site</h1>
        <p>This is Employee update page.</p>


        @php 
            echo "<pre>".print_r($employee,"true")."</pre>";
        @endphp

        <hr/>

        <ul>
            @foreach($employee as $value)
                <li>{{$value}}</li>
            @endforeach
        </ul>
    </body>
</html>