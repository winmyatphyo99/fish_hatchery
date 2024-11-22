<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hatchery Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        /* Top bar styles */
        .navbar {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }

        .sidebar {
            width: 200px;
            background-color: #40e0d0;
            color: #fff;
            height: calc(100vh - 56px); /* Subtract the height of the top bar */
            position: fixed;
            top: 56px; /* Align below the top bar */
            left: 0;
            padding: 10px;
            overflow-y: auto;
        }

        .logo {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .logo h2 {
            font-size: 14px;
            font-weight: bold;
            color: #000;
            text-align: center;
            margin-top:20px;
        }

        .menu-item {
            margin-bottom: 20px;
        }

        .menu-item a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #000;
            font-size: 16px;
        }

        .menu-item a:hover {
            color: #fff;
        }

        .menu-icon {
            font-size: 20px;
            margin-right: 10px;
        }

        .menu-text {
            font-size: 16px;
        }

        .topbar-divider {
            width: 1px;
            background-color: #ddd;
            height: 40px;
            margin: auto 10px;
        }

        .img-profile {
            width: 35px;
            height: 35px;
            border-radius: 50%;
        }

        /* Adjust the main content to avoid overlapping */
        .content {
            margin-left: 200px;
            margin-top: 56px;
            padding: 20px;
        }
        .flex{
            display:flex;
        }
    </style>
</head>
<body>
    <div class="flex">
        <div>
        <!-- Top Navigation Bar -->
    <nav class="navbar navbar-expand navbar-light bg-white">
        <ul class="navbar-nav ms-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- User Profile -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" role="button">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                    <img class="img-profile" src="../../img/user-avatar.png" alt="Profile">
                </a>
            </li>
        </ul>
    </nav>
    </div>

    <div>
        <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">
            <img src="image/geaai.png" alt="Logo">
            <h2>HATCHERY MANAGEMENT</h2>
        </div>
        <div class="menu-item">
            <a href="#"><span class="menu-icon">🏠</span><span class="menu-text">Dashboard</span></a>
        </div>
        <div class="menu-item">
            <a href="#"><span class="menu-icon">🐟</span><span class="menu-text">Fish Tanks</span></a>
        </div>
        <div class="menu-item">
            <a href="#"><span class="menu-icon">📋</span><span class="menu-text">Collecting Fish Species</span></a>
        </div>
        <div class="menu-item">
            <a href="#"><span class="menu-icon">🔄</span><span class="menu-text">Breeder Management</span></a>
        </div>
        <div class="menu-item">
            <a href="#"><span class="menu-icon">🥚</span><span class="menu-text">Incubation</span></a>
        </div>
        <div class="menu-item">
            <a href="#"><span class="menu-icon">🚚</span><span class="menu-text">Transferring</span></a>
        </div>
        <div class="menu-item">
            <a href="#"><span class="menu-icon">🦈</span><span class="menu-text">Feeding</span></a>
        </div>
        <div class="menu-item">
            <a href="#"><span class="menu-icon">👨‍💼</span><span class="menu-text">Employees</span></a>
        </div>
    </div>
    </div>
    </div>
        

    <!-- Main Content -->
    <div class="content">
        <h1>Welcome to Hatchery Management</h1>
        <p>Manage your hatchery operations with ease!</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
