<?php
session_start();
if($_SESSION["logStatus"] != true){
    header("location: signIn.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Done</title>
</head>
<body>
    <h1>Done</h1>

    <a href="../Website/homeUser.php">Go to User</a>

</body>
</html>