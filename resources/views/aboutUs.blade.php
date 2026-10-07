<html>
    <body>
        <h1>About Us</h1>
        <h2>Username: {{$name}}</h2>
        <h2>User Id: {{$id}}</h2>

        <!-- To call a sub view-->
        {{-- @include('SubViews.Input') --}}

        <!-- Passing a value to a sub view -->
        @include('SubViews.Input', [
            'myName' => $name
        ])
    </body>
</html>