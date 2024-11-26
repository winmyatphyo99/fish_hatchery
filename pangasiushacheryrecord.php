<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breeder Data Table with Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        table th,
        table td {
            text-align: center;
            vertical-align: middle;
        }

        th {
            white-space: nowrap;
        }

        .table thead th {
            background-color: #f8f9fa;
        }
    </style>
</head>


<?php
require_once("a1.php");

$sql = "SELECT * FROM records";
$result = $conn->query($sql);
?>



<body>
    <div class="container " style="padding-left:40px;padding-top:100px;">
        <main class=" h-100  bg-light rounded-3 shadow-lg p-4 " id="brand" style="width:117%;">
            <h2 class="text-center">Breeder Data Table</h2>
            <header class="d-flex justify-content-between w-100 p-2">

                <div id="search-brand" class="mt-2 mb-2 text-end">
                    Search: <input type="text" name="search-brand-name" id="search-brand-name"
                        class="rounded-2 border-1 p-1 shadow-lg" placeholder="">
                </div>

                <div class="btn btn-primary fw-bold " style="margin-left:80vh;padding-top:15px;" onclick="openOptions('brand', 'add-new-brand', false, null)">
                    <a href="pangasiushatchery.php" style="text-decoration:none; color:#fff;">Add New Daily Record</a>
                </div>


            </header>

            <!-- Table Section -->
            <div class="mb-4">
                <table class=" table-bordered">
                    <thead>
                        <tr>
                            <th rowspan="2">SR. No</th>
                            <th rowspan="2">Date</th>
                            <th rowspan="2">From</th>
                            <th colspan="3">Breeder Female</th>
                            <th colspan="3">Breeder Male</th>
                            <th rowspan="2">To</th>
                            <th rowspan="2">HCG</th>
                            <th rowspan="2">Ovaprim</th>
                            <th rowspan="2">DOM</th>
                            <th rowspan="2">Cinnafact <br>(CC)</th>
                            <th rowspan="2">Egg Weight <br> (Kg)</th>
                            <th rowspan="2">Fecundity <br> Rate</th>
                            <th rowspan="2">Date</th>
                            <th rowspan="2">Pond No</th>
                            <th rowspan="2">Fry Stocking <br> Pcs (Million)</th>
                            <th rowspan="2">Hatchery <br> Code</th>
                        </tr>
                        <tr>
                            <th>Pcs</th>
                            <th>Wt (kg)</th>
                            <th>Avg Wt</th>
                            <th>Pcs</th>
                            <th>Wt (kg)</th>
                            <th>Avg Wt</th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['firstdate']}</td>
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
                <td>{$row['seconddate']}</td>
                <td>{$row['pond_no']}</td>
                <td>{$row['fry_stocking']}</td>
                <td>{$row['hatchery_code']}</td>
            </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='20' class='text-center'>No records found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>