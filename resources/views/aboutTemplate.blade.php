@extends('layouts.app')








   
@section('content')
    
        <section class="main-content">
            <h1>Welcome to My Website</h1>

            <p>
                This is the main content area of the website.
                You can put your page content here.
            </p>

            <div class="card">
                <h2>About This Page</h2>
                <p>
                    This simple template contains a navbar, sidebar,
                    main content area and footer.
                </p>
            </div>
        </section>

        @endsection

  

   
@section('script')
<script>
    alert('Hello')
</script>
@endsection
