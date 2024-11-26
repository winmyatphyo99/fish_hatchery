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

$sql = "SELECT * FROM nurserytwo";
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
                    <a href="nurserytwotransfer.php" style="text-decoration:none; color:#fff;">Add New Transfer Record</a>
                </div>


            </header>
            <div class="fw-bold text-success text-md-center display-6" id="delete-success"></div>
            <section>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">Sr.No</th>
                            <th class="text-center">Hatchery Code</th>
                            <th class="text-center">Tank No</th>
                            <th class="text-center">Stocking Date</th>
                            <th class="text-center">Stocking pcs</th>
                            <th class="text-center">Stocking Size(g)</th>
                            <th class="text-center">Day of Culture</th>
                            <th class="text-center">Harvest Date</th>
                            <th class="text-center">To</th>
                            <th class="text-center">Harvest pcs</th>
                            <th class="text-center">Harvest Size(g)</th>
                            <th class="text-center">Sizing(%)</th>
                            <th class="text-center">Total Initial Weight(kg)</th>
                            <th class="text-center">Total Harvest Weight(kg)</th>

                        </tr>
                    </thead>
                    <tbody id="table-body">
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                <td>{$row['nurserytwo_id']}</td>
                <td>{$row['hatchery_code']}</td>
                <td>{$row['tank_no']}</td>
                <td>{$row['stocking_date']}</td>
                <td>{$row['stocking_pcs']}</td>
                <td>{$row['stocking_size']}</td>
                <td>{$row['dayof_culture']}</td>
                <td>{$row['harvest_date']}</td>
                <td>{$row['transfer_to']}</td>
                <td>{$row['harvest_pcs']}</td>
                <td>{$row['harvest_size']}</td>
                <td>{$row['sizing']}</td>
                <td>{$row['total_initial_weight']}</td>
                <td>{$row['total_harvest_weight']}</td>
            </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='14' class='text-center'>No records found</td></tr>";
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