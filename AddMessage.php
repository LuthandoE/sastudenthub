<?php

ob_start();
session_start();
 require_once('config.php');
require_once('error_handler.php');
require_once('News.php');


$news = new News();

$resSess = $news->getUserID($_SESSION['user']);
$use_row = mysqli_fetch_array($resSess);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Help Student Out</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" href="css/w3.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="js/animate.css" />
  <link href="assets/font-awesome-4.5.0/css/font-awesome.css" rel="stylesheet" />
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 
  <style>
  
  #section1 {padding-top:50px;height:500px ;}
  #section2 {padding-top:10px; background-color: #ffffff;}
  #section3 {padding-top:10px;  background-color: #ffffff;}
  #section41 {padding-top:10px;background-color: #ffffff;}
  #section5 {padding-top:10px;padding-bottom:10px;background-color: #ffffff;}
  #section6 {padding-top:10px; background-color: #ffffff;}
  
  .l-container{height: 360px;}
  .bk{background-color:#202020;}
  
  .bh { border-right-style: ridge; border-color: #303030}
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img { width: 100% ; height: 40% ; background-color: black;}
  a {text-decoration: none !important;}
  </style>
 
  </head>
  
 <body class="w3-light-grey">
     <?php include_once('Nav.htm'); ?>
     <div class="w3-row w3-margin-top w3-light-grey" >
   <br /><br class="w3-hide-small" />
        <div  class="w3-third">&nbsp;</div>
        <div class="w3-half w3-padding-top">
        <hr />
          <div class="col-sm-9 w3-card-2 w3-round w3-white">
          
          <h2 class="w3-center w3-light-grey w3-text-black w3-padding w3-round-xxlarge">
          <span class="fa fa-thumbs-o-up"></span> Thanks for your input!!!</h2>
          <p class="w3-margin w3-text-green w3-center w3-large">Your  article has been successfully published.<hr /></p>
          <p class="w3-center">View the site :<a href="index.php"> StudentHub</a></p>
        </div>
        
        </div>
                      
     </div>

  
  </body>
</html>