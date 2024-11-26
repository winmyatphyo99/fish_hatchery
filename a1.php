<?php
ob_start();
require('connection.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hatchery Management</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            width: 197px;
            background-color: #40e0d0;
            color: #fff;
            height: 100vh;
            position: absolute;
            height: 400vh;
        }

        .logo {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .sidebar h2 {
            font-size: 16px;
            font-weight: bold;
            margin-top: 20px;
            text-align: center;
            color: #000;
        }





        .menu-item {
             margin: 0 0 20px 0; 
            position: relative;

        }

        .menu-item a {
            color: #000;
            text-decoration: none;
            display: flex;
            align-items: center;
            font-size: 16px;
            
        }

        .menu-item a:hover {
           
            color: #f0ffff;
        }

        .menu-item span {
            margin-left: 18px;
        }

        .dropdown-box {
            display: none;
            background-color: #fff;
            position: absolute;
            top: 100%;
            right: 0;
            width: 90%;
            z-index: 10;
            border: 1px solid #ddd;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .dropdown-box a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: red;
        }

        .dropdown-box a:hover {
            background-color: #f0f0f0;
        }

        .img-profile {
            width: 50px;
            height: 50px;
        }

        nav {
            width: calc(100% - 197px);
            float: right;
            position: fixed;
        }

        .move {
            padding-left: calc(100% - 190px);
        }

        .menu-icon {
            font-size: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            text-align: center;
        }

        .menu-text {
            font-size: 20px;
            margin: 0;
            line-height: 35px;
            flex: 1;
        }
    </style>
</head>

<body>
    <!-- Top Navigation Bar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow">
        <div class="move">
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrator</span>
                        <img class="img-profile rounded-circle" src="image/user-avatar.png" alt="User Avatar">
                    </a>
                    <div class="dropdown-menu shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">
            <div>
                <img src="image/geaai.png" alt="" style="width: 80px; border-radius: 20%">
            </div>
            <div>
                <h2>HATCHERY MANAGEMENT</h2>
            </div>
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
            <div class="dropdown-box">
                <a href="#">Hatchery to Nursery 1</a>
                <a href="#">Nursery 1 to Nursery 2</a>
                <a href="#">Nursery 2 to Nursery 3</a>
            </div>
        </div>
        <div class="menu-item">
            <a href="#"><span class="menu-icon">🚚</span><span class="menu-text">Transferring</span></a>
            <div class="dropdown-box">
                <a href="#">Hatchery to Nursery 1</a>
                <a href="#">Nursery 1 to Nursery 2</a>
                <a href="#">Nursery 2 to Nursery 3</a>
            </div>
        </div>
        <div class="menu-item">
            <a href="#"><span class="menu-icon">🦈</span><span class="menu-text">Feeding</span></a>
        </div>
        <div class="menu-item">
            <a href="#"><span class="menu-icon">👨‍💼</span><span class="menu-text">Employees</span></a>
            <div class="dropdown-box">
                <a href="#">Hatchery to Nursery 1</a>
                <a href="#">Nursery 1 to Nursery 2</a>
                <a href="#">Nursery 2 to Nursery 3</a>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".menu-item > a").click(function(e) {
                e.preventDefault();

                // Toggle the dropdown for the clicked menu item
                const dropdown = $(this).siblings(".dropdown-box");
                dropdown.slideToggle();

                // Hide other dropdowns that are open
                $(".dropdown-box").not(dropdown).slideUp();
            });
        });
    </script>
</body>

</html>