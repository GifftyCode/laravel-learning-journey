<div>
    {{-- Because we are nott using the call back function on the contact us route, we can't detach the route parameters directly without using the Request method as seen: --}}
    <h2>Contact Us!</h2>
    <div>
    <h2>Name: {{request() -> name}}</h2>
    <h2>ID: {{request() -> id}}</h2>

    @include('SubViews.Input', [
        'myName' => request() -> name
    ])
    </div>


    <!-- To write a php/laravl code inside a blade file, we start with the '@' symbol -->
    @for ($i = 0; $i < 10; $i++)
        <p>{{$i}}</p>

        @if($i == 5)
        <h1>This is {{$i}}</h1>
        @endif
    @endfor
</div>
