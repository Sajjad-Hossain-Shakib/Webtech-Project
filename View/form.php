<?php 
include "headrr.php";
include "validation.php"; 
include "_dbset.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Website/css/signUp.css">
    <title>Form</title>
</head>

<body>
    <div class="sign-up">
        <div class="sign-up-image">
            <div class="sign-up-image-content">
                <div class="one-click">
                    <span class="one">ONE</span> <span class="click">CLICK</span>
                </div>
                <span class="one-click-text">In just one click, have a wonderful moving experince witout any tension and hesitation. Move out from anywhere and we are gonna back you up.</span>
            </div>
        </div>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <span class="join-move">Join Move</span>
            <input type="text" placeholder="Enter your name" name = "firstName"> <span class="error"><?php echo $firstNameErr; ?></span> <br>

            <input type="text" placeholder="Enter your phone number" name = "phone"> <span class="error"><?php echo $phoneErr; ?></span> <br>

            <input type="text" placeholder="Enter your email" name = "email"> <span class="error"><?php echo $emailErr; ?></span> <br>

            <input type="text" placeholder="Enter your username" name = "userName"> <span class="error"><?php echo $userNameErr; ?></span> <br>

            <input type="text" placeholder="Set your password" name = "password"> <span class="error"><?php echo $passwordErr; ?></span> <br>

            <input type="text" placeholder="Type again to confirm" name = "confirmPassword"> <br>

            <input type="submit" class="submit" value="SUBMIT">
        </form>
    </div>

    <?php 
    if($showErr){
        echo "<div>Your passwords do not match</div>";
    }
    ?>

    <?php 
        if($firstNameErr == null && $phoneErr == null){
            echo $firstName;
            echo $lastName;
            echo $phone;
        }
    ?>
</body>
</html>

<?php 
include "footer.php";
?>