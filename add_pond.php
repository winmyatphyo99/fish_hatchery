<?php
// Save this file as add_pond.php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capture form data
    $pond_name = $_POST['pond_name'];
    $pond_no = $_POST['pond_no'];
    $date = $_POST['date'];

    // Validate form data
    if (empty($pond_name) || empty($pond_no) || empty($date)) {
        $error = "All fields are required!";
    } else {
        // Save to database (replace with your DB logic)
        // Assuming a PDO connection is already configured
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=your_database', 'username', 'password');
            $sql = "INSERT INTO ponds (pond_name, pond_no, date) VALUES (:pond_name, :pond_no, :date)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':pond_name' => $pond_name,
                ':pond_no' => $pond_no,
                ':date' => $date,
            ]);
            $success = "Pond added successfully!";
        } catch (PDOException $e) {
            $error = "Database error: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Pond</title>
    <style>
        /* Add your custom styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input, select, button {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            margin-bottom: 15px;
        }

        .success {
            color: green;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add Pond</h1>
        <?php if (isset($error)): ?>
            <p class="error"><?= $error ?></p>
        <?php endif; ?>
        <?php if (isset($success)): ?>
            <p class="success"><?= $success ?></p>
        <?php endif; ?>
        <form method="POST" action="">
            <label for="pond_name">Pond Name*</label>
            <select name="pond_name" id="pond_name" required>
                <option value="">Select Pond Name</option>
                <option value="Nursery-1">Nursery-1</option>
                <option value="Nursery-2">Nursery-2</option>
                <option value="Nursery-3">Nursery-3</option>
            </select>

            <label for="pond_no">Pond No*</label>
            <input type="text" name="pond_no" id="pond_no" placeholder="Enter Pond No" required>

            <label for="date">Date*</label>
            <input type="date" name="date" id="date" required>

            <button type="submit">Add Pond</button>
        </form>
    </div>
</body>
</html>
