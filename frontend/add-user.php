<?php
session_start();
require 'backend/classes.php';
if($_SESSION['isLogged'] === FALSE){
  header('Location:index.php');
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

<body class="jumbotron " >
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
                    <a class="nav-link" href="admin.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Logout <span class="sr-only">(current)</span></a>
                </li>
            </div>
        </nav>
    </div>
</section>

<section class=" container-fluid" >
<div class="row justify-content-md">

        <div style="padding:60px;">
        <div class="card" style=" height:45rem;  box-shadow: 0 4px 8px 0 rgb(0, 89, 255);">
            <div class="card-body" style="padding-top:40px;" >
                <div >
                <h1 class="card-title">AZ Preston Hall Maintenance System</h1>

                <h2 class="card-subtitle mb-2 text-muted">Add User</h2>
                <br>

                <form class="form-signin" id="email-form" name="email-form" data-name="Email Form">

                        <label for="name">ID number</label>
                        <input type="text"  maxlength="256" name="ID-number" data-name="ID number" placeholder="Enter user id number" style="width:100%; padding:10px;" id="ID-number" required>
                        <br>
                        <label for="name">Cluster Name</label>
                        <select id="cluster" style="width:100%; padding:10px;" name="cluster" required="" data-name="cluster" class="w-select">
                            <option value="AMSTERDAM">Amsterdam</option>
                            <option value="BELGIQUE">Belgique</option>
                            <option value="BURGPLATZ">Burgplatz</option>
                            <option value="EINHEIT">Einheit</option>
                            <option value="ITALIA">Italia</option>
                            <option value="LA MAISON">La Maison</option>
                            <option value="LOS MATADORES">Los Matadores</option>
                            <option value="OLIMPIA">Olimpia</option>
                            <option value="PORTO SANTO">Porto Santo</option>
                            <option value="SHERWOOD MANOR">Sherwood Manor</option>
                            <option value="REGENSEN">Regensen</option>
                            <option value="SHAMROCK">Shamrock</option>
                            <option value="VIKINGS">Vikings</option>
                        </select>
                        <br>
                        <label for="household">Household</label>
                        <input type="text" style="width:100%; padding:10px;" maxlength="256" name="household" data-name="household" placeholder="Enter user household" id="household" required="">
                        <br>
                        <label for="Issue-description-2">Room Number</label>
                        <input type="text" style="width:100%; padding:10px;" maxlength="256" name="Issue-description" data-name="Issue description" placeholder="Enter user room number" id="Issue-description" required="">
                        <br>

                        <h6>All Fields are Mandatory</h6>
                        <input id="add-user" type="submit"class="btn btn-lg btn-primary btn-block" value="Submit" data-wait="Please wait..." class="btn-filled blue w-button">


                </form>

                </div>
        </div>

    </div>
</div>
<div class="container" style="width:40%; height:200px; padding-top:200px; "><img src="https://media.origaudiopromo.com/EPOIVw-UfdyO1LA/w:300/h:219/q:75/https://origaudiopromo.com/wp-content/uploads/2019/07/space-background-website.jpeg" class="card-img-top" alt="..."   ></div>
</div>

</section>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="azph_hms.js" type="text/javascript"></script>
</body>




</body>
</html>
