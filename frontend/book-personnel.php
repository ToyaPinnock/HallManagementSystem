<?php
session_start();
require 'backend/classes.php';
if ($_SESSION['isLogged'] === FALSE) {
    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['issueID']) && !empty($_POST['appDate']) && !empty($_POST['appTime'])) {
        $update_stat = new IssueController($data_store);
        $update_stat->bookAppointment($_POST['issueID'], $_POST['appDate'], $_POST['appTime']);
    }
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

<body class="jumbotron ">
<!--NAV BAR-->
<section>
    <div class="container ">
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
</section>

<section class=" container-fluid" >
<div class="row justify-content-md">


            <div style="padding:20px; ">
                <div class="card" style="width: 100%; height:30rem; padding:20px; box-shadow: 0 4px 8px 0 rgb(0, 89, 255);">
                    <div id="loginform" class="card-body ">
                        <form class="form-signin" id="email-form" name="email-form" data-name="Email Form">
                            <h3 class="h3 mb-3 font-weight-normal">Book Maintainece Personnel</h3>

                            <label for="name">Enter Issue ID</label>
                            <input type="text"  maxlength="256" name="ID-number" data-name="ID number" style="width:100%; padding:10px;" placeholder="Issue ID" id="ID-number-update" required="">
                            <br>
                            <label for="name">Enter Appointment Date</label>
                            <input type="date" maxlength="256" name="app-date" data-name="app date" style="width:100%; padding:10px;" placeholder="Appointment Date" id="app-date-update" required="">
                            <br>
                            <label for="name">Enter Appointment Time</label>
                            <input type="time" maxlength="256" name="app-time" data-name="app time" style="width:100%; padding:10px;" placeholder="Appointment Time" id="app-time-update" required="">
                            <br>
                            <input id="book-personnel"  class="btn btn-lg btn-primary btn-block" type="submit" value="Submit" data-wait="Please wait..." class="btn-filled blue w-button">

                        </form>
                    </div>
                </div>
            </div>
            <div class=" container">
                <?php
                $view_all = new IssueController($data_store);
                $view_all->viewAllIssues();
                ?>
            </div>

</div>
    </section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="app.js" type="text/javascript"></script>
<script src="azph_hms.js" type="text/javascript"></script>





</body>

</html>