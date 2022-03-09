<?php

session_start();

include 'dbcon.php';


if(isset($_POST['register'])){
    $username = mysqli_real_escape_string($conn,$_POST['user_name']);
    $userpassword = mysqli_real_escape_string($conn,$_POST['user_password']);
    $usercpassword = mysqli_real_escape_string($conn,$_POST['user_cpassword']);
    $useremail = mysqli_real_escape_string($conn,$_POST['user_email']);

    $pass = password_hash($userpassword, PASSWORD_BCRYPT);
    $cpass = password_hash($usercpassword, PASSWORD_BCRYPT);

    $emailquery = " SELECT * FROM register_user where email='$useremail'";
    $res = mysqli_query($conn, $emailquery);

    $emailcount = @mysqli_num_rows($res);

    if($emailcount>0){
        echo "Email Already Exists";
    }else
    {
        if($userpassword === $usercpassword)
        {
            $insertquery = "INSERT INTO register_user(user_name, user_email, user_password, user_cpassword)
             VALUES ('$username','$useremail','$pass','$cpass')";
        
            $iquery = mysqli_query($conn, $insertquery);

            if($iquery)
            {
                echo "Inserted Successfully, Please Login now.";
               
            }else{
                echo "Insertion Unsuccessful";
            }
        }else
        {
           echo "Passwords don't match";
        }
    }

}

?>

<!DOCTYPE html>
<html>
   <head>
    <title>Matrimonial/Dating Website</title>
       <link rel="stylesheet" href="style.css">
       <?php include 'links/link.php' ?>
    </head>
<body>
    <div class="fresh">

        <div class="sign-up-form">
            
            <h1>Welcome to Hitch&Hugs! </h1>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method= "POST">
               <input type="text" name="user_name" class="input-box" placeholder="Enter Username" required>
               <br>
               <input type="password" name="user_password" class="input-box" placeholder="Enter Password" required>
               <br>
               <input type="password" name="user_cpassword" class="input-box" placeholder="Confirm above Password" required>
               <br>
               <input type="email" name="user_email" class="input-box" placeholder="Enter Email ID" required>
               <br>
               <input type="checkbox"><span>I Agree to the Terms and Conditions.</span>
               <br>
               <button type="submit" name="register" class="signup-btn">Sign in</button>
               <br>
                <p>Already have an account ? <a href="login.php">Log In</a></p>
                <p>Admin Can Log In from here:<a href="Adminlogin.php">Log In</a></p>
            </form>      
        </div>
    
    </div>
  
    </body>
</html>