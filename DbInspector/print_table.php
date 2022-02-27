<?php
function print_table($connection, $query, $fields){

    $data = mysqli_query($connection, $query);

?>


<table class="table">
    <thead class="thead-dark">
    <tr>
        <?php
        foreach($fields as $field) {
            echo "<th>".$field."</th>";
        }
        ?>
    </tr>
    </thead>
    <tbody>
    <?php
    while($row = mysqli_fetch_array($data))
    {

        echo "<tr>";
        foreach ($fields as $field){
            echo"<td>".htmlspecialchars($row[$field])."</td>";
        }
        echo "</tr>";

    }
    ?>
    </tbody>

</table>
<?php }?>