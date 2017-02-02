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
      <div class="w3-center"><h1>Your Rewards:
      <hr/></h1></div>
      <h3>Interesting rewards:</h3>
      <ul class="w3-ul">
         <li>In order for the site to be known it must have posts.<br /> And the more
            interesting the posts, the more readers visit the site. </li>
         <li>The more readers the site gets the more money it makes
          and the more rewards you get.</li>
         <li>The rewards will vary according to the contribution <br />
           you make to the site.</li>
         <li></li>
      </ul>
   </div>

</body>
</html>