<?php 
include "headerUser.php";
include "shiftFormValidation.php";
?>

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
    <link rel="stylesheet" href="../Website/css/shiftForm.css">
    <title>Shift form</title>
</head>
<body>
    <div class="shift-content">
        
        <div class="shift-map">
            <div class="form">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="" class="shift-title">Enter Required Information</label>
                <input type="text" placeholder="Enter current address" name="shiftForm"> <span class="error"><?php echo $shiftFromValErr ?></span>
                <input type="text" placeholder="Enter shifting place" name="shiftTo"> <span class="error"><?php echo $shiftToValErr ?></span>
                <span class="submit-btn"> <input type="submit" class="submit"></span>
                </form>
            </div>
            
        </div>
    </div>
    
</body>
</html>

<?php
if($shiftFromValErr == null && $shiftToValErr == null){
    $shiftData = fopen("shiftData.txt", "w") or die("Unable to open file");
    $shiftFromTxt = $_POST["shiftForm"] . "\n";
    fwrite($shiftData, $shiftFromTxt);
    $shiftToTxt = $_POST["shiftTo"] . "\n" . "\n";
    fwrite($shiftData, $shiftToTxt);
    fclose($shiftData);

    header("location: done.php");

}
?>
<?php 
include "footer.php";
?>