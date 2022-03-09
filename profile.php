<?php

    session_start();
    // initializing variables
    $fname = "";
    $lname = "";
    $email = "";
    $birthdate = "";
    $gender = "";
    $city = "";
    $state = "";
    $country = "";
    $habits = "";
    $signs = "";
    $interests = "";
    $id = 0;
    $update = false;
    
   
    $db = mysqli_connect('localhost','root','','hitch_hugs');
    
   
    
    // if save button is clicked
    if(isset($_POST['save']))
    {
       
        $fname = $_POST['user_fname'];
        $lname = $_POST['user_lname'];
        $email = $_POST['user_email'];
        $birthdate = $_POST['user_birthdate'];
        $gender = $_POST['user_gender'];
        $city = $_POST['user_city'];
        $state = $_POST['user_state'];
        $country = $_POST['user_country'];
        $habits = $_POST['user_habits'];
        $signs = $_POST['user_sign'];
        $interests = $_POST['user_interests'];


        
        $query = "INSERT INTO userprofile(user_fname, user_lname, user_email, user_birthdate, 
                    user_gender, user_city, user_state, user_country, user_habits, user_sign, user_interests) 
                    VALUES ('$fname', '$lname', '$email', '$birthdate', '$gender', '$city', '$state', '$country', '$habits', '$signs', 
                                '$interests')";
            
        mysqli_query($db, $query);
        $_SESSION['msg'] = "Detail Insertion Successful";
        header('location: profilefinal.php');
    }

    // update records
    echo "about to update";
    if(isset($_POST['update'])){
        echo "updating";
        $fname = @mysqli_real_escape_string( $_POST['user_fname']);
        $lname = @mysqli_real_escape_string($_POST['user_lname']);
        $email = @mysqli_real_escape_string( $_POST['user_email']);
        $birthdate = @mysqli_real_escape_string( $_POST['user_birthdate']);
        $gender = @mysqli_real_escape_string( $_POST['user_gender']);
        $city = @mysqli_real_escape_string( $_POST['user_city']);
        $state = @mysqli_real_escape_string( $_POST['user_state']);
        $country =@mysqli_real_escape_string( $_POST['user_country']);
        $habits = @mysqli_real_escape_string( $_POST['user_habits']);
        $signs = @mysqli_real_escape_string( $_POST['user_sign']);
        $interests = @mysqli_real_escape_string( $_POST['user_interests']);
        $id = @mysqli_real_escape_string($_POST['id']);

        $query = "UPDATE userprofile SET user_fname='$fname',user_lname= '$lname' ,user_email='$email' ,user_birthdate='$birthdate',
                            user_gender= '$gender',user_city= $city ,user_state=$state ,
                            user_country='$country' ,user_habits= '$habits' ,user_sign= '$signs' ,user_interests= '$interests' 
                            WHERE id= $id";
        
        mysqli_query($db, $query);
        echo "query running";
        $_SESSION['msg'] = "Details Updated Successfully";
        echo "update done";
        header('location: profilefinal.php');
        
    }

    // Deleting Records

    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM userprofile WHERE id=$id");
        $_SESSION['msg'] = "Record deleted!"; 
        header('location: profilefinal.php');
    }


    // Display Details
    $results = mysqli_query($db, "SELECT * FROM userprofile");



?>