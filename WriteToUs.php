<?php

  include_once('WritetoUsCd.php');
?>
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
  .kka{border-radius: 0px 30px 0px 40px;}
  .bh { border-right-style: dashed; border-color: #003366 }
  .navbar{ border-radius: 0px 30px 0px 40px; border:none; background-color: #101010;}
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img { width: 100% ; height: 40% ; background-color: black;}
  a {text-decoration: none !important;}
  </style>
</head>
<body class="w3-light-grey">
<?php include_once('Navbar.htm'); ?>
   <div class="w3-row w3-margin-top w3-light-grey " >
   <br /><br class="w3-hide-small" />
        <div  class="w3-third">&nbsp;</div>
        <div class="w3-half w3-padding-top">
        
          <div class="col-sm-9 w3-card-2 w3-white">
          
          <h1 class="w3-center w3-light-grey w3-padding w3-round-xxlarge"><span class="fa fa-edit"></span> Write to us:</h1>
          <p class="">
           Let us know what is going at your institution so
            we can help prospective students to their frustration of finding
             a place to higher education institutions.<hr />  Write to us to also give advice,
              Challenges you face as a student or issues you wish to be addressed 
              and helpful info such as bursaries and Learnerships, so we can help someone achieve his dreams. 
              
        </p>
        <form method="post">
        <div class="w3-group">
            <label class="w3-label w3-text-blue-grey"><b>Your Email:</b></label>
            <input class="w3-input w3-border w3-light-grey w3-round" required="" name="email"  type="text"/> 
        </div>
        <div class="w3-group">   
            <label class="w3-label w3-text-blue-grey"><b>Write us here:</b></label>
            <textarea name="message" required="" class="form-control" required="" rows="10" wrap="hard" id="comment"></textarea>
            <span class="error">* <?php // echo $Errarticle; ?></span>
        <div class="w3-right w3-padding"><button class="w3-btn w3-black" type="submit" name="post">Publish</button></div>
        </div> 
        </form>
        </div>
        
        </div>
                      
     </div>

</body>
</html>