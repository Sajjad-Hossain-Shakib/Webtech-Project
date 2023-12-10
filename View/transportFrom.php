<?php 
include "headerUser.php";
include "transportFormValidation.php";
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
    <link rel="stylesheet" href="../Website/css/transportForm.css">
    <title>Transport form</title>
</head>
<body>
    <div class="transport-content">
        
        <div class="transport-map">
            <div class="form">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="" class="transport-title">Enter Required Information</label>
                <input type="text" placeholder="Enter current address" name="transportForm"> <span class="error"><?php echo $transportFromValErr ?></span>
                <input type="text" placeholder="Enter transporting place" name="transportTo"> <span class="error"><?php echo $transportToValErr ?></span>
                <span class="submit-btn"> <input type="submit" class="submit"></span>
                </form>
            </div>
            
        </div>
    </div>
    <?php
?>

</body>
</html>

<?php
if($transportFromValErr == null && $transportToValErr == null){
    $transportData = fopen("transportData.txt", "w") or die("Unable to open file");
    $transportFromTxt = $_POST["transportForm"] . "\n";
    fwrite($transportData, $transportFromTxt);
    $transportToTxt = $_POST["transportTo"] . "\n" . "\n";
    fwrite($transportData, $transportToTxt);
    fclose($transportData);
    header("location: done.php");
}
?>
<?php 
include "footer.php";
?>