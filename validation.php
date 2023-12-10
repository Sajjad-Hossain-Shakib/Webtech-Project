<?php
///Declaration of variables
$firstName = $phone =  $userName = $password = $email = null;
///Declaration of error variables
$firstNameErr = $phoneErr = $userNameErr = $passwordErr = $emailErr = null;

///First name validation
if (empty($_POST["firstName"])) {  
    $firstNameErr = "Name is required";  
} else {  
    $firstName = $_POST["firstName"];    
    if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {  
        $firstNameErr = "Only alphabets and white space are allowed";  
    }
}

//Number Validation  
if (empty($_POST["phone"])) {  
    $phoneErr = "Mobile no is required";  
} else {  
    $phone = $_POST["phone"];  
    // check if mobile no is well-formed  
    if (!preg_match ("/^[0-9]*$/", $phone) ) {  
    $phoneErr = "Only numeric value is allowed.";  
    }  
//check mobile no length should not be less and greator than 10  
if (strlen ($phone) != 11) {  
    $phoneErr = "Mobile no must contain 10 digits.";  
    }  
}

///email validation
if (empty($_POST["email"])) {  
    $emailErr = "Email is required";  
} else {  
    $email = $_POST["email"];  
    // check that the e-mail address is well-formed  
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
        $emailErr = "Invalid email format";  
    }  
}   

///username validation
if (empty($_POST["userName"])) {  
    $userNameErr = "Name is required";  
} else {  
    $userName = $_POST["userName"];    
    if (!preg_match("/^[a-zA-Z ]*$/",$userName)) {  
        $userNameErr = "Only alphabets and white space are allowed";  
    }
}
?>