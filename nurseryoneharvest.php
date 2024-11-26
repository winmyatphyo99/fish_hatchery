<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nursery 1 Harvest Record Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<main>
    <?php
    require('a1.php');

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nursery_id = $_POST["nursery_id"];
        $hatchery_code = $_POST["hatchery_code"];
        $pond_no = $_POST["pond_no"];
        $stocking_date = $_POST["stocking_date"];
        $stocking_pcs_million = $_POST["stocking_pcs_million"];
        $age = $_POST["age"];
        $harvest_date = $_POST["harvest_date"];
        $to_harvest = $_POST["to_harvest"];
        $harvest_pcs = $_POST["harvest_pcs"];
        $harvest_size = $_POST["harvest_size"];
        $sizing = $_POST["sizing"];
        $total_harvest_weight = $_POST["total_harvest_weight"];

        $sql = "INSERT INTO nurseryoneharvestrecord (nursery_id, hatchery_code, pond_no, stocking_date, stocking_pcs_million, age, harvest_date,to_harvest,  harvest_pcs, harvest_size, sizing,total_harvest_weight)
            VALUES ('$nursery_id', '$hatchery_code', '$pond_no', '$stocking_date', '$stocking_pcs_million', '$age', '$harvest_date', '$to_harvest', '$harvest_pcs', '$harvest_size','$sizing','$total_harvest_weight')";

        if ($conn->query($sql) === TRUE) {
            header("Location:nurseryoneharvestrecord.php"); // Redirect to transfer.php after saving
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>




    <div class="container " style="padding-left:60px;padding-top:100px;">
        <main class=" h-100 bg-light rounded-3 shadow-lg p-4 " style=" width:115%;">
            <h2 class="text-center mb-4">Nursery I Harvest  Record</h2>
            <form action="nurseryoneharvest.php" method="POST">

                <!-- Row 1 -->
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="nursery_id">Sr. No</label>
                        <input type="number" class="form-control" name="nursery_id" id="nursery_id">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="hatcheryCode">Hatchery Code</label>
                        <input type="text" class="form-control" name="hatchery_code" id="hatchery_code">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="stockingDate">Pond No</label>
                        <input type="text" class="form-control" name="pond_no" id="pond_no">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="stockingPcs">Stocking Date</label>
                        <input type="date" class="form-control" name="stocking_date" id="stocking_date">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="stockingPcs">Stocking Pcs Million</label>
                        <input type="number" class="form-control" name="stocking_pcs_million" id="stocking_pcs_million">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="balancePcs">Age</label>
                        <input type="number" class="form-control" name="age" id="age">
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="stockingSize">Harvest Date</label>
                        <input type="date" step="0.01" class="form-control" name="harvest_date" id="harvest_date">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="dayCulture">To Harvest</label>
                        <input type="number" class="form-control" name="to_harvest" id="to_harvest">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="harvestDate">Harvest Pcs</label>
                        <input type="number" class="form-control" name="harvest_pcs" id="harvest_pcs">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="harvestTo">Harvest Size</label>
                        <input type="number" class="form-control" name="harvest_size" id="harvest_size">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="harvestPcs">Sizing</label>
                        <input type="number" class="form-control" name="sizing" id="sizing">
                    </div>
                </div>

                <!-- Row 3 -->
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="harvestSize">Total Harvest Weight</label>
                        <input type="number" step="0.01" class="form-control" name="total_harvest_weight" id="total_harvest_weight">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Save Record</button>
            </form>

    </div>
</main>
<!-- Bootstrap JS, Popper.js, and jQuery -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js"></script>
</body>

</html>