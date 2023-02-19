<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "empresas";

$conn = mysqli_connect("localhost", "root", "", "empresas");

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

?>
