<?php
session_start();
require 'backend/classes.php';
if($_SESSION['isLogged'] === FALSE){
  header('Location: index.php');
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  if(!empty($_POST['issueID']) && !empty($_POST['status'])){
    $update_stat = new IssueController($data_store);
    $update_stat->updateIssue($_POST['issueID'], $_POST['status']);
  }
}

?>

<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Wed Nov 27 2019 21:22:00 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5ddee7b3abcf2c65a5f4ee54" data-wf-site="5dd89354578babc32818ce3f">
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
                            <a class="nav-link" href="admin.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                </div>
            </nav>
        </div>
    </section>
    <section class="jumbotron" class="log-in-form">
        <div class="container" style="padding:20px; ">
            <div class="row justify-content-md-center">
                <div class="card" style="width: 60%; height:20rem; padding:20px; box-shadow: 0 4px 8px 0 rgb(0, 89, 255);">
                    <div id="loginform" class="card-body ">
                        <h3 class="h3 mb-3 font-weight-normal">AZ Preston HallManagementSystem</h3>
                        <h5>Update Issue Status</h5>
                    <form  class="form-signin"id="email-form" name="email-form" data-name="Email Form" class="w-clearfix">
                            <label for="name" class="sr-only">ID number</label>
                            <input type="text"class="form-control" maxlength="256" name="ID-number" data-name="ID number" placeholder="Issue ID" id="ID-number-update" required="">
                            <label for="name" class="sr-only">Issue Status</label>
                            <select id="current-status" name="cluster" required="" data-name="cluster" class="form-control">
                                <option value="PENDING">Pending</option>
                                <option value="FIXING">Fixing</option>
                                <option value="FOLLOW UP">Follow up</option>
                                <option value="RESOLVED">Resolved</option>
                            </select>
                        <h6>All Fields are Mandatory</h6>
                        <input id="submit-update-issue" type="submit" value="Submit" data-wait="Please wait..." class="btn btn-lg btn-primary btn-block">
                    </form>



                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="azph_hms.js" type="text/javascript"></script>

</body>
</html>