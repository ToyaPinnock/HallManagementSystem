<?php
session_start();

require 'backend/classes.php';
#echo "<script>console.log('From old home: " . $_SESSION['isLogged'] ."')</script>";
if($_SESSION['isLogged'] === FALSE){
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Sun Nov 24 2019 22:40:25 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5dd89354578bab02bf18ce40" data-wf-site="5dd89354578babc32818ce3f">
<head>
    <meta charset="utf-8">
    <title>Preston Hall Management System</title>
    <meta content="Admin" property="og:title">
    <meta content="width=device-width, initial-scale=1" name="viewport">


    <!--BOOTSTRAP-->
    <link rel="stylesheet" herf="/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class=" text-center">
<!--NAV BAR-->
<section>
    <div class="container">
        <nav class="navbar navbar-expand-lg fixed-top  navbar-dark bg-dark">
            <span class="navbar-brand mb-0 h1">AZPrestonHallManagement</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="confirmation.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Logout <span class="sr-only">(current)</span></a>
                </li>
            </div>
        </nav>
    </div>
</section>
<section class="jumbotron" >
        <div class="container" style="padding:50px; ">
        <div class="row justify-content-md-center" >
            <div  >
                <div class="card" style="width: 85%; height:30rem; padding:30px; box-shadow: 0 4px 8px 0 rgb(0, 89, 255);">
                <div class="card-body" style="padding:60px;">
                <div>
                <h1 class="card-title">AZ Preston Hall Maintenance System</h3>

                <h2 class="card-subtitle mb-2 text-muted">"Pursuing Excellence"</h2>
                <br>
                <input type="text"  maxlength="256" name="isseue-id" data-name="isseue id" placeholder="Enter issue number" id="feedb-load" style="width: 210px; padding:10px;">
                <a id="load-feedback" class="btn btn-lg btn-primary btn-block">Load Feedback</a>

            </div>
            </div>
        </div>
    </div>
</div>
</div>

</section>

<section class="container-fluid">

    <div  class="row justify-content-md-center" >
        <div class=" " style="padding:20px;">
            <div class="card" style="width: 18rem;">
                <img src="https://media.origaudiopromo.com/EPOIVw-UfdyO1LA/w:300/h:219/q:75/https://origaudiopromo.com/wp-content/uploads/2019/07/space-background-website.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="log-issue.php" id="log-issue" >
                    <h3 class="card-text">Log new <br> issue</h3>
                </a>

            </div>
            </div>
        </div>
        <div class="" style="padding:20px;">
            <div class="card" style="width: 18rem;">
                <img src="https://media.origaudiopromo.com/EPOIVw-UfdyO1LA/w:300/h:219/q:75/https://origaudiopromo.com/wp-content/uploads/2019/07/space-background-website.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <a  href=" track-issue.php "id="track-issue" >
                    <h3 class="card-text">View All Your Issues</h3>
                </a>

            </div>
            </div>
        </div>
        <div class="" style="padding:20px;">
            <div class="card" style="width: 18rem;">
                <img src="https://media.origaudiopromo.com/EPOIVw-UfdyO1LA/w:300/h:219/q:75/https://origaudiopromo.com/wp-content/uploads/2019/07/space-background-website.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="book-personnel.php" >
                    <h3 class="card-text">Schedule<br>Maintenance</h3>
                </a>
            </div>
            </div>
        </div>
        <div class="" style="padding:20px;">
            <div class="card" style="width: 18rem;">
                <img src="https://media.origaudiopromo.com/EPOIVw-UfdyO1LA/w:300/h:219/q:75/https://origaudiopromo.com/wp-content/uploads/2019/07/space-background-website.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="give-feedback.php">
                    <h3 class="card-text">Give <br> Feedback</h3>
                </a>
            </div>
            </div>
        </div>
        <div class="" style="padding:20px;">
            <div class="card" style="width: 18rem;">
                <img src="https://media.origaudiopromo.com/EPOIVw-UfdyO1LA/w:300/h:219/q:75/https://origaudiopromo.com/wp-content/uploads/2019/07/space-background-website.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="../calendar/washroom.php">
                    <h3 class="card-text">Washroom Schedule</h3>
                </a>
            </div>
            </div>

    </div>
</section>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="app.js" type="text/javascript"></script>
</body>
</html>
