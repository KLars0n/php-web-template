<?php

include "connection.php";
$name = $_GET['name'];
$db = $_GET['db'];
$sql = "use $db";
mysqli_query($connection, $sql);


$sql = "select * from $name";
$data = mysqli_query($connection, $sql);

$sql = "describe $name";
$fieldqu = mysqli_query($connection, $sql);
$fields = mysqli_fetch_array($fieldqu)
?>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <?php
        foreach($fields as $field)
        {
            echo "<th>". $field . "</th>";
        }
        ?>
    </tr>
    </thead>
    <?php
    while($row = mysqli_fetch_array($data))
    {
        $count = 0;
        echo "<tr>";
        while($count < $field->num_rows)
        {
            echo "<td>". $row[] . "</td>";
            $count++;
        }
        echo "</tr>";

    }
    ?>
    </tbody>

</table>
