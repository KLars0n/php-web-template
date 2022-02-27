<?php

include "connection.php";
$name = $_GET['name'];
$sql = "use $name";
mysqli_query($connection, $sql);

$sql = "show tables";
$query = mysqli_query($connection, $sql);
$column = 'Tables_in_'.$name;
?>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
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
        echo "<tr><td>". $row[$column] . "</td><td><a href='table.DbInspector?name=".$row[$column]."&db=".$name."'>Go in</a></td></tr>";
    }
    ?>
    </tbody>

</table>
