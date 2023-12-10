<?php
$transportFromVal = $transportToVal = null;
$transportFromValErr = $transportToValErr = null;

if(empty($_POST["transportForm"])){
    $transportFromValErr = "From address requird";
}else{
    $transportFromVal = $_POST["transportForm"];
}

if(empty($_POST["transportTo"])){
    $transportToValErr = "To address requird";
}else{
    $transportToVal = $_POST["transportTo"];
}



?>