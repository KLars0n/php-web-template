<?php
include "connection.php";
include "print_table.php";
$name = $_POST['name'];


$sql = "INSERT INTO country (name) VALUES ('".$name."');";
$query = mysqli_query($connection, $sql);
if($query){
?>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="addPersonForm.php">Add Person</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="addCountryForm.php">Add Country</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="addDistrictForm.php">Add District</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="search.php">Search</a>
                </li>
            </ul>
        </div>
    </nav>

<div class="alert alert-success" role="alert" style="width: 400; margin-left: 35%; margin-top: 20">
    Added Country successfuly
</div>
    <div style="margin: 30">
    <?php print_table($connection, "select * from country", array("id","name")); ?>
    </div>
<?php }else{ ?>
    <div class="alert alert-danger" role="alert">
        Something went wrong
    </div>
<?php } ?>