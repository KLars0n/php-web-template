<?php
include "connection.php";
?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addPersonForm.php">Add Person</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addCountryForm.php">Add Country</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="addDistrictForm.php">Add District</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="search.php">Search</a>
            </li>
        </ul>
    </div>
</nav>


<?php
$query = "select * from country";
$data = mysqli_query($connection, $query);
?>
<form action="addDistrict.php" style="width: 500; margin-left: 25; margin-top: 50" method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>District Name</label>
            <input class="form-control" name="name" placeholder="Burgenland">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label>Country</label>
            <select class="form-control" name="countryId">
                <option selected>Choose...</option>
                <?php
                while($row = mysqli_fetch_array($data))
                {
                    echo "<option name='countryId' value='".$row['id']."'>".$row['name']."</option>";
                }
                ?>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</body>
