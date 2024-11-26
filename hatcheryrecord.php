<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breeder Record Table Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h2 class="text-center mb-4">Breeder Record Table Form</h2>
        <form>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>SR. No</th>
                            <th>Date</th>
                            <th>From</th>
                            <th colspan="3" class="text-center">Breeder Female</th>
                            <th colspan="3" class="text-center">Breeder Male</th>
                            <th>To</th>
                            <th>HCG</th>
                            <th>Ovaprim</th>
                            <th>DOM</th>
                            <th>Cinnafact (CC)</th>
                            <th>Egg Weight (Kg)</th>
                            <th>Fecundity Rate</th>
                            <th>Pond No</th>
                            <th>Fry Stocking (Million)</th>
                            <th>Hatchery Code</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Pcs</th>
                            <th>Wt (kg)</th>
                            <th>Avg Wt</th>
                            <th>Pcs</th>
                            <th>Wt (kg)</th>
                            <th>Avg Wt</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" class="form-control" name="sr_no" placeholder="SR. No"></td>
                            <td><input type="date" class="form-control" name="date"></td>
                            <td><input type="text" class="form-control" name="from" placeholder="From"></td>
                            <td><input type="number" class="form-control" name="female_pcs" placeholder="Pcs"></td>
                            <td><input type="number" step="0.01" class="form-control" name="female_wt" placeholder="Wt (kg)"></td>