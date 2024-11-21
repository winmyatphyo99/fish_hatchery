<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hatchery Management</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link your CSS file -->
    <style>
        /* Inline styles for quick reference */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .sidebar {
            width: 190px;
            background-color: #40e0d0;
            color: #fff;
            height: 100vh;
            position: fixed;
            padding: 5px;
        }
        .logo{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom: 13px;
        }
        .sidebar h2 {
            font-size:15px;
            text-align: center;
            color: #000; /* Adjust for your preferred green shade */
        }
        .menu-item {
            margin: 0 0 20px 0;
        }
        .menu-item a {
            color: #000;
            text-decoration: none;
            display: flex;
            align-items: center;
            font-size: 16px;
        }
        .menu-item a:hover {
            color: #f0ffff; /* Hover effect */
        }
        .menu-item span {
            margin-left: 18px;
        }
        .menu-section {
            text-transform: uppercase;
            font-size: 12px;
            margin: 10px 0;
            color: #888;
        }
        .menu-icon {
            font-size: 20px;
        }
        
    </style>
</head>
<body>
   
        

    <div class="sidebar">
        <div class="logo">
            <div><img src="image/geaai.png" alt="" style="width: 70px; border-radius: 20%"></div>
            <div><h2>HATCHERY MANAGEMENT</h2></div>
        </div>
        <!-- <div class="menu-section">Dashboard</div> -->
        <div class="menu-item">
            <a href="#"><span class="menu-icon ">🏠</span><span>Dashboard</span></a>
        </div>
        <!-- <div class="menu-section">Animals</div> -->
        <div class="menu-item">
            <a href="#"><span class="menu-icon">🐟</span><span>Fish Tanks</span></a>
        </div>
        <div class="menu-item">
            <a href="#"><span class="menu-icon">📋</span><span>Collecting Fish Species</span></a>
        </div>
        <div class="menu-item">
            <a href="#"><span class="menu-icon">🔄</span><span>Breeder Management</span></a>
        </div>
        <!-- <div class="menu-section">Processes</div> -->
        <div class="menu-item">
            <a href="#"><span class="menu-icon">🥚</span><span>Incubation</span></a>
        </div>
        <div class="menu-item">
            <a href="#"><span class="menu-icon">🚚</span><span>Transfering</span></a>
        </div>
        <div class="menu-item">
            <a href="#"><span class="menu-icon">🦈</span><span>Feeding</span></a>
        </div>
        <!-- <div class="menu-section">Employees</div> -->
        <div class="menu-item">
            <a href="#"><span class="menu-icon">👨‍💼</span><span>Employees</span></a>
        </div>
    </div>
</body>
</html>
