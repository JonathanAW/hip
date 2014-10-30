<?php
require 'smarty/libs/Smarty.class.php';

require_once "_code/PDO.php";
   
//class Contacts{
//  var $id   = 1;
//  var $name = 'wiwit YESsssss';
//  var $email = 'wsiswoutomo at yahoo dot com';
//  var $phone = '123456789';
///}

//$contact = new Contacts;

$smarty = new Smarty;

$sqlOnSaleExtra = " AND `Product Sales Type` = 'Public Sale' AND `Product Availability Type` = 'Normal' AND `Product Currency` LIKE 'GBP' AND `Product Web State` = 'For Sale' ";
$find_By_Family_Code = 'bpsc';

$find_By_Family_Code = 'vintp';


$result2 =  array ( );
        

$sql = "SELECT * FROM `Product Dimension` WHERE `Product Family Code` = '".$find_By_Family_Code."' ".$sqlOnSaleExtra.""; 
$stmt = $dbh4->query($sql);
 

$foundRows = $dbh4->query("SELECT FOUND_ROWS()")->fetchColumn();
   

 //  $foundRowsa = 20;
   for($r=0;$r<$foundRows;$r++){

      $obj = $stmt->fetch(PDO::FETCH_OBJ);
      
      $ToGet = 'Product Main Department Name';
      $Item_ProdMainDep = $obj->$ToGet;
      
      $ToGet = 'Product Main Image Key';
      $Product_Main_Image_Key = $obj->$ToGet;   
      
      $ToGet = 'Product Name';
      $Product_Name = $obj->$ToGet; 
      
      $ToGet = 'Product Price';
      $Product_Price = $obj->$ToGet; 
  
      $ToGet = 'Product Short Description';
      $Product_Short_Description = $obj->$ToGet; 
      
      $ToGet = 'Product Description';
      $Product_Description = $obj->$ToGet; 

      $ToGet = 'Product Code';
      $Product_Code = $obj->$ToGet; 

      $ToGet = 'Product Units Per Case';
      $Product_Units_Per_Case = $obj->$ToGet; 
      
      $ToGet = 'Product Unit Type';
      $Product_Unit_Type = $obj->$ToGet; 
      
      
      
      
    
    $arr = explode("(",$Product_Short_Description);
    $Product_Short_Description = $arr[0];
    
    $Product_Price_Each = $Product_Price/$Product_Units_Per_Case;
    $Product_Price_Each = number_format($Product_Price_Each,2);
    
    $Product_Price_Description = $Product_Units_Per_Case.' '.$Product_Unit_Type.' for &#163;'.$Product_Price;
    $Product_Price_Each_Text = '&#163;'.$Product_Price_Each.'<br><small>Each</small>';
     
     
      // Product Availability  Product Package Type    Product Code
      //Product Units Per Case     Product Unit Type
          
    $sql2 = "SELECT * FROM `Image Dimension` WHERE `Image Key` = ".$Product_Main_Image_Key; 
    $stmt2 = $dbh4->query($sql2);      
    $obj2 = $stmt2->fetch(PDO::FETCH_OBJ);

  
    
    $ToGet = 'Image Filename';
    $Image_Filename = $obj2->$ToGet; 
    
    $ToGet = 'Image Width';
    $Image_Width = $obj2->$ToGet; 
    
    $ToGet = 'Image Height';
    $Image_Height = $obj2->$ToGet; 
            
    $resized_To =  scaleSize(200, 200, $Image_Width, $Image_Height); 
    
    
    $offset_top = (220 - $resized_To['h']) /2 ;   
    $offset_left = (220 - $resized_To['w']) /2 ;
    
    $Product_Name = str_replace(" - ","<br>",$Product_Name);
         

    
    $result[] = array(  "Product_Main_Image_Key" => $Product_Main_Image_Key,
                        "Product_Name" => $Product_Name, 
                        "Product_Code" => $Product_Code, 
                        "Product_Price" => $Product_Price, 
                        "Product_Price_Each_Text" => $Product_Price_Each_Text, 
                        "Product_Price_Description" => $Product_Price_Description,
                        "Product_Short_Description" => $Product_Short_Description, 
                        "Product_Description" => $Product_Description, 
                        "Image_Filename" => $Image_Filename, 
                        "Image_Width" => $resized_To['w'],
                        "Image_Height" => $resized_To['h'],
                        "offset_top" => $offset_top,
                        "offset_left" => $offset_left
                        
                        );

    }
    
    


$smarty->assign('result', $result);
$smarty->assign('contact',$contact);
$smarty->display('productLists.tpl');


function scaleSize($maxW, $maxH, $currW, $currH) {
        $x = $maxW; // max width
        $y = $maxH; // max height
        $imageWidth = $currW;
        $imageHeight = $currH;
        if ($imageWidth > $x) {
          $imageHeight = $imageHeight * ($x / $imageWidth);
          $imageWidth = $x;
          if ($imageHeight > $y) {
            $imageWidth = $imageWidth * ($y / $imageHeight);
            $imageHeight = $y;
          }
        } else {
        
        if ($imageHeight > $y) {
          $imageWidth = $imageWidth * ($y / $imageHeight);
          $imageHeight = $y;
          if ($imageWidth > $x) {
            $imageHeight = $imageHeight * ($x / $imageWidth);
            $imageWidth = $x;
          }
        }

      }
      
 $array["w"] = "$imageWidth";
 $array["h"] = "$imageHeight";

 return $array; 
} 

 
?>