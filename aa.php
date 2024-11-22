<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hatchery Management</title>
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
            position: fixed;
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
            justify-content: space-between;
            /* Align arrow to the right */
        }

        .menu-item a:hover {
            color: #f0ffff;
        }

        .dropdown-box {
            display: none;
            background-color: #fff;
            position: relative;
            border: 1px solid #ddd;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .dropdown-box a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #000;
        }

        .dropdown-box a:hover {
            background-color: #f0f0f0;
        }

        nav {
            width: calc(100% - 197px);
            float: right;
        }

        .move {
            padding-left: calc(100% - 190px);
        }

        .menu-icon {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>HATCHERY MANAGEMENT</h2>
        <div class="menu-item">
            <a href="#"><span class="menu-icon">🏠</span> Dashboard</a>
        </div>
        <div class="menu-item">
            <a href="#"><span class="menu-icon">🐟</span> Fish Tanks</a>
        </div>
        <div class="menu-item">
            <a href="#"><span class="menu-icon">🔄</span> Breeder Management</a>
        </div>
        <div class="menu-item">
            <a href="#" class="dropdown-toggle">
                <span><span class="menu-icon">🚚</span> Transferring</span>
                <span class="arrow">►</span>
            </a>
            <div class="dropdown-box">
                <a href="#">Hatchery to Nursery 1</a>
                <a href="#">Nursery 1 to Nursery 2</a>
                <a href="#">Nursery 2 to Nursery 3</a>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Dropdown Toggle Functionality
            $(".dropdown-toggle").click(function(e) {
                e.preventDefault();

                // Toggle the arrow direction
                const arrow = $(this).find(".arrow");
                if (arrow.text() === "►") {
                    arrow.text("▼");
                } else {
                    arrow.text("►");
                }

                // Toggle the dropdown visibility
                const dropdown = $(this).siblings(".dropdown-box");
                dropdown.slideToggle();

                // Hide other dropdowns and reset their arrows
                $(".dropdown-box").not(dropdown).slideUp();
                $(".arrow").not(arrow).text("►");
            });
        });
    </script>
</body>

</html>