<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'hatchery');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch records
$sql = "SELECT * FROM records";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breeder Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-4">
        <h2 class="text-center">Breeder Records</h2>
        <a href="insert.php" class="btn btn-success mb-3">Add New Record</a>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>From</th>
                        <th>Female Pcs</th>
                        <th>Female Wt</th>
                        <th>Female Avg Wt</th>
                        <th>Male Pcs</th>
                        <th>Male Wt</th>
                        <th>Male Avg Wt</th>
                        <th>To</th>
                        <th>HCG</th>
                        <th>Ovaprim</th>
                        <th>DOM</th>
                        <th>Cinnafact</th>
                        <th>Egg Weight</th>
                        <th>Fecundity Rate</th>
                        <th>Pond No</th>
                        <th>Fry Stocking</th>
                        <th>Hatchery Code</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['date']}</td>
                                <td>{$row['from_location']}</td>
                                <td>{$row['breeder_female_pcs']}</td>
                                <td>{$row['breeder_female_weight']}</td>
                                <td>{$row['breeder_female_avg_weight']}</td>
                                <td>{$row['breeder_male_pcs']}</td>
                                <td>{$row['breeder_male_weight']}</td>
                                <td>{$row['breeder_male_avg_weight']}</td>
                                <td>{$row['to_location']}</td>
                                <td>{$row['hcg']}</td>
                                <td>{$row['ovaprim']}</td>
                                <td>{$row['dom']}</td>
                                <td>{$row['cinnafact']}</td>
                                <td>{$row['egg_weight']}</td>
                                <td>{$row['fecundity_rate']}</td>
                                <td>{$row['pond_no']}</td>
                                <td>{$row['fry_stocking']}</td>
                                <td>{$row['hatchery_code']}</td>
                            </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='19' class='text-center'>No records found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>