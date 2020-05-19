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
                    <a class="nav-link" href="old-home.php">Home <span class="sr-only">(current)</span></a>
                </li>
            </div>
        </nav>
    </div>
</section>

<section class=" container-fluid" >
<div class="row justify-content-md">

        <div style="padding:60px;">
        <div class="card" style=" height:50rem;  box-shadow: 0 4px 8px 0 rgb(0, 89, 255);">
            <div class="card-body" style="padding:30px;" >
                <div >
                <h1 class="card-title">AZ Preston Hall Maintenance System</h1>

                <h2 class="card-subtitle mb-2 text-muted">Log Issue</h2>
                <br>

                <form class="form-signin" id="email-form" name="email-form" data-name="Email Form" class="w-clearfix">

                        <input id="IDapp" type="text" class="w-input" maxlength="256" placeholder="id number" required="" style="width:100%; padding:20px;">
                        <br>
                        <label for="name">Select your cluster: </label>
                        <select id="cluster" name="cluster" required="" data-name="cluster" class="w-select"style="width:100%; padding:20px;">
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
                        <label for="name">Issue category: </label>
                        <select id="classification" name="classification" required="" data-name="classification" class="w-select" style="width:100%; padding:20px;">
                        <option value="ADMINISTRATIVE">Administrative</option><option value="APPLIANCE">Appliance</option>
                        <option value="ELECTRICAL">Electrical</option>
                        <option value="FURNITURE">Furniture</option>
                        <option value="INFRASTRUCTURE">Infrastructure</option>
                        <option value="PLUMBING">Plumbing</option>
                        <option value="ROOM FIXTURES">Room Fixtures</option>
                        </select>
                        <br>
                        <label for="Issue-description" style="weight:Bolder; font-size:20px;">Issue description</label>
                        <input type="text" class="form-control"class="description-field w-input" maxlength="256" name="Issue-description" data-name="Issue description" placeholder="Give a short description of the issue..." id="Issue-description" required=""
                        style="width:100%; padding:30px;">
                        <br>
                        <h6>All Fields are Mandatory</h6>
                        <input id="submit-issue" type="submit" value="Submit" data-wait="Please wait..." class="btn btn-lg btn-primary btn-block">
                </form>

                </div>
        </div>

    </div>
</div>
<div class="container" style="width:40%; height:200px; padding-top:100px; "><img src="https://cdn131.picsart.com/320581559301201.png?type=webp&to=min&r=640" class="card-img-top" alt="..."   ></div>
</div>

</section>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="azph_hms.js" type="text/javascript"></script>
</body>
</html>