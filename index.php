<?php
require_once("config.php");
require_once("News.php");
require_once("indObj.php"); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>StudentHub</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" href="css/w3.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="js/animate.css" />
  <link href="assets/font-awesome-4.5.0/css/font-awesome.css" rel="stylesheet" />
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
    $(document).ready(){
        $('#content').fadeOut('slow').load('np.php');
        refresh();
        
        function refresh(){
            setTimeout(function(){
                $('content').fadeOut('slow').load('nh.php').fadeIn('slow');
                refresh();
            }, 200);
        }
    }
  </script>
  <style>
  
  #section1 {padding-top:50px;height:500px ;}
  #section2 {padding-top:10px; background-color: #ffffff;}
  #section3 {padding-top:10px;  background-color: #ffffff;}
  #section5 {padding-top:10px;padding-bottom:10px;background-color: #ffffff;}
  #section6 {padding-top:10px; background-color: #ffffff;}
  #section7 {padding-top:10px; background-color: #ffffff;}
  
  .l-container{height: 360px;}
  .bk{background: rgba(0,0,0,0.7);}
  
  .bh { border-right-style: dashed; border-color: #003366 }
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img { width: 100% ; background-color: black;}
  a {text-decoration: none !important;}
  .rebona{border-radius: 30px 0px 40px 0px;}
  .kka{border-radius: 0px 30px 0px 40px;}
  .navbar{ border-radius: 0px 30px 0px 40px; border:none; background-color: #101010;}
  @media screen and ( max-width:  500px){
        .navbar{
        background-image: url(img/stud.jpeg;   
        }
      }
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" class="w3-light-grey">
<div class="container w3-white w3-border-bottom" id="content " >
<nav class="navbar navbar-inverse navbar-fixed-top" style="background-image: url(img/student-icon_1.png">
  <div class="container-fluid ">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand w3-text-blue" href="index.php?<?php echo mt_rand();  ?>" style="background-image: url();" ><strong>StudentHub</strong></a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="bk"><a href="#section1" class="w3-text-white bh"><span class=""><strong>Home</strong></span></a></li>
          <li class="bk"><a href="#section2" class="w3-text-white bh"><strong>News</strong></a></li>
          <li class="bk"><a href="#section3" class="w3-text-white bh"><strong>Bursaries</strong></a></li>
          <li class="bk"><a href="#section5" class="w3-text-white bh"><strong>On Campus</strong></a></li>          
  		  <li class="bk"><a  href="#section6" class="w3-text-white bh"><strong>Student Advisory</strong></a></li>
          <li class="bk"><a href="#section7" class="w3-text-white bh"><strong>Graduate Jobs</strong></a></li></ul>
         <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown bk kka">
              <a class="w3-text-white" href="WriteToUs.php?id=<?php echo mt_rand()?>">
			  <span class="fa fa-edit"></span> <strong>Write to us</strong></a>
            </li>
          </ul>
      </div>
            
    </div>
  </div>
</nav>    

<div id="section1" class="container-fluid">
  <div class="row w3-margin-top">
  <ul class="nav nav-tabs">
    <li class="active"><a href="index.php?<?php echo mt_rand();  ?>" class="w3-xlarge w3-text-blue"><strong>#StudentHub</strong></a></li>
  </ul></div>
  <div class="col-sm-4 w3-margin-top">
      
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    <li data-target="#myCarousel" data-slide-to="3" class=""></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
    <div class="l-container">
      
       <img src="img/St.jpeg" width="100%"  /> 
      <div class="carousel-caption">
        <h3 class="w3-black w3-round">News</h3>
        <p class="w3-black w3-round">Inspiring greatness</p>
      </div>
       </div>
    </div>

    <div class="item">
    <div class="l-container">
     <img src="img/St.jpeg" width="100%" />
      <div class="carousel-caption">
        <h3 class="w3-black w3-round">Bursaries</h3>
        <p class="w3-black  w3-round">Inspiring greatness</p>
      </div>
      
     </div>
    </div>
    
    <div class="item">
    <div class="l-container">
      <img src="img/St.jpeg" width="100%"  /> 
      <div class="carousel-caption">
        <h3 class="w3-black w3-round">On Campus</h3>
        <p class="w3-black w3-round">Inspiring greatness</p>
      </div></div>
    </div>

    <div class="item">
    <div class="l-container">
     <img src="img/St.jpeg" width="100%" />
      <div class="carousel-caption">
        <h3 class="w3-black w3-round">Advisory</h3>
        <p class="w3-black w3-round">Inspiring greatness</p>
      </div> </div>
    </div>
  </div>
</div>
</div>
  <div class="w3-twothird w3-hide-small">
      <div class="container-fluid  w3-margin-top w3-white" >
      <!-- To be refreshed-->
        <div id="content" class="col-sm-6  w3-margin-0 w3-padding-0"> 
            <?php include_once('np.php'); ?>
     </div>
     <div class="col-sm-6 "> 
        
          <table class="table " >
             <tr>
           <?php 
            while($row = mysqli_fetch_array($oncampTop)){ ?>
              <td><img src="image/<?php echo $row['image'];  ?>" style="width: 100px; height: 100;" /></td>
              <td ><a  href="read-news.php?id=<?php echo $row['nid'] ?>" class="w3-text-black"> <strong><?php echo $row['headline']; ?></strong> </a>
                   <p><?php echo substr($row['summary'],0,50) ."...."; ?></p>
                <?php echo $row['category_name']; ?> <br /> <span class="fa fa-clock-o"></span> <?php echo $newsObj->humanTiming(strtotime($row['posted_on'])); ?>
             
              </td>
              
           </tr> <?php  } ?>  
           <?php 
              while($row = mysqli_fetch_array( $stdAdTop)){ ?>
           <tr>
              <td><img src="image/<?php echo $row['image'];  ?>" style="width: 100px; height: 100;" /></td>
              <td ><a  href="read-news.php?id=<?php echo $row['nid'] ?>" class="w3-text-black"> <strong><?php echo $row['headline']; ?></strong> </a>
                <p><?php echo substr($row['summary'],0,50) ."...."; ?></p>
                <?php echo $row['category_name']; ?> <br /> <span class="fa fa-clock-o"></span> <?php echo $newsObj->humanTiming(strtotime($row['posted_on'])); ?>
             
              </td>    
           </tr> <?php  } ?>
        </table>
       
     </div>
     </div>   
  </div>
 
</div>
</div>
<!-- Section 2 -->
<div id="section2" class="container w3-border-bottom">
  <h3 class="w3-blue rebona w3-padding"><strong>News :</strong> </h3>
  <div class="row w3-margin-top ">
     <div class="col-md-4"> 
           <?php 
              while($row = mysqli_fetch_array($resNews)){
            ?><div class="w3-card-2">
            <div class="w3-image"><img src="image/<?php  echo $row['image'];  ?>" alt="WTF" /></div>
            <div class="w3-container w3-padding-top">
            <a href="read-news.php?id=<?php echo $row['nid'] ?>" class="w3-text-black w3-xlarge" style="text-decoration-line: none;">
            <strong><?php echo $row['headline']; ?> </strong></a><br />
            <?php echo $row['category_name']; ?>
                &nbsp; &nbsp; &nbsp; 
              <span class="fa fa-clock-o"></span> <?php echo $newsObj->humanTiming(strtotime($row['posted_on'])); ?>  
            
            
            </div>
            <?php   } ?>
            </div>
            <hr /> 
     </div>
    
     <div class="col-md-4">
        <table class="table w3-card-2" >
             <tr>
           
           <?php 
            while($row = mysqli_fetch_array($setNews)){ ?>
              <td><img src="image/<?php echo $row['image'];  ?>" style="width: 100px; height: 100;" /></td>
              <td ><a href="read-news.php?id=<?php echo $row['nid'] ?>" class="w3-text-black"> <strong><?php echo $row['headline']; ?></strong> </a>
                <p><?php echo substr($row['summary'],0,60) ."...."; ?></p>
                <?php echo $row['category_name']; ?> 
                <br /> <span class="fa fa-clock-o"></span> <?php echo $newsObj->humanTiming(strtotime($row['posted_on'])); ?>
             
              </td>
              
           </tr> <?php  } ?>  
        </table>
  
     </div>
     <div class="col-md-4">
        <table class="table w3-card-2" >
        <tr> 
           <?php 
               while($row = mysqli_fetch_array($setndNews)){ ?>
              <td><img src="image/<?php echo $row['image'];  ?>" style="width: 100px; height: 100;" /></td>
              <td ><a href="read-news.php?id=<?php echo $row['nid'] ?>" class="w3-text-black"> <strong><?php echo $row['headline']; ?></strong> </a>
                <p><?php echo substr($row['summary'],0,60) ."...."; ?></p>
                <?php echo $row['category_name']; ?> 
                <br /> <span class="fa fa-clock-o"></span> <?php echo $newsObj->humanTiming(strtotime($row['posted_on'])); ?>
             
              </td>
              
           </tr> <?php  } ?>  
        </table>
     </div>
     
     
  </div>
  
</div>
<!-- Section 3 -->
<div id="section3" class="container w3-border-bottom">
    <h3 class="w3-blue rebona w3-padding"><strong> Bursaries &AMP; Learnerships:</strong> </h3>
    <div class="row w3-margin-top ">
    <div class="col-md-4">
        <table class="table w3-card-2" >
        <tr> 
           <?php 
               while($row = mysqli_fetch_array($bursaNews)){ ?>
              <td><img src="image/<?php echo $row['image'];  ?>" style="width: 100px; height: 100;" /></td>
              <td ><a href="read-news.php?id=<?php echo $row['nid'] ?>" class="w3-text-black"> <strong><?php echo $row['headline']; ?></strong> </a>
                <p><?php echo substr($row['summary'],0,60) ."...."; ?></p>
                <?php echo $row['category_name']; ?> 
                <br /> <span class="fa fa-clock-o"></span> <?php echo $newsObj->humanTiming(strtotime($row['posted_on'])); ?>
             
              </td>
              
           </tr> <?php  } ?>  
        </table>
     </div>
     
     <div class="col-md-4">
        <table class="table w3-card-2" >
        <tr> 
           <?php 
               while($row = mysqli_fetch_array( $learnershipNews)){ ?>
              <td><img src="image/<?php echo $row['image'];  ?>" style="width: 100px; height: 100;" /></td>
              <td ><a href="read-news.php?id=<?php echo $row['nid'] ?>" class="w3-text-black"> <strong><?php echo $row['headline']; ?></strong> </a>
                <p><?php echo substr($row['summary'],0,60) ."...."; ?></p>
                <?php echo $row['category_name']; ?> 
                <br /> <span class="fa fa-clock-o"></span> <?php echo $newsObj->humanTiming(strtotime($row['posted_on'])); ?>
             
              </td>
              
           </tr> <?php  } ?>  
        </table>
     </div> 
     <div class="col-md-4">
        <table class="table w3-card-2" >
        <tr> 
           <?php 
               while($row = mysqli_fetch_array( $morebursNews)){ ?>
              <td><img src="image/<?php echo $row['image'];  ?>" style="width: 100px; height: 100;" /></td>
              <td ><a href="read-news.php?id=<?php echo $row['nid'] ?>" class="w3-text-black"> <strong><?php echo $row['headline']; ?></strong> </a>
                <p><?php echo substr($row['summary'],0,60) ."...."; ?></p>
                <?php echo $row['category_name']; ?> 
                <br /> <span class="fa fa-clock-o"></span> <?php echo $newsObj->humanTiming(strtotime($row['posted_on'])); ?>
             
              </td>
              
           </tr> <?php  } ?> 
           
                <tr> 
           <?php 
               while($row = mysqli_fetch_array( $morelearnershipNews)){ ?>
              <td><img src="image/<?php echo $row['image'];  ?>" style="width: 100px; height: 100;" /></td>
              <td ><a href="read-news.php?id=<?php echo $row['nid'] ?>" class="w3-text-black"> <strong><?php echo $row['headline']; ?></strong> </a>
                <p><?php echo substr($row['summary'],0,60) ."...."; ?></p>
                <?php echo $row['category_name']; ?> 
                <br /> <span class="fa fa-clock-o"></span> <?php echo $newsObj->humanTiming(strtotime($row['posted_on'])); ?>
             
              </td>
              
           </tr> <?php  } ?>  
        </table>
     </div>
     </div>
</div>
<!-- Section 4 -->
<div id="section5" class="container w3-border-bottom">
  <h3 class="w3-blue rebona w3-padding"><strong>On Campus :</strong> </h3>
       <div class="col-md-4">
        <table class="table w3-card-2" >
        <tr> 
           <?php 
               while($row = mysqli_fetch_array($onCampusNews)){ ?>
              <td><img src="image/<?php echo $row['image'];  ?>" style="width: 100px; height: 100;" /></td>
              <td ><a href="read-news.php?id=<?php echo $row['nid'] ?>" class="w3-text-black"> <strong><?php echo $row['headline']; ?></strong> </a>
                <p><?php echo substr($row['summary'],0,60) ."...."; ?></p>
                <?php echo $row['category_name']; ?> 
                <br /> <span class="fa fa-clock-o"></span> <?php echo $newsObj->humanTiming(strtotime($row['posted_on'])); ?>
             
              </td>
              
           </tr> <?php  } ?>  
        </table>
     </div> 
     
     <div class="col-md-4">
        <table class="table w3-card-2" >
        <tr> 
           <?php 
               while($row = mysqli_fetch_array($onCampusNews2)){ ?>
              <td><img src="image/<?php echo $row['image'];  ?>" style="width: 100px; height: 100;" /></td>
              <td ><a href="read-news.php?id=<?php echo $row['nid'] ?>" class="w3-text-black"> <strong><?php echo $row['headline']; ?></strong> </a>
                <p><?php echo substr($row['summary'],0,60) ."...."; ?></p>
                <?php echo $row['category_name']; ?> 
                <br /> <span class="fa fa-clock-o"></span> <?php echo $newsObj->humanTiming(strtotime($row['posted_on'])); ?>
             
              </td>
              
           </tr> <?php  } ?>  
        </table>
     </div>
     
     <div class="col-md-4">
        <table class="table w3-card-2" >
        <tr> 
           <?php 
               while($row = mysqli_fetch_array($onCampusNews3)){ ?>
              <td><img src="image/<?php echo $row['image'];  ?>" style="width: 100px; height: 100;" /></td>
              <td ><a href="read-news.php?id=<?php echo $row['nid'] ?>" class="w3-text-black"> <strong><?php echo $row['headline']; ?></strong> </a>
                <p><?php echo substr($row['summary'],0,60) ."...."; ?></p>
                <?php echo $row['category_name']; ?> 
                <br /> <span class="fa fa-clock-o"></span> <?php echo $newsObj->humanTiming(strtotime($row['posted_on'])); ?>
             
              </td>
              
           </tr> <?php  } ?>  
        </table>
     </div>
</div>

<!-- Section 6 -->
<div id="section6" class="container w3-border-bottom">
  <h3 class="w3-blue rebona w3-padding"><strong>Student advisory:</strong> </h3>
  <div class="col-md-4">
        <table class="table w3-card-2" >
        <tr> 
           <?php 
               while($row = mysqli_fetch_array($studAd)){ ?>
              <td><img src="image/<?php echo $row['image'];  ?>" style="width: 100px; height: 100;" /></td>
              <td ><a href="read-news.php?id=<?php echo $row['nid'] ?>" class="w3-text-black"> <strong><?php echo $row['headline']; ?></strong> </a>
                <p><?php echo substr($row['summary'],0,60) ."...."; ?></p>
                <?php echo $row['category_name']; ?> 
                <br /> <span class="fa fa-clock-o"></span> <?php echo $newsObj->humanTiming(strtotime($row['posted_on'])); ?>
             
              </td>
              
           </tr> <?php  } ?>  
        </table>
     </div> 
     
     <div class="col-md-4">
        <table class="table w3-card-2" >
        <tr> 
           <?php 
               while($row = mysqli_fetch_array($studAd2)){ ?>
              <td><img src="image/<?php echo $row['image'];  ?>" style="width: 100px; height: 100;" /></td>
              <td ><a href="read-news.php?id=<?php echo $row['nid'] ?>" class="w3-text-black"> <strong><?php echo $row['headline']; ?></strong> </a>
                <p><?php echo substr($row['summary'],0,60) ."...."; ?></p>
                <?php echo $row['category_name']; ?> 
                <br /> <span class="fa fa-clock-o"></span> <?php echo $newsObj->humanTiming(strtotime($row['posted_on'])); ?>
             
              </td>
              
           </tr> <?php  } ?>  
        </table>
     </div>
     
     <div class="col-md-4">
        <table class="table w3-card-2" >
        <tr> 
           <?php 
               while($row = mysqli_fetch_array($studAd3)){ ?>
              <td><img src="image/<?php echo $row['image'];  ?>" style="width: 100px; height: 100;" /></td>
              <td ><a href="read-news.php?id=<?php echo $row['nid'] ?>" class="w3-text-black"> <strong><?php echo $row['headline']; ?></strong> </a>
                <p><?php echo substr($row['summary'],0,30) ."...."; ?></p>
                <?php echo $row['category_name']; ?> 
                <br /> <span class="fa fa-clock-o"></span> <?php echo $newsObj->humanTiming(strtotime($row['posted_on'])); ?>
             
              </td>
              
           </tr> <?php  } ?>  
        </table>
     </div>
</div>
<!-- Section 7 -->
<div id="section7" class="container w3-border-bottom">
  <h3 class="w3-blue rebona w3-padding"><strong>Graduate Jobs:</strong> </h3>
  <div class="col-md-4">
        <table class="table w3-card-2" >
        <tr> 
           <?php 
               while($row = mysqli_fetch_array($gradJ)){ ?>
              <td><img src="image/<?php echo $row['image'];  ?>" style="width: 100px; height: 100;" /></td>
              <td ><a href="read-news.php?id=<?php echo $row['nid'] ?>" class="w3-text-black"> <strong><?php echo $row['headline']; ?></strong> </a>
                <p><?php echo substr($row['summary'],0,60) ."...."; ?></p>
                <?php echo $row['category_name']; ?> 
                <br /> <span class="fa fa-clock-o"></span> <?php echo $newsObj->humanTiming(strtotime($row['posted_on'])); ?>
             
              </td>
              
           </tr> <?php  } ?>  
        </table>
     </div> 
     
     <div class="col-md-4">
        <table class="table w3-card-2" >
        <tr> 
           <?php 
               while($row = mysqli_fetch_array($gradJ_1)){ ?>
              <td><img src="image/<?php //echo $row['image'];  ?>" style="width: 100px; height: 100;" /></td>
              <td ><a href="read-news.php?id=<?php echo $row['nid'] ?>" class="w3-text-black"> <strong><?php echo $row['headline']; ?></strong> </a>
                <p><?php echo substr($row['summary'],0,60) ."...."; ?></p>
                <?php echo $row['category_name']; ?> 
                <br /> <span class="fa fa-clock-o"></span> <?php echo $newsObj->humanTiming(strtotime($row['posted_on'])); ?>
             
              </td>
              
           </tr> <?php  } ?>  
        </table>
     </div>
     
     <div class="col-md-4">
        <table class="table w3-card-2" >
        <tr> 
           <?php 
               while($row = mysqli_fetch_array($gradJ_2)){ ?>
              <td><img src="image/<?php echo $row['image'];  ?>" style="width: 100px; height: 100;" /></td>
              <td ><a href="read-news.php?id=<?php echo $row['nid'] ?>" class="w3-text-black"> <strong><?php echo $row['headline']; ?></strong> </a>
                <p><?php echo substr($row['summary'],0,30) ."...."; ?></p>
                <?php echo $row['category_name']; ?> 
                <br /> <span class="fa fa-clock-o"></span> <?php echo $newsObj->humanTiming(strtotime($row['posted_on'])); ?>
             
              </td>
              
           </tr> <?php  } ?>  
        </table>
     </div>
</div>
<hr />

 <br />   
</body>

</html>
