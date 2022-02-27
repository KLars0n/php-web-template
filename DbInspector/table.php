<?php
include 'print_table.php';
include "connection.php";
$name = $_GET['name'];
$db = $_GET['db'];
$sql = "use $db";
mysqli_query($connection, $sql);

?>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<?php print_table($connection, "describe $name", array("Field", "Type")); ?>
