<nav class="navbar navbar-inverse navbar-fixed-top" style="background-image: url(img/student-icon_1.png);" >
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand w3-text-blue" href="#"><strong>StudentHub</strong></a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="bk active"><a href="admin.php?id=<?php echo mt_rand()?>" class="w3-text-white bh "><span class="active"><strong>Home</strong></span></a></li>      
		  <li class="bk"><a href="rules.php?id=<?php echo mt_rand()?>" class="w3-text-white bh"><strong>Rules</strong></a></li>
		  <li class="bk"><a href="reward.php?id=<?php echo mt_rand()?>" class="w3-text-white bh"><strong>Reward</strong></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
              <a class="w3-text-white" href="index.php?id=<?php echo mt_rand()?>">
			  <span class="glyphicon glyphicon-globe"></span>&nbsp;<strong>View site</strong>&nbsp;</a>
            </li>
          </ul>
      </div>
    </div>
  </div>
</nav> 