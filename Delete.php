<?php
ob_start();
session_start();

require_once('config.php');
require_once('error_handler.php');
require_once('News.php');



 if( !isset($_SESSION['user']) ) {
	header("Location: index.php");
	exit;
}

$news = new News();
$resSess = $news->getUserID($_SESSION['user']);
$use_row = mysqli_fetch_array($resSess);

$display = $news->tobEidted($_GET['id']);;

if(isset($_POST['submit'])){
    $news->deleteNews($_GET['id']);
    header("Location:DeleteNews.php");
}

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/w3.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
     .bk{background: rgba(0,0,0,0.5);}
     a {text-decoration: none;}
     .bh { border-right-style: dashed; border-color: #003366 }
     .navbar{ border-radius: 0px 30px 0px 40px; border:none; background-color: #101010;}
  </style>
  <script>
     $(function(){
        $("#cancel").click(function(){
            $(location).attr('href','DeleteNews.php');
        })
     })
  </script>
</head>

<body>
   <?php include_once("Nav.htm"); ?>
   <br /><br />
   <div class="container">
        <br />
        <div class="w3-center"><h1>Deleting News</h1><hr /></div>
           <table class="table table-striped">
       <thead>

          <tr>
          <th>#ID</th>
          <th>Headline</th>
          <th>Date</th>
       </tr>
       </thead>
       <tbody id="body1">
          <tr>
          <?php while($row = mysqli_fetch_array($display)){ ?>
          <td><?php echo $row['nid'] ?></td>
          <td><?php echo $row['headline'] ?></td>
          <td><?php echo $row['posted_on'] ?></td>
          
       </tr>
       <?php } ?>
       </tbody>
   </table>
   <div class="w3-right">
     <form method="post">
        <input type="submit" name="submit" class="w3-round-xxlarge w3-black" value="Confirm"/>
        <button type="button" id="cancel" name="cancel" class="w3-round-xxlarge w3-black">Cancel</button>
     </form>
   </div>
   <h4 class="w3-text-red">This operation cannot be reversed!</h4>
        
   </div>
</body>
</html>