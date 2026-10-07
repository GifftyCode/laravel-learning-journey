@extends('layouts.app')

@section('styles')

    <style>
        /* Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    min-height: 100vh;
}

/* Navbar */
.navbar {
    height: 60px;
    background-color: #222;
    color: white;

    display: flex;
    align-items: center;
    justify-content: space-between;

    padding: 0 30px;
}

.logo {
    font-size: 22px;
    font-weight: bold;
}

.nav-links {
    display: flex;
    gap: 25px;
}

.nav-links a {
    color: white;
    text-decoration: none;
}

.nav-links a:hover {
    color: #ccc;
}

/* Page Layout */
.page-layout {
    display: flex;
    min-height: calc(100vh - 120px);
}

/* Sidebar */
.sidebar {
    width: 220px;
    background-color: #f4f4f4;
    padding: 25px 20px;
}

.sidebar h3 {
    margin-bottom: 20px;
}

.sidebar ul {
    list-style: none;
}

.sidebar li {
    margin-bottom: 15px;
}

.sidebar a {
    color: #333;
    text-decoration: none;
}

.sidebar a:hover {
    color: #007bff;
}

/* Main Content */
.main-content {
    flex: 1;
    padding: 40px;
}

.main-content h1 {
    margin-bottom: 15px;
}

.main-content p {
    line-height: 1.6;
}

/* Card */
.card {
    margin-top: 30px;
    padding: 25px;
    border: 1px solid #ddd;
    border-radius: 8px;
    max-width: 600px;
}

.card h2 {
    margin-bottom: 10px;
}

/* Footer */
.footer {
    height: 60px;
    background-color: #222;
    color: white;

    display: flex;
    align-items: center;
    justify-content: center;
}
    </style>

    @endsection






   
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

  

   
