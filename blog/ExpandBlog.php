<?php

include("../config.php");
session_start();
$i=$_SESSION['id'];
?>


<!DOCTYPE html>
<html lang="en">

<head>

<title> Blog -BINAY DAHAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Binay Dahal - Personal portfolio and blog Website. Contact me to work together, I do graphics designing, editing, video editing, software development and more. contact ratedbinaya@gmail.com info@binaydahal.com.np">
  <meta name="keywords" content="Binay Dahal, Ratedbinay, theratedbinay, website, blog, portfolio, nepali, designer, freelancer, developer, software engineer, coder">
  <meta name="author" content="Binay Dahal">
  <link rel="shortcut icon" type="image/png" href="../assets/img/favicon-binay.png" />
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">
  <style>
    .zoom {
      padding: 0px;
      background-color: transparent;
      transition: transform .2s;
      /* Animation */
      width: 250px;
      height: 20px;
      margin: 5px left;

    }

    .zoom:hover {
        width: 500px;
      height: 40px;
      transform: scale(1.5);
      padding: 10px;
      /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }
  </style>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
    <a class="device-notification--logo zoom" href="../index.php">
      <img src="../assets/img/logo.png" alt="logo">
      Binay Dahal - Blog
    </a>
     
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Home
        <i class="fas fa-bars"></i>
      </button>
     
    </div>
  </nav>


  <?php
//echo $i;
$Titlequery=mysqli_query($con, "Select Title From tblblog Where SN='$i' ");
$Title=mysqli_fetch_array($Titlequery);


$SubTitlequery=mysqli_query($con, "Select SubTitle From tblblog Where SN='$i' ");
$SubTitle=mysqli_fetch_array($SubTitlequery);


$Datequery=mysqli_query($con, "Select Date From tblblog Where SN=$i");
$Date=mysqli_fetch_array($Datequery);

$imagequery=mysqli_query($con, "Select Image From tblblog Where SN=$i");
$Image=mysqli_fetch_array($imagequery);

$Detailsquery=mysqli_query($con, "Select Details From tblblog Where SN=$i");
$Details=mysqli_fetch_array($Detailsquery);

?>


  <!-- Page Header -->
  <header class="masthead" >
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
           
          <h1><?php echo $Title['Title']; ?></h1>
          
            <h2 class="subheading"><?php echo $SubTitle['SubTitle']; ?></h2>
            
            <span class="meta">Posted by
              <a href="../index.php">Binay Dahal</a>
              on <?php echo $Date['Date']; ?></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          
        <?php 
        
        //echo '<img  height="250"  src="data:image/jpeg;base64,'.base64_encode( $Image['Image'] ).'"/>';
       echo" \r\n ";
        echo $Details['Details']; 
        
        ?>

        </div>
      </div>
    </div>
  </article>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="http://www.twitter.com/ratedbinay">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="http://www.facebook.com/binay.d">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="http://www.instagram.com/ratedbinay">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="http://www.youtube.com/theratedbinay">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-youtube fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="http://www.github.com/ratedbinay">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Binay Dahal 2019</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>


