<?php

  require_once('News.php');
  require_once('config.php');
  require_once('error_handler.php');

 $rm = new News();
  if(isset($_POST['post'])){
	
	   $email = test_input($_POST['email']);
       $message = test_input($_POST['message']);
    $btn = "submit";
    $rm->addReaderNews($email,$message,$btn);
 }
?>