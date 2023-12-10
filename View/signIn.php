
<?php 
include "headrr.php";
?>
<?php include "validationSignIn.php" ?>
<?php include "_dbloginset.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Website/css/signIn.css">
    <title>Sign in</title>
</head>
<body>
    <div class="login-container">
        <div class="login-img">
            <div class="login-description">
                <div class="login-img-title">
                    <span class="join">Join</span>
                    <span class="the">The</span>
                    <span class="largest">Largest</span>
                    <span class="community">Community</span>
                </div>
                <div class="login-text">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt consequatur consectetur, dolore ab a similique eveniet exercitationem mollitia, debitis ducimus nam sint voluptatem esse perferendis non unde libero reprehenderit commodi. 
                </div>
            </div>
        </div> 
        <div class="login-content">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="" class="login-title">Log IN</label>
                <input type="text" placeholder="Enter your username" name = "userNameSign"> <span class="error"><?php echo $userNameSignErr; ?></span>
                <input type="password" placeholder="Enter your password" name = "passwordSign"> <span class="error"><?php ?></span> <br>
                <a href="">Forgot Your Password?</a>
                <input type="submit" class="submit-btn" value="Log IN">
                <span class="login-decision">
                    <?php
                        if($login){
                            echo "You are logged in!";
                        }
                        else{
                            echo "Incorrect name and password";
                        }
                    ?>
                </span>
                <label for="">or</label>
                <label for="" class="link">Continue with Google</label>
                <label for="" class="link">Continue with Facebook</label>
            </form>
        </div>
    </div>   
</body>
</html>
<?php 
include "footer.php";
?>