<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nursery 2 Daily Record Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<main>
    <?php
    require('a1.php');

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nursery_id = $_POST["nursery_id"];
        $tank_no = $_POST["tank_no"];
        $hatchery_code = $_POST["hatchery_code"];
        $stocking_date = $_POST["stocking_date"];
        $initial_size = $_POST["initial_size"];
        $stocking_pcs = $_POST["stocking_pcs"];
        $balance_pcs = $_POST["balance_pcs"];
        $current_weight = $_POST["current_weight"];
        $biomass = $_POST["biomass"];
        $biomassm3 = $_POST["biomassm3"];
        $age = $_POST["age"];
        $daily_feed = $_POST["daily_feed"];
        $todate_feed = $_POST["todate_feed"];
        $todate_dead_pcs = $_POST["todate_dead_pcs"];
        $feeding = $_POST["feeding"];
        $die_fish = $_POST["die_fish"];
        $dead = $_POST["dead"];

        $sql = "INSERT INTO nurserytwodailyrecord (nursery_id, tank_no, hatchery_code, stocking_date, initial_size, stocking_pcs, balance_pcs, current_weight,biomass, biomassm3, age, daily_feed, todate_feed, todate_dead_pcs,feeding,die_fish,dead)
            VALUES ('$nursery_id', '$tank_no', '$hatchery_code', '$stocking_date', '$initial_size', '$stocking_pcs', '$balance_pcs', '$current_weight', '$biomass', '$biomassm3', '$age', '$daily_feed', '$todate_feed','$todate_dead_pcs','$feeding','$die_fish','$dead')";

        if ($conn->query($sql) === TRUE) {
            header("Location:nurserytwodailyrecord.php"); // Redirect to transfer.php after saving
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>




    <div class="container " style="padding-left:60px;padding-top:100px;">
        <main class=" h-100 bg-light rounded-3 shadow-lg p-4 " style=" width:115%;">
            <h2 class="text-center mb-4">Nursery II Daily Record</h2>
            <form action="nurserytwodaily.php" method="POST">

                <!-- Row 1 -->
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="nursery_id">Sr. No</label>
                        <input type="number" class="form-control" name="nursery_id" id="nursery_id">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="tankNo">Tank No</label>
                        <input type="text" class="form-control" name="tank_no" id="tank_no">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="hatcheryCode">Hatchery Code</label>
                        <input type="text" class="form-control" name="hatchery_code" id="hatchery_code">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="stockingDate">Stocking Date</label>
                        <input type="date" class="form-control" name="stocking_date" id="stocking_date">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="stockingPcs">Initial Size</label>
                        <input type="number" class="form-control" name="initial_size" id="initial_size">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="stockingPcs">Stocking Pcs</label>
                        <input type="number" class="form-control" name="stocking_pcs" id="stocking_pcs">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="balancePcs">Balance Pcs</label>
                        <input type="number" class="form-control" name="balance_pcs" id="balance_pcs">
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="stockingSize">Current Weight</label>
                        <input type="number" step="0.01" class="form-control" name="current_weight" id="current_weight">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="dayCulture">Biomass</label>
                        <input type="number" class="form-control" name="biomass" id="biomass">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="harvestDate">Biomassm3</label>
                        <input type="number" class="form-control" name="biomassm3" id="biomassm3">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="harvestTo">Age</label>
                        <input type="number" class="form-control" name="age" id="age">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="harvestPcs">Daily Feed</label>
                        <input type="number" class="form-control" name="daily_feed" id="daily_feed">
                    </div>
                </div>

                <!-- Row 3 -->
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="harvestSize">Todate Feed</label>
                        <input type="number" step="0.01" class="form-control" name="todate_feed" id="todate_feed">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="sizing">Todate Dead Pcs</label>
                        <input type="number" step="0.01" class="form-control" name="todate_dead_pcs" id="todate_dead_pcs">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="initialWeight">Feeding</label>
                        <input type="number" step="0.01" class="form-control" name="feeding" id="feeding">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="harvestWeight">Die Fish</label>
                        <input type="number" step="0.01" class="form-control" name="die_fish" id="die_fish">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="harvestWeight">Dead</label>
                        <input type="number" step="0.01" class="form-control" name="dead" id="dead">
                    </div>

                </div>
                <button type="submit" class="btn btn-primary btn-block">Save Record</button>
            </form>

    </div>
</main>
<!-- Bootstrap JS, Popper.js, and jQuery -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js"></script>
</body>

</html>