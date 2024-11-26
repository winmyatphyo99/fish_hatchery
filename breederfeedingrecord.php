<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hatchery Management</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<?php
require_once("a1.php");

$sql = "SELECT * FROM breederfeeding";
$result = $conn->query($sql);
?>




<body>


    <div class="container " style="padding-left:60px;padding-top:100px;">
        <main class=" h-100  bg-light rounded-3 shadow-lg p-4 " id="brand" style="width:115%;">
            <header class="d-flex justify-content-between w-100 p-2">

                <div id="search-brand" class="mt-2 mb-2 text-end">
                    Search: <input type="text" name="search-brand-name" id="search-brand-name"
                        class="rounded-2 border-1 p-1 shadow-lg" placeholder="">
                </div>

                <div class="btn btn-primary fw-bold " style="margin-left:80vh;padding-top:15px;" onclick="openOptions('brand', 'add-new-brand', false, null)">
                    <a href="breederfeedingdaily.php" style="text-decoration:none; color:#fff;">Add New Harvest Record</a>
                </div>


            </header>
            <div class="fw-bold text-success text-md-center display-6" id="delete-success"></div>
            <section>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">Sr.no</th>
                            <th class="text-center">Time</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Pond Name</th>
                            <th class="text-center">Balance Pcs</th>
                            <th class="text-center">Check Size</th>
                            <th class="text-center">Total Weight(kg)</th>
                            <th class="text-center">Feed(kg)</th>
                            <th class="text-center">Feed(%)</th>
                            <th class="text-center">Todate Feed(kg)</th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                <td>{$row['id']}</td>
                <td>
                                        {$row['current_time']}
                                    </td>
                <td>{$row['emp_name']}</td>
                <td>{$row['pond_name']}</td>
                <td>{$row['balance_pcs']}</td>
                <td>{$row['check_size']}</td>
                <td>{$row['total_weight']}</td>
                <td>{$row['feed_kg']}</td>
                <td>{$row['feed_percent']}</td>
                <td>{$row['todate_feed']}</td>
            </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='10' class='text-center'>No records found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <div class="pagination-controls text-end">
                    <button id="prev-btn" class="btn btn-secondary" disabled>Previous</button>
                    <button id="next-btn" class="btn btn-secondary bg-primary">Next</button>
                </div>
            </section>
        </main>



    </div>

</body>

</html>