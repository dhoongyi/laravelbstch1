@extends("layouts.layout")

@section ("title","Member")

{{-- @section("heading","my first template") --}}
@section("heading")
    {{$header}}
@endsection

{{-- @section("content")

    <p>This is Our Company Info From members</p>

    <div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum aperiam quis tenetur, quibusdam velit libero laudantium iure! Sed cum ipsa quod dicta. Modi nihil est voluptatem praesentium enim id iusto.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi molestias officia libero fugiat minima harum voluptatibus, nesciunt ullam obcaecati impedit! Dolorum, veniam iste natus mollitia corporis aut ut laudantium consequatur!</p>
    </div>
@endsection  --}}

@section("content")

<p>This is Our Company Info From members</p>

<div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum aperiam quis tenetur, quibusdam velit libero laudantium iure! Sed cum ipsa quod dicta. Modi nihil est voluptatem praesentium enim id iusto.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi molestias officia libero fugiat minima harum voluptatibus, nesciunt ullam obcaecati impedit! Dolorum, veniam iste natus mollitia corporis aut ut laudantium consequatur!</p>
</div>

<hr/>

    @php 
        echo count($students);
        echo "<pre>".print_r($students,"true")."</pre>";
    @endphp

    @if(count($students))
    <ul>
        @foreach($students as $student)
            <li>{{$student}}</li>
        @endforeach
    </ul>
    @endif

<hr/>


@stop




@section("footer")
    <p>Copyright {{$year}} &copy; . All right reserved . Designed by OneDay Co.,Ltd</p>
@stop