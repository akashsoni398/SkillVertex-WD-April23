<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpasswd = "";
$dbdatabase = "music_hub";

$conn = mysqli_connect($dbhost,$dbuser,$dbpasswd,$dbdatabase);

if(!$conn) {
    $errmsg = "Database error";
}

session_start();
$errmsg = null;

?>
