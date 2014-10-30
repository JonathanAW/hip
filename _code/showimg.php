<?php

require_once "PDO.php";


$Product_Main_Image_Key = 772574;

$sql2 = "SELECT `Image Small Data` FROM `Image Dimension` WHERE `Image Key` = ".$_GET['id']; 
$stmt2 = $dbh4->query($sql2);  
$obj2 = $stmt2->fetch(PDO::FETCH_OBJ);
$ToGet = 'Image Small Data';
if($size=='t'){
  $ToGet = 'Image Thumbnail Data';
}
if($size=='s'){
  $ToGet = 'Image Small Data';
}
if($size=='l'){
  $ToGet = 'Image Large Data';
}

$Image_Small_Data = $obj2->$ToGet;  

if($Image_Small_Data === null){
  $ToGet = 'Image Small Data';
  $Image_Small_Data = $obj2->$ToGet; 
}
header("Content-type: image/jpeg");
echo $Image_Small_Data;
?>