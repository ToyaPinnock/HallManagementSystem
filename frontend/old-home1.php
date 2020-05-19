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
                    <a class="nav-link" href="old-home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Logout <span class="sr-only">(current)</span></a>
                </li>
            </div>
        </nav>
    </div>
</section>
<section id="feedback" class=" jumbotron">
    <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(!empty($_POST['issueID'])){
                            $load_feedback = new FeedbackController($data_store);
                            $load_feedback->loadFeedbackFromIssue($_POST['issueID']);
                            $feedback_list = $load_feedback->sendFeedback();
                ?>
                <section >
                <div  class="container" style="padding:50px;" >
                    <div class="row justify-content-md-center"   >


                <?php foreach($feedback_list as $feedbackI): ?>

                        <div class="card" style="width: 90%; height:30rem; padding:30px; box-shadow: 0 4px 8px 0 rgb(0, 89, 255);">
                                <div class="card-body" style="padding:60px;">
                                    <h1 class="card-title">From: <?= $feedbackI->getSender();?></h1>
                                    <h5 class="card-subtitle mb-2 text-muted">Comment: <?= $feedbackI->getComment();?></h5>

                                <div class="viewissue">
                                    <!--<h6>Issue Number:</h6>-->
                                    <h6 class="card-text">Date Logged: <?= $feedbackI->getDate();?></h6>
                                    <h6 class="card-text">Status: <?= $feedbackI->isRead();?></h6>
                                    <p class="card-text" id="feedback-id" style="display: hidden"></p>
                                    <a href="give-feedback.php" class="btn btn-lg btn-primary ">Add feedback</a>
                                </div>
                                </div>
                        </div>

                <?php endforeach; ?>


                    </div>
                 </div>
                </section>
                <!---->
              <?php
              #exit("PASSED");
              } else {
                exit("<script>alert('Please enter issue number')</script>");
              }
            }
          ?>
</body>
</html>