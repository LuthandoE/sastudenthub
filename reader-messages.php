<?php

ob_start();
session_start();

require_once('config.php');

require_once('News.php');
$news = new News();
$resSess = $news->getUserID($_SESSION['user']);
$use_row = mysqli_fetch_array($resSess);

$display = $news->readerMsgs();

?>
<!DOCTYPE html>
<html>
<head>
  <title>StudentHub</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" href="css/w3.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
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
  .bk{background: rgba(0,0,0,0.5);}
  .bh { border-right-style: ridge; border-color: #003366 }
  .navbar{ border-radius: 0px 30px 0px 40px; border:none; background-color: #101010;}
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img { width: 100% ; background-color: black;}
  a {text-decoration: none !important;}
  </style>
</head>

<body>
   <?php include_once('Nav.htm') ?>
   <br /><br />
   <div class="container">
        <br />
        <div class="w3-center"><h1>Reader's Message</h1><hr /></div>
           <table class="table table-striped">
       <thead>
          <tr>
          <th>#ID</th>
          <th>Email</th>
          <th>Message</th>
       </tr>
       </thead>
       <tbody id="body1">
          <tr>
          <?php while($row = mysqli_fetch_array($display)){ ?>
          <td><?php echo $row['rid'] ?></td>
          <td><?php echo $row['email'] ?></td>
          <td><?php echo substr($row['message'],0,30) ."...."?></td>
          <td><a href="ViewReadersMessage.php?id=<?php echo $row['rid'] ;?>">View more</a></td>
       </tr>
       <?php } ?>
       </tbody>
   </table>
        
   </div>
</body>
</html>