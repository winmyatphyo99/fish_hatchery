<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breeder Feeding Daily Record Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<main>
    <?php
    require('a1.php');



    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $id  = $_POST["id"];
        // $current_time = $_POST["current_time"];
        $emp_name = $_POST["emp_name"];
        $pond_name = $_POST["pond_name"];
        $balance_pcs = $_POST["balance_pcs"];
        $check_size = $_POST["check_size"];
        $total_weight = $_POST["total_weight"];
        $feed_kg = $_POST["feed_kg"];
        $feed_percent = $_POST["feed_percent"];
        $todate_feed = $_POST["todate_feed"];

        $sql = "INSERT INTO breederfeeding (id, emp_name, pond_name, balance_pcs, check_size, total_weight, feed_kg, feed_percent, todate_feed)
        VALUES ('$id', '$emp_name', '$pond_name', '$balance_pcs', '$check_size', '$total_weight', '$feed_kg', '$feed_percent', '$todate_feed')";



        if ($conn->query($sql) === TRUE) {
            header("Location:breederfeedingrecord.php"); // Redirect to transfer.php after saving
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>




    <div class="container " style="padding-left:60px;padding-top:100px;">
        <main class=" h-100 bg-light rounded-3 shadow-lg p-4 " style=" width:115%;">
            <h2 class="text-center mb-4">Nursery II Daily Record</h2>
            <form action="breederfeedingdaily.php" method="POST">

                <!-- Row 1 -->
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="id">Sr. No</label>
                        <input type="number" class="form-control" name="id" id="id">
                    </div>
                    <!-- <div class="form-group col-md-2">
                        <label for="tankNo">Time</label>
                        <input type="date" class="form-control" name="current_time" id="current_time">
                    </div> -->
                    <div class="form-group col-md-2">
                        <label for="hatcheryCode">Name</label>
                        <input type="text" class="form-control" name="emp_name" id="emp_name">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="stockingDate">Pond Name</label>
                        <input type="text" class="form-control" name="pond_name" id="pond_name">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="stockingPcs">Balance Pcs</label>
                        <input type="number" class="form-control" name="balance_pcs" id="balance_pcs">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="stockingPcs">Check Size(kg)</label>
                        <input type="number" class="form-control" name="check_size" id="check_size">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="balancePcs">Total Weight(kg)</label>
                        <input type="number" class="form-control" name="total_weight" id="total_weight">
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="stockingSize">Feed(kg)</label>
                        <input type="number" step="0.01" class="form-control" name="feed_kg" id="feed_kg">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="dayCulture">Feed(%)</label>
                        <input type="number" class="form-control" name="feed_percent" id="feed_percent">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="harvestDate">Todate Feed(kg)</label>
                        <input type="number" class="form-control" name="todate_feed" id="todate_feed">
                    </div>
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