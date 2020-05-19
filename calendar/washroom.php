<?php
session_start();
require '../frontend/backend/classes.php';
#echo "<script>console.log('From old home: " . $_SESSION['isLogged'] ."')</script>";
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
    <link rel="stylesheet" type='text/css' href='./themes/standard.css'/>
	 <style type="text/css">
	.mfp-list-view.standard .mfp-header-group {
	  width: auto;
	  padding: 0px 5px;
	}
	</style>

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
                    <a class="nav-link" href="../frontend/old-home.php">Home <span class="sr-only">(current)</span></a>
                </li>
            </div>
        </nav>
    </div>
</section>
<section  class=" container-fluid" >
<div class="row justify-content-md">
    <div >
        <div style="padding:60px;">
        <div  class="card" style=" height:30rem;  box-shadow: 0 4px 8px 0 rgb(0, 89, 255);">
            <div class="card-body" style="padding:30px;" >
                <div class="text-center">
                <h1 class="card-title">AZ Preston Hall Maintenance System</h1>

                <h2 class="card-subtitle mb-2 text-muted">Schedule Washroom Time</h2>
                <br>
                <p class="card-text" style="font-size:30px; font-style:italic;">*Washroom is open from 6:00am to 12:00am <br>
                *Times are to be schedule in that period<br>
                *Enter ID Numbers in Subject slot</p>
        </div>
        </div>
    </div>
    <div  id="content">
      <div style=" width: 100%; height: 900px; padding-top:100px;">
        <div  id="calendar" style="height: 100%; width:100%"></div>
      </div>
    </div>
</div>
</section>
    <script data-main="JS/main.js" src="JS/require.js"></script>
  </body>
</html>
