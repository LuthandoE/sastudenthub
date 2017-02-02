<?php
   require_once("config.php");
   require_once('error_handler.php');
   require_once("News.php");
   
    $news = new News();
    $getNews = $news->getNewsID($_GET['id']);
    $topNews = $news->getTopNews($news->getID($_GET['id']));
?>
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="css/w3.css" />
  <link rel="stylesheet" href="css/bootstrap.css"/>
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link href="assets/font-awesome-4.5.0/css/font-awesome.css" rel="stylesheet" />
  
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
     .bk{background: rgba(0,0,0,0.7);}
     a {text-decoration: none !important;}
     .bh { border-right-style: dashed; border-color: #003366 }
     
     #imgCont{height: 400px; }
     #imgCont img{ max-height: 100%; max-width: 90%;}
     .dvImg {height: 100px;}
     .dvImg img{max-height: 100%; max-width: 100%;}
     .kka{border-radius: 0px 30px 0px 40px;}
     .navbar{ border-radius: 0px 30px 0px 40px; border:none; background-color: #101010;}
      @media screen and ( max-width:  500px){
        #imgCont {
         height : 250px;
         width: 200px;   
        }
      }
  </style>
</head>
<body class="w3-light-grey">
<?php include_once('Navbar.htm') ?>
<div class="container w3-white w3-margin-top">
    <div class="w3-row-padding w3-margin-top">
      <div class="col-md-7">
      <br /><br />
    
      <?php while($row = mysqli_fetch_array($getNews)){ ?>      
          <div class="container-fluid">
             
             <div  class="w3-content w3-padding-bottom">
             <img  src="image/<?php echo $row['image'];  ?>" class="img-responsive w3-center" />
             </div>
             <span class="w3-padding-top"> <?php echo $row['picture_by']; ?></span>
             <br />
          </div>
          
          <div class="container-fluid">
          
          <h2><?php echo $row['headline']; ?></h2>
          <p> <cite>Article by:  <?php echo $row['publisher'] ?></cite>
            &nbsp;&nbsp;&nbsp;  
            <?php echo date_format(date_create($row['posted_on']),"l d F Y H:i"); ?>
            </p>
            <hr /> 
            <?php echo nl2br($row['news']); ?> 
            <hr />
            
            <?php } ?>
           
            
          </div>
            
    </div>
    <div class="col-md-4 w3-light-grey">
        <br /><br />
         <table class="table w3-card w3-white" >
           <th class="w3-red" colspan="2">Related Articles:
           <span class="w3-right w3-large">»»</span></th>
           <tr>
              <?php 
            while($row = mysqli_fetch_array($topNews)){ ?>
              <td><div class="dvImg"><img src="image/<?php echo $row['image'];  ?>"  /></div></td>
              <td ><a href="read-news.php?id=<?php echo $row['nid'] ?>" class="w3-text-black"> 
              <strong><?php echo $row['headline']; ?></strong></a> 
               <p><?php echo substr($row['summary'],0,50) ."...."; ?></p>
                <?php echo $row['category_name']; ?> 
                <br /> <span class="fa fa-clock-o"></span> <?php echo $news->humanTiming(strtotime($row['posted_on'])); ?>
                 
              </td>
              
           </tr> <?php  } ?></table>        
    
  </div>
  </div>
</div>
<!-- Go to www.addthis.com/dashboard to customize your tools --> 
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58776976596ca1df"></script> 
</body>
</html>