<table class="table w3-margin-0 w3-padding-0" >
             <tr>
           
           <?php 
            while($row = mysqli_fetch_array($NwsTop)){ ?>
              <td><img src="image/<?php echo $row['image'];  ?>" style="width: 100px; height: 100;" /></td>
              <td ><a href="read-news.php?id=<?php echo $row['nid'] ?>" class="w3-text-black"> 
              <strong><?php echo $row['headline']; ?></strong> </a>
                <p><?php echo substr($row['summary'],0,50) ."...."; ?></p>
                <p><?php echo $row['category_name']; ?> 
                   
                <br /><span class="fa fa-clock-o"></span> <?php echo $newsObj->humanTiming(strtotime($row['posted_on'])); ?></p>
             
              </td>
              
           </tr> <?php  } ?>  
           <?php 
            while($row = mysqli_fetch_array($bursTop2)){ ?>
           <tr>
              <td><img src="image/<?php echo $row['image'];  ?>" style="width: 100px; height: 100;" /></td>
              <td ><a  href="read-news.php?id=<?php echo $row['nid'] ?>" class="w3-text-black"> <strong><?php echo $row['headline']; ?></strong> </a><br />
                   <p><?php echo substr($row['summary'],0,50) ."...."; ?></p>
                <?php echo $row['category_name']; ?><br /> <span class="fa fa-clock-o"></span> <?php echo $newsObj->humanTiming(strtotime($row['posted_on'])); ?>
             
              </td>
              
           </tr> <?php  } ?>          
</table>