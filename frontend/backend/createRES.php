<?php
session_start();
require 'classes.php';
if($_SESSION['isLogged'] === FALSE){
  header('Location: index.php');
}
  $resControll = new ResidentController($data_store);
  $resControll->addResident($_POST['IDnum'], $_POST['cluster_name'], $_POST['household'],$_POST['room_num'],$_POST['pwd']);
?>
