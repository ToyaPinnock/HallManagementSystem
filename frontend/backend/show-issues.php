<?php
require 'classes.php';

if (isset($_POST['IDnum'])) {
  $viewIssues = new IssueController($data_store);
  #SANITATION IF TIME SPARES
  $issues = $viewIssues->viewIssuesByHallMemberID($_POST['IDnum']);
  #$idCount = count($issues);
  #$i = 0;
?>
<section class=" jumbotron" class="container-fluid">
        <div class="container" style="padding:50px; ">
                <div class="row justify-content-md-center" >
                    <?php foreach ($issues as $issue) : ?>
                    <section class=" jumbotron">
                        <div class="container" style="padding:50px; ">
                            <div class="row justify-content-md-center" >
                        <div>
                        <div class="card" style="width: 75%; height:30rem; padding:30px; box-shadow: 0 4px 8px 0 rgb(0, 89, 255);">
                        <div class="card-body" style="padding:60px;">
                        <div>
                        <h1 class="card-title">TrackIssue Number: <?= $issue['issueID']; ?></h3>
                        <h2 class="card-subtitle mb-2 text-muted">Description: <?= $issue['description']; ?>"</h2>
                        <h6  class="card-text">Date Logged: <?= $issue['date']; ?></h6>
                        <h6 class="card-text">Status: <?= $issue['status']; ?></h6>
                        <p id="feedback-id" class="card-text" style="display: hidden"></p>
                        <a href="give-feedback.php">Add feedback</a>
                        <h4 class="card-text">Appointment Date: <?= $issue['appDate']; ?></h4>
                        <h4 class="card-text">Appointment Time: <?= $issue['appTime']; ?></h4>
                        <h2 class="class-text">Confirmed: <?= $issue['Confirmed']; ?></h2>
                    </div>
            </div>
        </div>
</section>
                    <?php endforeach; ?>
        <?php
        }
        ?>


