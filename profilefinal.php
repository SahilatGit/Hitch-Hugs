<?php

include 'navbar.php'; 
include 'dbcon.php';
include 'profile.php';

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $rec = mysqli_query($db, "SELECT  * FROM userprofile where id=$id");
    $record = mysqli_fetch_array($rec);
    $fname = $record['user_fname'];
    $lname = $record['user_lname'];
    $email = $record['user_email'];
    $birthdate = $record['user_birthdate'];
    $gender = $record['user_gender'];
    $city = $record['user_city'];
    $state = $record['user_state'];
    $country = $record['user_country'];
    $habits = $record['user_habits'];
    $signs = $record['user_sign'];
    $interests = $record['user_interests'];
    $id = $record['id'];
}


?>
<html>
<head>
    <title>My Account</title>
    <link rel="stylesheet" href="profilepage.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
</head>    
<body>
    <h1>My Profile </h1>
    <?php
        if(isset($_SESSION['msg'])): ?>
            <div class="msg">
            <?php
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            ?>
            </div>
    <?php endif ?>

    <div class = "register">
    <form  action="profile.php" method= "POST" id="register">
    <input type="hidden" name = "id" value="<?php echo $id; ?>">
        <label>First Name: </label>
        <input type="text"  name="user_fname" size="35" placeholder= "Enter your Firstname"  value="<?php echo $fname;?>"> &nbsp;&nbsp;
        <label>Last Name: </label>
        <input type="text" name="user_lname" size="35" placeholder= "Enter your Lastname" value="<?php echo $lname; ?>"> <br><br>
        <label>Email ID: </label>
        <input type="email" name="user_email" size="50" placeholder= "Enter your Email" value="<?php echo $email; ?>"> <br><br>
        <label>Birthdate: </label>
        <input type="date" name="user_birthdate" placeholder= "[DD-MM-YYYY]" value="<?php echo $birthdate; ?>"> &nbsp;&nbsp;
        <label>Gender: </label>
        <input type="text" name="user_gender" size="20" placeholder= "Enter your Gender" value="<?php echo $gender; ?>"> <br><br>
        <label>City: </label>
        <input type="text" name="user_city" size="25" placeholder= "Enter your City" value="<?php echo $city; ?>"> &nbsp;&nbsp;&nbsp;&nbsp;
        <label>State: </label>
        <input type="text" name="user_state"  size="25" placeholder= "Enter your State" value="<?php echo $state; ?>"> <br><br>
        <label>Country: </label>
        <input type="text" name="user_country"  size="25" placeholder= "Enter your Country" value="<?php echo $country; ?>"> &nbsp;&nbsp;&nbsp;&nbsp;
        <label>Habits:  </label>
        <input type="text" name="user_habits" size="40" placeholder= "Drink or Smoke ?" value="<?php echo $habits; ?>"> <br><br>
        <label>Star-Sign: </label>
        <input type="text" name="user_sign"  size="20" placeholder= "Enter your Star-Sign" value="<?php echo $signs; ?>"> &nbsp;&nbsp;
        <label>Interests: </label>
        <input type="text" name="user_interests"  size="40" placeholder= "Enter your Interests" value="<?php echo $interests; ?>"> <br><br>
        <?php if ($update == false):?>
            <button type="submit" class= "btn btn-primary" name="save" >Save </button>
        <?php else:?>
            <button type="submit" class= "btn btn-primary" name="update" >Update </button>
        <?php endif ?>
    
    </form>
    </div>
   
    <?php $results = mysqli_query($db, "SELECT * FROM userprofile"); ?>

        <table>
            <thead>
                <tr>
                    <th>Firstname:</th>
                    <th>Lastname:</th>
                    <th>Email ID:</th>
                    <th>Birthdate:</th>
                    <th>Gender:</th>
                    <th>City:</th>
                    <th>State:</th>
                    <th>Country:</th>
                    <th>Habits :</th>
                    <th>Star-Sign:</th>
                    <th>Interests:</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            
            <?php while ($row = @mysqli_fetch_array($results)) { ?>
                <tr>
                    <td><?php echo $row['user_fname']; ?></td>
                    <td><?php echo $row['user_lname']; ?></td>
                    <td><?php echo $row['user_email']; ?></td>
                    <td><?php echo $row['user_birthdate']; ?></td>
                    <td><?php echo $row['user_gender']; ?></td>
                    <td><?php echo $row['user_city']; ?></td>
                    <td><?php echo $row['user_state']; ?></td>
                    <td><?php echo $row['user_country']; ?></td>
                    <td><?php echo $row['user_habits']; ?></td>
                    <td><?php echo $row['user_sign']; ?></td>
                    <td><?php echo $row['user_interests']; ?></td>
                    <td>
                        <a href="profilefinal.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
                    </td>
                    <td>
                        <a href="profile.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>