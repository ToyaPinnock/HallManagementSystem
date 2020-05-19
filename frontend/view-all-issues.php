<?php
session_start();
require 'backend/classes.php';
if($_SESSION['isLogged'] === FALSE){
  header('Location: index.php');
}
?>

<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Tue Nov 26 2019 09:23:06 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5ddad863967a3b21c1340a08" data-wf-site="5dd89354578babc32818ce3f">
<head>
    <meta charset="utf-8">
    <title>Preston Hall Management System</title>
    <meta content="Admin" property="og:title">
    <meta content="width=device-width, initial-scale=1" name="viewport">


    <!--BOOTSTRAP-->
    <link rel="stylesheet" herf="/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body class="jumbotron" >
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
        <div class="container" style="padding:50px; ">
        <div class="row justify-content-md-center" >
            <div  >
                <div class="card" style="width: 100%;  padding:30px; box-shadow: 0 4px 8px 0 rgb(0, 89, 255);">
                <div class="card-body text-center" style="padding:60px;">
                <div>
                <h1 class="card-title">AZ Preston Hall Maintenance System</h3>

                <h2 class="card-subtitle mb-2 text-muted">View All User Issues</h2>




            </div>
            </div>
        </div>
    </div>
</div>
</div>



<?php

$view_all = new IssueController($data_store);
$view_all->viewAllIssues();
?>











</section>

  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>