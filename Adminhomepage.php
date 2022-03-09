<?php

session_start();

if(!isset($_SESSION['username'])){
    echo "You're Logged Out";
    header('location: login.php');
}

include ('dbcon.php');
include ('function.php');
?>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
</head>    
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="images/NAVBARLOGO.png" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
       <li class="nav-item active">
       <a class="nav-link" href="Adminhomepage.php">Home <span class="sr-only">(current)</span></a>
       </li>
       <li class="nav-item">
       <a class="nav-link" href="admin.php">Database</a>
       </li>
       <li class="nav-item">
       <a class="nav-link" href="about%20us.html">About Us</a>
       </li>
       <li class="nav-item">
       <a class="nav-link" href="logout.php">Log Out</a>
       </li>
     </ul>
    </nav>
    <div id="slides" class="carousel slide" data-ride="caraousel">
      <ul class="carousel-indicators">
       <li data-target="#slides" data-slide-to="0" class="active"></li> 
       <li data-target="#slides" data-slide-to="1" ></li>    
       <li data-target="#slides" data-slide-to="2" ></li>    
       <li data-target="#slides" data-slide-to="3" ></li>    
       <li data-target="#slides" data-slide-to="4" ></li>       
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="images/lgbtflag.jpg" class="d-block w-100" alt="lgbt"> 
        <div class="carousel-caption1">
            <h1> Hello <?php echo $_SESSION['username']; ?></h1>
            <h1 class="display-2">Welcome to Hitch & Hugs</h1>
            <h3>Where nothing overpowers "Love"</h3>
        </div>
        </div>
        <div class="carousel-item">
        <img src="images/lgbt.jpg" class="d-block w-100" alt="parishelen"> 
        <div class="carousel-caption">   
            <h1 class="display-2">"LGBT"- Life Gets Better Together.</h1>
            <h3>“Nature made a mistake, which I have corrected.”</h3>
            <h3>“The Lord is my Shepherd and he knows I’m gay.”</h3>
        </div>
        </div>
        <div class="carousel-item">
        <img src="images/parishelen.jpg" class="d-block w-100" alt="tajmahal">
        <div class="carousel-caption">
            <h1 class="display-2">Paris & Helen</h1>
            <h3>"The face that launched a thousand ships"</h3>
            <h4>Helen of Troy is considered one the most beautiful women in all literature.</h4>
            <h4>She was married to Menelaus, king of Sparta.</h4>
            <h4>Paris, son of King Priam of Troy, fell in love with Helen and abducted her, taking her back to Troy. The Greeks assembled a great army, led by Menelaus's brother, Agamemnon, to retrieve Helen.</h4>
        </div>
        </div>
        <div class="carousel-item">
        <img src="images/tajmahal.jpg" class="d-block w-100" alt="parishelen"> 
        <div class="carousel-caption">
            <h1 class="display-2">Shahjahan & Mumtaaz</h1>
            <h4>The promise Shahjahan made to his dead wife- Begum Mumtaz Mahal,that when she dies he would make the tomb of her grave so big and amazing that the world would lose a breath looking at the magnificent beauty, here is when he thought to start the work for his dream "Taj Mahal".</h4>
        </div>
        </div>
        <div class="carousel-item">
        <img src="images/got3.jpg" class="d-block w-100" alt="got">
        <div class="carousel-caption">
            <h1 class="display-2">Jon Snow & Danerys Targaryen</h1>
            <h3>"Game of thrones"- An American fantasy drama television series created by David Benioff and D. B. Weiss for HBO.</h3>
            <h3>The series showcased an amazing relationship between Danerys Targaryen & Jon Snow (Aegon Targaryen) who also happened to be her Nephew.</h3>
        </div>
        </div>
      </div>
        <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a> 
     </div>


    
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>