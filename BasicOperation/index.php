<?php
include "connection.php";

$sql = "show tables";
$query = mysqli_query($connection, $sql);
$column = 'Tables_in_thisisit';
?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addPersonForm.php">Add Person</a>
            </li>
            <li class="nav-item">
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

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<div style="margin: 30">
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Index</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <?php
    while($row = mysqli_fetch_array($query))
    {
        echo "<tr><td>". $row[$column] . "</td><td><a href='table.php?name=".$row[$column]."'>Go in</a></td></tr>";
    }
    ?>
    </tbody>

</table>
</div>
</body>