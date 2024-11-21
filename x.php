<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Navbar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        /* Navbar Styling */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #007bff;
            padding: 10px 20px;
            color: white;
        }

        .navbar .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }

        .navbar .menu {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .menu a {
            text-decoration: none;
            color: white;
            font-size: 1rem;
            transition: color 0.3s;
        }

        .menu a:hover {
            color: #ffc107;
        }

        .navbar .profile {
            position: relative;
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .profile span {
            font-size: 1rem;
            font-weight: bold;
        }

        .profile-dropdown {
            display: none;
            position: absolute;
            right: 0;
            top: 60px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            z-index: 100;
        }

        .profile-dropdown a {
            display: block;
            padding: 10px 20px;
            text-decoration: none;
            color: black;
            transition: background-color 0.3s;
        }

        .profile-dropdown a:hover {
            background-color: #f4f4f4;
        }

        /* Toggle Dropdown */
        .profile:hover .profile-dropdown {
            display: block;
        }

        /* Responsive Navbar */
        @media screen and (max-width: 768px) {
            .menu {
                display: none;
            }

            .menu-toggle {
                display: block;
                font-size: 1.5rem;
                cursor: pointer;
            }

            .menu.responsive {
                display: flex;
                flex-direction: column;
                background-color: #0056b3;
                position: absolute;
                top: 60px;
                right: 20px;
                width: 200px;
                border-radius: 5px;
                padding: 10px;
            }

            .menu.responsive a {
                margin: 10px 0;
                color: white;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <!-- Logo -->
        <a href="#" class="logo">Hatchery Management</a>

        <!-- Menu Items -->
        <div class="menu" id="menu">
            <a href="#">Dashboard</a>
            <a href="#">Locations</a>
            <a href="#">Fish Ponds</a>
            <a href="#">Employees</a>
        </div>

        <!-- Menu Toggle for Mobile -->
        <div class="menu-toggle" id="menuToggle">
            <i class="fas fa-bars"></i>
        </div>

        <!-- Profile Section -->
        <div class="profile">
            <img src="https://via.placeholder.com/40" alt="Profile Picture">
            <span>Admin</span>
            <!-- Dropdown -->
            <div class="profile-dropdown">
                <a href="#">Profile</a>
                <a href="#">Settings</a>
                <a href="#">Logout</a>
            </div>
        </div>
    </div>

    <!-- Script for Responsive Menu Toggle -->
    <script>
        const menuToggle = document.getElementById("menuToggle");
        const menu = document.getElementById("menu");

        menuToggle.addEventListener("click", () => {
            menu.classList.toggle("responsive");
        });
    </script>
</body>
</html>
