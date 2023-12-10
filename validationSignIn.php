<?php 
///Variable declaration
$userNameSign = null;

///Error variable declaration
$userNameSignErr = null;

if (empty($_POST["userNameSign"])) {  
    $userNameSignErr = "Username is required";  
} else {  
    $userNameSign = $_POST["userNameSign"];    
    if (!preg_match("/^[a-zA-Z ]*$/",$userNameSign)) {  
        $userNameSignErr = "Only alphabets and white space are allowed";  
    }
}

?>