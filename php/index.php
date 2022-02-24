<?php

include "connection.php";
$sql = "show databases;";
$query = mysqli_query($connection, $sql);
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
    while($zeile = mysqli_fetch_array($query))
    {
        echo "<tr><td>". $zeile['Database'] . "</td><td><a href='db.php?name=".$zeile['Database']."'>Go in</a></td></tr>";
    }
    ?>
</tbody>

</table>


