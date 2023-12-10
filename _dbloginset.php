<?php
include("_dbconnect.php");
$login = false;
$showErrLogIn = false;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $userNameSignDb = $_POST["userNameSign"];
    $passworSigndDb = $_POST["passwordSign"];
    $sqlSign = "Select * from userss3034 where username = '$userNameSignDb' AND password = '$passworSigndDb'";
    $resultSignIn = mysqli_query($connectDb, $sqlSign);
    $number = mysqli_num_rows($resultSignIn);
    if($number == 1){
        $login = true;
        if($login){
            
            session_start();
            $_SESSION["logStatus"] = true;
            $_SESSION["userNameSession"] = $userNameSignDb;
            $_SESSION["shiftSessionFrom"] = "Dhaka";
            $_SESSION["shiftSessionTo"] = null;
            header("location: homeUser.php");
        }
        else{
            echo "Incorrect name and password";
        }
    }
    else{
        $showErrLogIn = true;
    }
    
}

?>