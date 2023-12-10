<?php
$usernameDb = "root";
$passwordDb = "";
$databaseDb = "userss3034";
$serverDb = "localhost";

$connectDb = mysqli_connect($serverDb, $usernameDb, $passwordDb, $databaseDb);

if(!$connectDb){
    die("Error" . mysqli_connect_error());
}
?>