<?php

$newsObj = new News(); 
 $resNews = $newsObj->getTNews();

 $bursaNews = $newsObj->getBursNews();
 $learnershipNews = $newsObj->getLearnershipNews();
 $morelearnershipNews = $newsObj->moreLearnershipNews();
 $morebursNews = $newsObj->moreBursNews();

 
$secSupTop = $newsObj->Learnership();
$onCampusNews = $newsObj->onCampusNews();
$onCampusNews2 = $newsObj->onCampusNews2();
$onCampusNews3 = $newsObj->onCampusNews3();

$studAd = $newsObj->studAdvisory();
$studAd2 = $newsObj->studAdvisory01();
$studAd3 = $newsObj->studAdvisory02();


 $setNews = $newsObj->getNews();
 $setndNews = $newsObj->AnoNews();

 
 $gradJ = $newsObj->gradJobs();
 $gradJ_1 = $newsObj->gradJobs_1();
 $gradJ_2 = $newsObj->gradJobs_2();
 
 $NwsTop = $newsObj->getTNews();
 $LeanershipTop = $newsObj->Learnership();
 $leanershipTop2 = $newsObj->Learnership();
 
 $oncampTp2 = $newsObj->onCampTop02();
 $bursTop2 = $newsObj->carouselRumour();
 
 
 $carSupporterN = $newsObj->Learnership();
 
 $oncampTop = $newsObj->onCampTop();
 
 $stdAdTop = $newsObj->stdAdvisoryTop();
?>