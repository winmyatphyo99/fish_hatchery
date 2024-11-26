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
require('a1.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id "];
    $firstdate = $_POST["firstdate"];
    $from_location = $_POST["from_location"];
    $breeder_female_pcs = $_POST["breeder_female_pcs"];
    $breeder_female_weight = $_POST["breeder_female_weight"];
    $breeder_female_avg_weight = $_POST["breeder_female_avg_weight"];
    $breeder_male_pcs = $_POST["breeder_male_pcs"];
    $breeder_male_weight = $_POST["breeder_male_weight"];
    $breeder_male_avg_weight = $_POST["breeder_male_avg_weight"];
    $to_location = $_POST["to_location"];
    $hcg = $_POST["hcg"];
    $ovaprim = $_POST["ovaprim"];
    $dom = $_POST["dom"];
    $cinnafact = $_POST["cinnafact"];
    $egg_weight = $_POST["egg_weight"];
    $fecundity_rate = $_POST["fecundity_rate"];
    $seconddate = $_POST["seconddate"];
    $pond_no = $_POST["pond_no"];
    $fry_stocking = $_POST["fry_stocking"];
    $hatchery_code = $_POST["hatchery_code"];

    $sql =
        "INSERT INTO records (id, firstdate, from_location, breeder_female_pcs, breeder_female_weight,
         breeder_female_avg_weight, breeder_male_pcs, breeder_male_weight, breeder_male_avg_weight,
         to_location, hcg, ovaprim, dom, cinnafact, egg_weight, fecundity_rate, seconddate, pond_no, fry_stocking, hatchery_code)
         VALUES ('$id', '$firstdate', '$from_location', '$breeder_female_pcs', '$breeder_female_weight',
         '$breeder_female_avg_weight', '$breeder_male_pcs', '$breeder_male_weight', 
         '$breeder_male_avg_weight', '$to_location', '$hcg', '$ovaprim',
         '$dom', '$cinnafact', '$egg_weight', '$fecundity_rate', '$seconddate',
         '$pond_no', '$fry_stocking', '$hatchery_code')";

    if ($conn->query($sql) === TRUE) {
        header("Location:pangasiushacheryrecord.php"); // Redirect to transfer.php after saving
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>


<div class="container" style="padding-left:60px;padding-top:100px;">
    <main class=" h-100 bg-light rounded-3 shadow-lg p-4 " style=" width:115%;">
        <!-- Insert Form Section -->
        <h2 class="text-center mb-4">Nursery I Harvest Record</h2>
        <form action="pangasiushatchery.php" method="POST">
            <div class="row g-3">
                <div class="col-md-2">
                    <label for="id " class="form-label">SR. No</label>
                    <input type="number" class="form-control" name="id " id="id">
                </div>
                <div class="col-md-2">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" name="firstdate" id="firstdate">
                </div>
                <div class="col-md-2">
                    <label for="from_location" class="form-label">From</label>
                    <input type="text" class="form-control" name="from_location" id="from_location">
                </div>
                <div class="col-md-2">
                    <label for="femalePcs" class="form-label">Female Pcs</label>
                    <input type="number" class="form-control" name="breeder_female_pcs" id="breeder_female_pcs">
                </div>
                <div class="col-md-2">
                    <label for="femaleWt" class="form-label">Female Wt (kg)</label>
                    <input type="number" step="0.1" class="form-control" name="breeder_female_weight" id="breeder_female_weight">
                </div>
                <div class="col-md-2">
                    <label for="femaleAvgWt" class="form-label">Female Avg Wt</label>
                    <input type="number" step="0.1" class="form-control" name="breeder_female_avg_weight" id="breeder_female_avg_weight">
                </div>
            </div>
            <div class="row g-3 mt-2">
                <div class="col-md-2">
                    <label for="malePcs" class="form-label">Male Pcs</label>
                    <input type="number" class="form-control" name="breeder_male_pcs" id="breeder_male_pcs">
                </div>
                <div class="col-md-2">
                    <label for="maleWt" class="form-label">Male Wt (kg)</label>
                    <input type="number" step="0.1" class="form-control" name="breeder_male_weight" id="breeder_male_weight">
                </div>
                <div class="col-md-2">
                    <label for="maleAvgWt" class="form-label">Male Avg Wt</label>
                    <input type="number" step="0.1" class="form-control" name="breeder_male_avg_weight" id="breeder_male_avg_weight">
                </div>
                <div class="col-md-2">
                    <label for="to" class="form-label">To</label>
                    <input type="text" class="form-control" name="to_location" id="to_location">
                </div>
                <div class="col-md-2">
                    <label for="hcg" class="form-label">HCG</label>
                    <input type="number" class="form-control" name="hcg" id="hcg">
                </div>
                <div class="col-md-2">
                    <label for="ovaprim" class="form-label">Ovaprim</label>
                    <input type="number" class="form-control" name="ovaprim" id="ovaprim">
                </div>
            </div>
            <div class="row g-3 mt-2">
                <div class="col-md-2">
                    <label for="dom" class="form-label">DOM</label>
                    <input type="number" class="form-control" name="dom" id="dom">
                </div>
                <div class="col-md-2">
                    <label for="cinnafact" class="form-label">Cinnafact</label>
                    <input type="number" class="form-control" name="cinnafact" id="cinnafact">
                </div>
                <div class="col-md-2">
                    <label for="eggWeight" class="form-label">Egg Weight (Kg)</label>
                    <input type="number" step="0.1" class="form-control" name="egg_weight" id="egg_weight">
                </div>
                <div class="col-md-2">
                    <label for="fecundityRate" class="form-label">Fecundity Rate</label>
                    <input type="text" class="form-control" name="fecundity_rate" id="fecundityRate">
                </div>
                <div class="col-md-2">
                    <label for="doubledate" class="form-label">Date</label>
                    <input type="date" class="form-control" name="seconddate" id="seconddate">
                </div>
                <div class="col-md-2">
                    <label for="pondNo" class="form-label">Pond No</label>
                    <input type="text" class="form-control" name="pond_no" id="pond_no">
                </div>
                <div class="col-md-2">
                    <label for="fry_stocking" class="form-label">Fry Socking Pcs(Million)</label>
                    <input type="number" class="form-control" name="fry_stocking" id="fry_stocking">
                </div>
            </div>
            <div class="row g-3 mt-3">
                <div class="col-md-2">
                    <label for="fryStocking" class="form-label">Hatchery Code</label>
                    <input type="number" step="0.1" class="form-control" name="hatchery_code" id="hatchery_code">
                </div>
                <div class="col-md-2 mt-4">
                    <button type="submit" class="btn btn-primary w-100">Insert Data</button>
                </div>
            </div>
        </form>
</div>
</main>

<!-- Bootstrap JS Bundle -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js"></script>
</body>

</html>