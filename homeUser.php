<?php 
include "headerUser.php";
?>
<?php
session_start();
if($_SESSION["logStatus"] != true){
    header("location: signIn.php");
}

$cookie_name = $_SESSION["userNameSession"];
$cookie_value = $_SESSION["logStatus"];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/" );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Website/css/userHome.css">
    <title>User Home</title>
</head>
<body>
    <div class="shift-and-transport">
        <button class="shifting" onclick="location.href='shiftForm.php'">
            <span class="shift">
                SHIFT
            </span>
            <div class="shift-text">
                Shift within Dhaka or area.
            </div>
        </button>
        <div class="line">

        </div>
        <div class="transporting" onclick="location.href='transportFrom.php'">
            <span class="transport">
                TRANSPORT
            </span>
            <div class="transport-text">
                Transport your things outside Dhaka.
            </div>
        </div>
    </div>
</body>
</html>

<?php 
include "footer.php";
?>
