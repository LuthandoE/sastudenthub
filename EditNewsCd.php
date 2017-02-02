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

$c = '';
$result = $news->GetCategory();
while ($row = mysqli_fetch_array($result)){
	
		$c .='<option>'.$row['category_name'].'</option>';
	}
$resSess = $news->getUserID($_SESSION['user']);
$use_row = mysqli_fetch_array($resSess);


$tobeEdit = $news->tobEidted($_GET['id']); 
$errMessage ="";
if(isset($_POST['post'])){
    
    $headline = test_input($_POST['title']);
	$article = test_input($_POST['article']);
    $summary = test_input($_POST['summary']);
	$image =   test_input( $_FILES['image']['name']);
	$category = test_input($_POST['sub_cat']);
	$category = $news->getSubID($category);
    
	$userid = test_input($_SESSION['user']);
    $newsid = test_input($_GET['id']);
    try{
    $btn = "submit";
    $news->updateNews($newsid,$category,$summary,$article,$image,$headline,$userid,$btn);
    } catch (exception $e){
        
        $errMessage = $e->getMessage();
    }
}


?>