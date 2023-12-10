<?php
include "validation.php";
include "_dbconnect.php";
$showErr = false;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $usernameDb = $_POST["userName"];
    $passwordDb = $_POST["password"];
    $confirmPasswordDB = $_POST["confirmPassword"];

    if($firstNameErr == null && $emailErr == null && $phoneErr == null){
        if($passwordDb == $confirmPasswordDB){
            $sql = "INSERT INTO `userss3034` (`username`, `password`, `date`) VALUES ('$usernameDb', '$passwordDb', current_timestamp())";
            $result = mysqli_query($connectDb, $sql);
        }
        else{
            $showErr = true;
        }
        
    }
    
    
}