<?php
  session_start();
  require 'backend/classes.php';
  if($_SESSION['isLogged'] === FALSE){
    header('Location: index.php');
  }

  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    ##SANITIZE WHEN THE TIME COMES (NEVER)
    if(!empty($_POST['issueID']) && !empty($_POST['ID']) && !empty($_POST['description'])){
      $add_feedback = new FeedbackController($data_store);
      $add_feedback->addFeedback($_POST['issueID'], $_POST['description'], $_POST['ID']);
      exit('PASSED');
    } else if (empty($_POST['issueID']) || empty($_POST['ID']) || empty($_POST['description'])) {
      exit('FAILED');
    }
  }
?>

<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Wed Nov 27 2019 21:03:53 GMT+0000 (Coordinated Universal Time)  -->
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

<section class=" container-fluid justify-content-md-center" >
<div class="row justify-content-md-center">
            <div style="padding:200px; ">
                <div class="card" style="width: 100%; height:40rem; padding:20px; box-shadow: 0 4px 8px 0 rgb(0, 89, 255);">
                    <div id="loginform" class="card-body ">
                        <form class="form-signin" id="email-form" name="email-form" data-name="Email Form">
                            <h3 class="h3 mb-3 font-weight-normal">Az Preston Hall Maintenance System <br>Give Feedback</h3>

                            <div><input type="text"  maxlength="256" name="isseue-id" data-name="isseue id" style="width:100%; padding:15px;" placeholder="Enter issue number" id="isseue-id" required></div>
                            <br>
                            <div><input type="text"  maxlength="256" name="ID-number" data-name="ID number" style="width:100%; padding:15px;" placeholder="Enter id number" id="ID-number" required=""></div>
                            <br>
                            <div>
                            <label for="Issue-description-2">Comment</label>
                            <input type="text" class="description-field" maxlength="256" name="Issue-description" data-name="Issue description" style="width:100%; padding:30px;" placeholder="feedback" id="Issue-description" required="">
                            </div>
                            <div>
                            <h6>All Fields are Mandatory</h6>
                            <input id="give-feedback" class="btn btn-lg btn-primary btn-block" type="submit" value="Submit" style="width:100%; padding:10px;" data-wait="Please wait..." class="btn-filled blue w-button">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="container" style="width:40%; height:300px; padding-top:200px; "><img src="https://cdn131.picsart.com/318337166137201.png?type=webp&to=min&r=640" style="box-shadow: 0 4px 8px 0 rgb(0, 89, 255);""></div>


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