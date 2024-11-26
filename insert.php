<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'hatchery');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Collect form data
    $date = $_POST['date'];
    $from_location = $_POST['from'];
    $breeder_female_pcs = $_POST['femalePcs'];
    $breeder_female_weight = $_POST['femaleWt'];
    $breeder_female_avg_weight = $_POST['femaleAvgWt'];
    $breeder_male_pcs = $_POST['malePcs'];
    $breeder_male_weight = $_POST['maleWt'];
    $breeder_male_avg_weight = $_POST['maleAvgWt'];
    $to_location = $_POST['to'];
    $hcg = $_POST['hcg'];
    $ovaprim = $_POST['ovaprim'];
    $dom = $_POST['dom'];
    $cinnafact = $_POST['cinnafact'];
    $egg_weight = $_POST['eggWeight'];
    $fecundity_rate = $_POST['fecundityRate'];
    $pond_no = $_POST['pondNo'];
    $fry_stocking = $_POST['fryStocking'];
    $hatchery_code = $_POST['hatcheryCode'];

    // Insert into database
    $sql = "INSERT INTO records (date, from_location, breeder_female_pcs, breeder_female_weight, breeder_female_avg_weight, 
            breeder_male_pcs, breeder_male_weight, breeder_male_avg_weight, to_location, hcg, ovaprim, dom, 
            cinnafact, egg_weight, fecundity_rate, pond_no, fry_stocking, hatchery_code)
            VALUES ('$date', '$from_location', $breeder_female_pcs, $breeder_female_weight, $breeder_female_avg_weight, 
                    $breeder_male_pcs, $breeder_male_weight, $breeder_male_avg_weight, '$to_location', $hcg, $ovaprim, 
                    '$dom', '$cinnafact', $egg_weight, '$fecundity_rate', '$pond_no', $fry_stocking, '$hatchery_code')";

    if ($conn->query($sql) === TRUE) {
        header('Location: records.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Breeder Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-4">
        <h2 class="text-center">Insert Breeder Data</h2>
        <form action="insert.php" method="POST">
            <div class="row g-3">
                <div class="col-md-2">
                    <label for="srNo" class="form-label">SR. No</label>
                    <input type="number" class="form-control" id="srNo" placeholder="1">
                </div>
                <div class="col-md-2">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date">
                </div>
                <div class="col-md-2">
                    <label for="from" class="form-label">From</label>
                    <input type="text" class="form-control" id="from" placeholder="From">
                </div>
                <div class="col-md-2">
                    <label for="femalePcs" class="form-label">Female Pcs</label>
                    <input type="number" class="form-control" id="femalePcs">
                </div>
                <div class="col-md-2">
                    <label for="femaleWt" class="form-label">Female Wt (kg)</label>
                    <input type="number" step="0.1" class="form-control" id="femaleWt">
                </div>
                <div class="col-md-2">
                    <label for="femaleAvgWt" class="form-label">Female Avg Wt</label>
                    <input type="number" step="0.1" class="form-control" id="femaleAvgWt">
                </div>
            </div>
            <div class="row g-3 mt-2">
                <div class="col-md-2">
                    <label for="malePcs" class="form-label">Male Pcs</label>
                    <input type="number" class="form-control" id="malePcs">
                </div>
                <div class="col-md-2">
                    <label for="maleWt" class="form-label">Male Wt (kg)</label>
                    <input type="number" step="0.1" class="form-control" id="maleWt">
                </div>
                <div class="col-md-2">
                    <label for="maleAvgWt" class="form-label">Male Avg Wt</label>
                    <input type="number" step="0.1" class="form-control" id="maleAvgWt">
                </div>
                <div class="col-md-2">
                    <label for="to" class="form-label">To</label>
                    <input type="text" class="form-control" id="to" placeholder="To">
                </div>
                <div class="col-md-2">
                    <label for="hcg" class="form-label">HCG</label>
                    <input type="number" class="form-control" id="hcg">
                </div>
                <div class="col-md-2">
                    <label for="ovaprim" class="form-label">Ovaprim</label>
                    <input type="number" class="form-control" id="ovaprim">
                </div>
            </div>
            <div class="row g-3 mt-2">
                <div class="col-md-2">
                    <label for="dom" class="form-label">DOM</label>
                    <input type="text" class="form-control" id="dom">
                </div>
                <div class="col-md-2">
                    <label for="cinnafact" class="form-label">Cinnafact</label>
                    <input type="text" class="form-control" id="cinnafact">
                </div>
                <div class="col-md-2">
                    <label for="eggWeight" class="form-label">Egg Weight (Kg)</label>
                    <input type="number" step="0.1" class="form-control" id="eggWeight">
                </div>
                <div class="col-md-2">
                    <label for="fecundityRate" class="form-label">Fecundity Rate</label>
                    <input type="text" class="form-control" id="fecundityRate">
                </div>
                <div class="col-md-2">
                    <label for="pondNo" class="form-label">Pond No</label>
                    <input type="text" class="form-control" id="pondNo">
                </div>
                <div class="col-md-2">
                    <label for="hatcheryCode" class="form-label">Hatchery Code</label>
                    <input type="text" class="form-control" id="hatcheryCode">
                </div>
            </div>
            <div class="row g-3 mt-3">
                <div class="col-md-2">
                    <label for="fryStocking" class="form-label">Fry Stocking (Million)</label>
                    <input type="number" step="0.1" class="form-control" id="fryStocking">
                </div>
                <div class="col-md-2 mt-4">
                    <button type="submit" class="btn btn-primary w-100">Insert Data</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>