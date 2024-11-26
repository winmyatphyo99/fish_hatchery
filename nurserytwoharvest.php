<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tank to Tank Transfer Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<main>
    <?php
    require('a1.php');

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $id = $_POST["id"];
        $hatchery_code = $_POST["hatchery_code"];
        $tank_no = $_POST["tank_no"];
        $stocking_date = $_POST["stocking_date"];
        $stocking_pcs = $_POST["stocking_pcs"];
        $stocking_size = $_POST["stocking_size"];
        $dayof_culture = $_POST["dayof_culture"];
        $harvest_date = $_POST["harvest_date"];
        $harvest_to = $_POST["harvest_to"];
        $harvest_pcs = $_POST["harvest_pcs"];
        $harvest_size = $_POST["harvest_size"];
        $sizing = $_POST["sizing"];
        $total_initial_weight = $_POST["total_initial_weight"];
        $total_harvest_weight = $_POST["total_harvest_weight"];

        $sql = "INSERT INTO nurserytwoharvestrecord (id, hatchery_code, tank_no, stocking_date, stocking_pcs, stocking_size, dayof_culture, harvest_date,harvest_to, harvest_pcs, harvest_size, sizing, total_initial_weight, total_harvest_weight)
            VALUES ('$id', '$hatchery_code', '$tank_no', '$stocking_date', '$stocking_pcs', '$stocking_size', '$dayof_culture', '$harvest_date', '$harvest_to', '$harvest_pcs', '$harvest_size', '$sizing', '$total_initial_weight', '$total_harvest_weight')";

        if ($conn->query($sql) === TRUE) {
            header("Location:nurserytwoharvestrecord.php"); // Redirect to transfer.php after saving
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>




    <div class="container " style="padding-left:60px;padding-top:100px;">
        <main class=" h-100 bg-light rounded-3 shadow-lg p-4 " style=" width:115%;">
            <h2 class="text-center mb-4">Nursery II Tank To Tank Transfer Record</h2>
            <form action="nurserytwoharvest.php" method="POST">

                <!-- Row 1 -->
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="srNo">Sr. No</label>
                        <input type="number" class="form-control" name="id" id="id">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="hatcheryCode">Hatchery Code</label>
                        <input type="text" class="form-control" name="hatchery_code" id="hatchery_code">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="tankNo">Tank No</label>
                        <input type="text" class="form-control" name="tank_no" id="tank_no">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="stockingDate">Stocking Date</label>
                        <input type="date" class="form-control" name="stocking_date" id="stocking_date">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="stockingPcs">Stocking Pcs</label>
                        <input type="number" class="form-control" name="stocking_pcs" id="stocking_pcs">
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="stockingSize">Stocking Size (g)</label>
                        <input type="number" step="0.01" class="form-control" name="stocking_size" id="stocking_size">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="dayCulture">Day of Culture</label>
                        <input type="number" class="form-control" name="dayof_culture" id="dayof_culture">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="harvestDate">Harvest Date</label>
                        <input type="date" class="form-control" name="harvest_date" id="harvest_date">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="harvestTo">To</label>
                        <input type="text" class="form-control" name="harvest_to" id="harvest_to">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="harvestPcs">Harvest Pcs</label>
                        <input type="number" class="form-control" name="harvest_pcs" id="harvest_pcs">
                    </div>
                </div>

                <!-- Row 3 -->
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="harvestSize">Harvest Size (g)</label>
                        <input type="number" step="0.01" class="form-control" name="harvest_size" id="harvest_size">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="sizing">Sizing (%)</label>
                        <input type="number" step="0.01" class="form-control" name="sizing" id="sizing">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="initialWeight">Total Initial Weight (Kg)</label>
                        <input type="number" step="0.01" class="form-control" name="total_initial_weight" id="total_initial_weight">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="harvestWeight">Total Harvest Weight (Kg)</label>
                        <input type="number" step="0.01" class="form-control" name="total_harvest_weight" id="total_harvest_weight">
                    </div>

                </div>
                <button type="submit" class="btn btn-primary btn-block">Save Record</button>
            </form>

    </div>
</main>
<!-- Bootstrap JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js"></script>
</body>

</html>