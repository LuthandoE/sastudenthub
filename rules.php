<?php
ob_start();
session_start();

require_once('config.php');
require_once('error_handler.php');
require_once('News.php');

if( !isset($_SESSION['user']) ) {
	header("Location: admin.php");
	exit;
}
  $news = new News();
  $resSess = $news->getUserID($_SESSION['user']);
  $use_row = mysqli_fetch_array($resSess);
?>
<html>
<head>

   <link rel="stylesheet" href="css/w3.css" />
   <link rel="stylesheet" href="css/bootstrap.min.css"/>
   <script src="js/jquery-1.11.2.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <style>
     .bk{background: rgba(0,0,0,0.5);}
     a {text-decoration: none !important;}
     .bh { border-right-style: ridge; border-color: #003366 }
     .navbar{ border-radius: 0px 30px 0px 40px; border:none; background-color: #101010;}
   </style>
</head>
<body>
  <?php include_once("Nav.htm");  ?> 
  <div class="container">
      <br /><br /><br />
      <div class="w3-center"><h1>Rules:
      <hr/></h1></div>
      <h3>Some simple rules to follow:</h3>
      <ul class="w3-ul">
         <li>Be creative and interesting!</li>
         <li>Don't make offensive post.</li>
         <li>Don't mislead readers.</li>
         <li></li>
      </ul>
   </div>

</body>
</html>