<?php
$server = "localhost";
$user = "root";
$pass = "password";
$database = "sys";

$connection = mysqli_connect($server, $user, $pass)
or die ("Verbindung konnte nicht hergestellt werden");

mysqli_select_db($connection, $database)
or die("Fehler beim Zugriff auf die gewünschte Datenbank");

