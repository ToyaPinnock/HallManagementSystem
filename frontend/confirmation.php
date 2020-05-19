<?php
session_start();
require 'backend/classes.php';
if($_SESSION['isLogged'] === FALSE){
  header('Location: index.php');
}
?>
<!DOCTYPE html>

<html>


<head>
    <meta charset="utf-8">
    <title>Preston Hall Management System</title>
    <meta content="Admin" property="og:title">
    <meta content="width=device-width, initial-scale=1" name="viewport">


    <!--BOOTSTRAP-->
    <link rel="stylesheet" herf="/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="jumbotron text-center">
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
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                </div>
            </nav>
        </div>
    </section>
    <section class="jumbotron" >
<div id="log-in-card" class="container"  style="padding:50px; " >
<div class="row justify-content-md-center">
        <div class="card" style="width: 80%; height:30rem; padding:30px; box-shadow: 0 4px 8px 0 rgb(0, 89, 255);">
        <div class="card-body" style="padding:60px;" >
            <div >
            <h1 class="card-title">Thank you for using the</h1>

            <h1 class="card-subtitle mb-2 text-muted">AZ Preston Hall Maintenance System</h1>
            <h5 class="card-text">Data collected here will only be used to improve living conditions on AZ Preston Hall</h5>
            <a id="continue-button" href="old-home.php" class="btn btn-lg btn-primary btn-block">Continue</a>
            </div>
        </div>
    </div>
</div>
</div>

</section >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="app.js" type="text/javascript"></script>
</body>
</html>