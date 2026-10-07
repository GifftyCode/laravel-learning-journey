<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Layout</title>
    <link rel="stylesheet" href="style.css">


    @yield('styles')
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">MyWebsite</div>

        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>
    </nav>

    <!-- Page Layout -->
    <div class="page-layout">

        <!-- Sidebar -->
        <aside class="sidebar">
            <h3>Sidebar</h3>

            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Messages</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
           @yield('content')
        </main>

    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2026 MyWebsite. All rights reserved.</p>
    </footer>

</body>

@yield('script')
</html>