<?php 

$server = "sql212.epizy.com";
$user = "epiz_32610816";
$pass = "NTlim6agBv";
$database = "epiz_32610816_sachindb";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed:')</script>");
}

?>
