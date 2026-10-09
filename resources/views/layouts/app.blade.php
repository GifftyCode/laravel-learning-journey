<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Layout</title>
    <link rel="stylesheet" href="style.css">

<style>
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

    @yield('style')
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