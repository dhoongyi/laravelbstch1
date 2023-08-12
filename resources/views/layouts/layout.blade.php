<!DOCTYPE html>
<html>
    <head>
        <title>@yield("title","Layout") page</title>
    </head>
    <body>
        <h1>Welcome to Our Page.</h1>
        <p>This is @yield("heading","layout index").</p>

        @yield("content")

        <div>
            <h4>This is Our Company info from layout.</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora velit assumenda natus error molestiae nesciunt ea molestias quae numquam accusamus. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit veritatis esse cum temporibus praesentium veniam. Minima beatae earum, labore quo laboriosam dolor et laudantium suscipit sint sunt ratione, quae dicta?</p>
        </div>

        @yield("footer")
    
        
    </body>
</html>