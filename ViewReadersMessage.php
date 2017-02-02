<?php
ob_start();
session_start();
 require_once('config.php');
require_once('error_handler.php');
require_once('News.php');


$news = new News();

$resSess = $news->getUserID($_SESSION['user']);
$use_row = mysqli_fetch_array($resSess);

$display = $news->ViewReadersN($_GET['id']);;

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/w3.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
     .error { color:  red; }
     .bk{background-color:#202020;}
     a {text-decoration: none;}
     .bh { border-right-style: ridge; border-color: #303030}
  </style>
</head>

<body class="w3-light-grey">
<?php include_once("Nav.htm"); ?>

  <br />
  <div class="container">
<br/>
   
   <div class="w3-row w3-margin-top w3-light-grey" >
   <br /><br class="w3-hide-small" />
        <div  class="w3-third">&nbsp;</div>
        <div class="w3-half w3-padding-top">
        
          <div class="col-sm-9 w3-card-2 w3-white">
          
          <h2 class="w3-center w3-light-grey w3-padding w3-round-xxlarge"><span class="fa fa-edit"></span> Reader's Messages</h2>
         <hr />
        <form method="post">
        <div class="w3-group">
            <label class="w3-label w3-text-blue-grey"><b>Your Email:</b></label>
            <?php while($row = mysqli_fetch_array($display)){ ?>            
            <input class="w3-input w3-border w3-light-grey w3-round" required="" value="<?php echo $row['email']; ?>" name="email"  type="text"/> 
        </div>
        <div class="w3-group">   
            <label class="w3-label w3-text-blue-grey"><b>Write us here:</b></label>
            <textarea name="message" required="" class="form-control" required="" rows="10" wrap="hard" id="comment"><?php echo $row['message'] ?>
            </textarea>
            
        <?php } ?>
        </div> 
        </form>
        </div>
        
        </div>
                      
     </div>   
</div>
</body>
</html>