<?php
  require_once("adNewsCd.php");    
?>
<html>
<head>
  <link rel="stylesheet" href="css/w3.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
     .error { color:  red; }
     .bk{background: rgba(0,0,0,0.5);}
     a {text-decoration: none;}
     .bh { border-right-style: dashed; border-color: #003366 }
     .navbar{ border-radius: 0px 30px 0px 40px; border:none; background-color: #101010;}
  </style>
</head>

<body>
   <?php include_once("Nav.htm"); ?>
<br />
<div class="container">
<br /><br />
<div class="w3-center w3-padding-top"><h1>News Publisher</h1></div>
<br/>
<div class="w3-container">
<div class="w3-row-padding">
<div class="w3-half">
<div class="">
<form class="w3-form" method="post" enctype="multipart/form-data">
<div class="w3-group">      
<label class="w3-label w3-text-brown"><b>Your headline</b></label>
<input class="w3-input w3-sand" required="" maxlength="80" name="title" type="text"/>
<span class="error">* <?php //echo $Errheadline; ?></span>
</div>

<div class="w3-group">
  <label class="w3-label w3-text-brown"><b>Summary</b></label>
  <textarea name="summary" maxlength="120" required="" class="form-control" rows="3" wrap="hard" id="comment"></textarea>
</div>

<div class="w3-group">      
<label class="w3-label w3-text-brown"><b>Category:</b></label>
<select class="w3-select w3-section" name="sub_cat">
Select an Option
<option value="" disabled="" selected="">Choose your option</option>
<?php echo $c; ?>

</select>
<span class="error">* <?php //echo $Errsub_category; ?></span>
</div>

<div class="w3-group">      
<label class="w3-label w3-text-brown"><b>Image</b></label>
<input class="w3-input  w3-sand" name="image" required="" type="file"/>
</div>
<div class="w3-group">      
    <label class="w3-label w3-text-brown"><b>Picture by:</b></label>
    <input class="w3-input w3-sand" name="picture_by"  type="text"/>
    <span class="w3-small">This is optional....</span>
</div>

</div>
</div> 

<div class="w3-half">
<br />
<div class="w3-group">      
    <label class="w3-label w3-text-brown"><b>Publisher Name</b></label>
    <input class="w3-input w3-sand" name="pname"  type="text"/>
    <span class="error">* <?php // echo $Errimage; ?></span>
</div>

<div class="w3-group">     
    <label class="w3-label w3-text-brown"><b>Write here:</b></label>
    <textarea name="article" required="" class="form-control" rows="12" wrap="hard" id="comment"></textarea>
    <span class="error">* <?php // echo $Errarticle; ?></span>
<div class="w3-right w3-padding"><button class="w3-btn w3-black" type="submit" name="post">Publish</button></div>
</div>
<br /><hr />
</form>
</div> 
</div>
</div>
</div>
 
</body>
</html> 