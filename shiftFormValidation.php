<?php
$shiftFromVal = $shiftToVal = null;
$shiftFromValErr = $shiftToValErr = null;

if(empty($_POST["shiftForm"])){
    $shiftFromValErr = "*From address requird";
}else{
    $shiftFromVal = $_POST["shiftForm"];
}

if(empty($_POST["shiftTo"])){
    $shiftToValErr = "*To address requird";
}else{
    $shiftToVal = $_POST["shiftTo"];
}

?>