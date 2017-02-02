<?php
require_once('config.php');
//require_once('error_handler.php');
class News{
	
   private $mysqli;
   public function __construct(){
		
		$this->mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
		}
   public function __destruct(){
		
		$this->mysqli->close();
		}

	public function editCat($id){
	   
	    $id = $this ->mysqli->real_escape_string($id);
		$query = "SELECT category_name FROM category WHERE catid='$id'";
        $res = $this->mysqli->query($query);
        
        while($row = mysqli_fetch_array($res)){
            $cat = $row['category_name'];
        }
		return $cat;
	} 
    public function deleteNews($id){
       
       $id = $this ->mysqli->real_escape_string($id);
        $query = "Delete FROM news
                WHERE nid IN ($id)";
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function search($headline,$id){
        
        $headline = $this ->mysqli->real_escape_string($headline);
        $id = $this ->mysqli->real_escape_string($id);
        $query = "SELECT nid, headline,posted_on FROM news WHERE headline Like '%$headline%' AND userid = '$id'";
        $result = $this->mysqli->query($query);
        return $result;
    }

    public function getUserID($id){
        
        $id = $this ->mysqli->real_escape_string($id);
        $query = "SELECT * FROM login WHERE userid=$id";
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function getUsername($username){
        
        $username = $this ->mysqli->real_escape_string($username);
        $query = "SELECT userid, username, pass FROM login WHERE username = '$username'";
        $result = $this->mysqli->query($query);
        return $result;
        
    }
 
	//Populating dropdown sub category
	public function GetCategory(){
		$query = "SELECT category_name FROM category 
                  ORDER BY category_name ASC";
		$result = $this->mysqli->query($query);
        return $result;
		
		}
	
	//Getting a sub category id 
	public function getSubID($pid){  
		
        $pid = $this ->mysqli->real_escape_string($pid);
		$q = "SELECT catid FROM category WHERE category_name ='$pid'";
        $result = $this->mysqli->query($q);

        while($row = mysqli_fetch_array($result)){
            $pid = $row['catid'];
        }
		return $pid;
	}
    
    //Getting a  category id 
	public function getID($nid){  
		$nid = $this ->mysqli->real_escape_string($nid);
		$q = "SELECT catid FROM news WHERE nid ='$nid'";
        $result = $this->mysqli->query($q);

        while($row = mysqli_fetch_array($result)){
            $pid = $row['catid'];
        }
		return $pid;
	}
    public function getTopNews($id){
        
        $id = $this ->mysqli->real_escape_string($id);
        $query = "SELECT news.nid, news.headline, news.image,news.posted_on,category.category_name,
                  news.summary FROM news INNER JOIN category ON news.catid = category.catid 
                  WHERE  category.catid = $id ORDER BY news.posted_on
                  DESC LIMIT 3 OFFSET 1";
                  
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function tobEidted($id){
        
        $id = $this ->mysqli->real_escape_string($id);
        $query = "SELECT nid, headline,news, image,posted_on,summary, catid
                  FROM news  
                  WHERE nid = $id";
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function ViewReadersN($id){
        
        $id = $this ->mysqli->real_escape_string($id);
        $query = "SELECT rid, email,message
                  FROM readermessages 
                  WHERE rid = $id";
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function readerMsgs(){
        
        //$id = $this ->mysqli->real_escape_string($id);
        $query = "SELECT rid, email,message
                  FROM readermessages";
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function updateNews($newsid,$category,$summary,$article,$image,$headline,$userid,$btn){
        
        $newsid = $this ->mysqli->real_escape_string($newsid);
        $summary = $this ->mysqli->real_escape_string($summary);
        $category = $this ->mysqli->real_escape_string($category);
        $article = $this ->mysqli->real_escape_string($article);
        $headline = $this ->mysqli->real_escape_string($headline);
        $userid = $this ->mysqli->real_escape_string($userid);
        
        $tmp_dir = $_FILES['image']['tmp_name'];
		$imgSize = $_FILES['image']['size'];
        
        $upload_dir = 'image/'; // upload directory
	
	    $imgExt = strtolower(pathinfo($image,PATHINFO_EXTENSION)); // get image extension
		
		// valid image extensions
		$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
		// rename uploading image
		$image = rand(1000,1000000).".".$imgExt;
 	    // allow valid image file formats
		if(in_array($imgExt, $valid_extensions)){			
				// Check file size '5MB'
				if(($imgSize < 5000000) && (!empty($image)))				{
					move_uploaded_file($tmp_dir,$upload_dir.$image);
				}
				else{
					echo  "<script>alert('Sorry, your file is too large.')</script>";
				}
			}
			else{
				echo  "<script> alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";		
			}
         
        $query = "UPDATE news SET news = '".$article."',summary ='".$summary."', image= '".$image."', 
                         headline = '".$headline."',
                         catid = '".$category."', userid = '".$userid."' WHERE nid = '".$newsid."'";
        try{
        if ($this->mysqli->query($query) === TRUE) {
            
                    header("Location:edit.php");
          
        } else {
            echo   "<script>  alert('". "Error: " . $query . "<br>" .$this->mysqli->error ."') </script>";
        }
        }catch(exception $e){
            echo   "<script>  alert('". "Error: " .$e->getMessage() ."') </script>";
        }
    }
    public function addReaderNews($email,$msg,$btn){
        $email = $this->mysqli->real_escape_string($email);
        $msg = $this->mysqli->real_escape_string($msg);
        
        $query = "INSERT INTO readermessages( message, email, sent_on) VALUES ('".$msg."','".$email."',NOW());";
                
        if ($this->mysqli->query($query) === TRUE) {
           
           header('Location: Message.php');
          
        } else {
            echo   "<script>  alert('". "Error: " . $sql . "<br>" .$this->mysqli->error ."') </script>";
        }
    }
    public function post($sub_category,$article,$image,$headline,$summary, $pname, $picture_by, $userid,$btn){
	    
        $sub_category = $this ->mysqli->real_escape_string($sub_category);
        $article = $this ->mysqli->real_escape_string($article);
        $headline = $this ->mysqli->real_escape_string($headline);
        $summary = $this ->mysqli->real_escape_string($summary);
        $picture_by = $this ->mysqli->real_escape_string($picture_by);
        $pname = $this ->mysqli->real_escape_string($pname);
        
        $image = $this ->mysqli->real_escape_string($image);
        $tmp_dir = $_FILES['image']['tmp_name'];
		$imgSize = $_FILES['image']['size'];
        
        $upload_dir = 'image/'; // upload directory

	
	    $imgExt = strtolower(pathinfo($image,PATHINFO_EXTENSION)); // get image extension
		
		// valid image extensions
		$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
		// rename uploading image
		$image = rand(1000,1000000).".".$imgExt;
 	    // allow valid image file formats
		if(in_array($imgExt, $valid_extensions)){			
				// Check file size '5MB'
				if($imgSize < 5000000)	{
					move_uploaded_file($tmp_dir,$upload_dir.$image);
				}
				else{
					echo  "<script>alert('Sorry, your file is too large.')</script>";
				}
            $sql = "INSERT INTO news (news, image,posted_on,headline,summary,publisher,picture_by,catid,userid)
               VALUES('".$article."','".$image."',NOW(),'"
               .$headline."','".$summary."','".$pname."','".$picture_by."','".$sub_category."','".$userid."')";
        
        if ($this->mysqli->query($sql) === TRUE) {
           
            header('Location: AddMessage.php');
          
        } else {
            header('Location: ErrorMessage.php');
        
	
      }  	
			}
			else{
				echo  "<script> alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";		
			}
            
     // $this->mysqli->query("INSERT INTO cat (catid, catid) VALUES('".$category."','".$sub_category."')");
	//	$catid  =$this->mysqli->insert_id;
		
	   
	}
    public function getTNews(){
        $query = "SELECT news.nid, news.headline, news.image,
                   news.summary,news.posted_on,category.category_name
                  FROM news INNER JOIN category ON news.catid = category.catid 
                  WHERE  category.catid = 1 ORDER BY news.posted_on
                  DESC LIMIT 1";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function editNews($id){
        
        $id = $this ->mysqli->real_escape_string($id);
        $query = "SELECT nid, headline,posted_on
                  FROM news  
                  WHERE userid = $id ORDER BY posted_on
                  DESC LIMIT 30";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function getNews(){
        $query = "SELECT news.nid, news.headline, news.image,news.summary,
                    news.posted_on,category.category_name
                  FROM news INNER JOIN category ON news.catid = category.catid 
                  WHERE  category.catid = 1 ORDER BY news.posted_on
                  DESC LIMIT 4 OFFSET 1";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function AnoNews(){
        $query = "SELECT news.nid, news.headline, news.image,news.posted_on,
                    news.summary,category.category_name
                  FROM news INNER JOIN category ON news.catid = category.catid 
                  WHERE  category.catid = 1 ORDER BY news.posted_on
                  DESC LIMIT 4 OFFSET 5";
        
        $result = $this->mysqli->query($query);
        return $result;
    }    
   public function getNewsID($newsID){
        
        $newsID = $this ->mysqli->real_escape_string($newsID);
        $query = "SELECT headline, news, image, posted_on, picture_by, publisher FROM news
                    WHERE nid =".$newsID;
                    
       $result = $this->mysqli->query($query);
       return $result;  
    }

    public function Learnership(){
        $query = "SELECT news.nid, news.headline, news.image,news.summary,
                news.posted_on,category.category_name
                  FROM news INNER JOIN category ON news.catid = category.catid 
                  WHERE  category.catid = 3 ORDER BY news.posted_on
                  DESC LIMIT 1";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
  
    public function getBursNews(){
        $query = "SELECT news.nid, news.headline, news.image,news.summary,
                    news.posted_on,category.category_name
                  FROM news INNER JOIN category ON news.catid = category.catid 
                  WHERE  category.catid = 2 ORDER BY news.posted_on
                  DESC LIMIT 4 ";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function moreBursNews(){
        $query = "SELECT news.nid, news.headline, news.image,news.summary,
                    news.posted_on,category.category_name
                  FROM news INNER JOIN category ON news.catid = category.catid 
                  WHERE  category.catid = 2 ORDER BY news.posted_on
                  DESC LIMIT 2 OFFSET 4 ";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function getLearnershipNews(){
        $query = "SELECT news.nid, news.headline, news.image,news.summary,
                    news.posted_on,category.category_name
                  FROM news INNER JOIN category ON news.catid = category.catid 
                  WHERE  category.catid = 3 ORDER BY news.posted_on
                  DESC LIMIT 4";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function moreLearnershipNews(){
        $query = "SELECT news.nid, news.headline, news.image,news.summary,
                    news.posted_on,category.category_name
                  FROM news INNER JOIN category ON news.catid = category.catid 
                  WHERE  category.catid = 3 ORDER BY news.posted_on
                  DESC LIMIT 2 OFFSET 4";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
  
    public function onCampusNews(){
        $query = "SELECT news.nid, news.headline, news.image,news.summary,
                    news.posted_on,category.category_name
                  FROM news INNER JOIN category ON news.catid = category.catid 
                  WHERE  category.catid = 4 ORDER BY news.posted_on
                  DESC LIMIT 4";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function onCampusNews2(){
        $query = "SELECT news.nid, news.headline, news.image,news.summary,
                    news.posted_on,category.category_name
                  FROM news INNER JOIN category ON news.catid = category.catid 
                  WHERE  category.catid = 4 ORDER BY news.posted_on
                  DESC LIMIT 4 OFFSET 4";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function onCampusNews3(){
        $query = "SELECT news.nid, news.headline, news.image,news.summary,
                    news.posted_on,category.category_name
                  FROM news INNER JOIN category ON news.catid = category.catid 
                  WHERE  category.catid = 4 ORDER BY news.posted_on
                  DESC LIMIT 4 OFFSET 8";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function studAdvisory(){
        $query = "SELECT news.nid, news.headline, news.image,news.summary,
                    news.posted_on,category.category_name
                  FROM news INNER JOIN category ON news.catid = category.catid 
                  WHERE  category.catid = 5 ORDER BY news.posted_on
                  DESC LIMIT 4";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function studAdvisory01(){
        $query = "SELECT news.nid, news.headline, news.image,news.summary,
                    news.posted_on,category.category_name
                  FROM news INNER JOIN category ON news.catid = category.catid 
                  WHERE  category.catid = 5 ORDER BY news.posted_on
                  DESC LIMIT 4 OFFSET 4";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function studAdvisory02(){
        $query = "SELECT news.nid, news.headline, news.image,news.summary,
                    news.posted_on,category.category_name
                  FROM news INNER JOIN category ON news.catid = category.catid 
                  WHERE  category.catid = 5 ORDER BY news.posted_on
                  DESC LIMIT 4 OFFSET 8";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function gradJobs(){
        $query = "SELECT news.nid, news.headline, news.image,news.summary,
                    news.posted_on,category.category_name
                  FROM news INNER JOIN category ON news.catid = category.catid 
                  WHERE  category.catid = 6 ORDER BY news.posted_on
                  DESC LIMIT 4";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function gradJobs_1(){
        $query = "SELECT news.nid, news.headline, news.image,news.summary,
                    news.posted_on,category.category_name
                  FROM news INNER JOIN category ON news.catid = category.catid 
                  WHERE  category.catid = 6 ORDER BY news.posted_on
                  DESC LIMIT 4 OFFSET 4";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function gradJobs_2(){
        $query = "SELECT news.nid, news.headline, news.image,news.summary,
                    news.posted_on,category.category_name
                  FROM news INNER JOIN category ON news.catid = category.catid 
                  WHERE  category.catid = 6 ORDER BY news.posted_on
                  DESC LIMIT 4 OFFSET 8";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
     public function anoLearnershipTop(){
        $query = "SELECT news.nid, news.headline, news.image, news.summary,
                    news.posted_on,category.category_name
                  FROM news INNER JOIN category ON news.catid = category.catid 
                  WHERE  category.catid = 3 ORDER BY news.posted_on
                  DESC LIMIT 1 OFFSET 1";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function carouselRumour(){
        $query = "SELECT news.nid, news.headline, news.image,news.summary,
                    news.posted_on,category.category_name
                  FROM news INNER JOIN category ON news.catid = category.catid 
                  WHERE  category.catid = 2 ORDER BY news.posted_on
                  DESC LIMIT 1";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function onCampTop(){
        $query = "SELECT news.nid, news.headline, news.image,news.summary,
                    news.posted_on,category.category_name
                  FROM news INNER JOIN category ON news.catid = category.catid 
                  WHERE  category.catid = 4 ORDER BY news.posted_on
                  DESC LIMIT 1";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function onCampTop02(){
        $query = "SELECT news.nid, news.headline, news.image,news.summary,
                    news.posted_on,category.category_name
                  FROM news INNER JOIN category ON news.catid = category.catid 
                  WHERE  category.catid = 4 ORDER BY news.posted_on
                  DESC LIMIT 1 OFFSET 1";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
    public function stdAdvisoryTop(){
        $query = "SELECT news.nid, news.headline, news.image,news.summary,
                    news.posted_on,category.category_name
                  FROM news INNER JOIN category ON news.catid = category.catid 
                  WHERE  category.catid = 5 ORDER BY news.posted_on
                  DESC LIMIT 1 ";
        
        $result = $this->mysqli->query($query);
        return $result;
    }
  
function humanTiming ($time){

    $time = time() - $time; // to get the time since that moment
    $time = ($time<1)? 1 : $time;
    $tokens = array (
        31536000 => 'year',
        2592000 => 'month',
        604800 => 'week',
        86400 => 'day',
        3600 => 'hour',
        60 => 'minute',
        1 => 'second'
    );

    foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
    }

  }
    
}
?>
