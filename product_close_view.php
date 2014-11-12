<?php
require 'smarty/libs/Smarty.class.php';

//require_once "_code/PDO.php";
   
$Product_Code = $_GET['id'];

$smarty = new Smarty;

$sqlOnSaleExtra = " AND `Product Sales Type` = 'Public Sale' AND `Product Availability Type` = 'Normal' AND `Product Currency` LIKE 'GBP' AND `Product Web State` = 'For Sale' ";
$find_By_Family_Code = 'bpsc';

//$find_By_Family_Code = 'vintp';


//echo($Product_Code);
        
/*
$sql = "SELECT * FROM `Product Dimension` WHERE `Product Code` = '".$Product_Code."' "; 
$stmt = $dbh4->query($sql);
 

$foundRows = $dbh4->query("SELECT FOUND_ROWS()")->fetchColumn();
   


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
      
      $ToGet = 'Product Availability';
      $Product_Availability = $obj->$ToGet;
      
      $ToGet = 'Product Unit Weight';
      $Product_Unit_Weight = $obj->$ToGet;      
      
      $ToGet = 'Product Unit XHTML Dimensions';
      $Product_Unit_XHTML_Dimensions = $obj->$ToGet;       
     
      $ToGet = 'Product Unit Materials';
      $Product_Unit_Materials = $obj->$ToGet;               
      
      $ToGet = 'Product RRP';
      $Product_RRP = $obj->$ToGet;       
      
      
      
      
      
      if($Product_Availability > 1){
         $Product_Availability = 'In Stock';
      }
    
    $arr = explode("(",$Product_Short_Description);
    $Product_Short_Description = $arr[0];
    
    $Product_Price_Each = $Product_Price/$Product_Units_Per_Case;
    $Product_Price_Each = number_format($Product_Price_Each,2);
    
    $Product_Price_Description = $Product_Units_Per_Case.' '.$Product_Unit_Type.' for &#163;'.$Product_Price;
    $Product_Price_Each_Text = '&#163;'.$Product_Price_Each;//.'<br><small>Each</small>';
     
     $Product_RRP = $Product_RRP/$Product_Units_Per_Case;
     $Product_RRP = number_format($Product_RRP,2);    
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
            
    $resized_To =  scaleSize(280, 280, $Image_Width, $Image_Height); 
    
    
    $offset_top = (300 - $resized_To['h']) /2 ;   
    $offset_left = (400 - $resized_To['w']) /2 ;
    
    $Product_Name = str_replace(" - "," <br>",$Product_Name);
         

  //  echo($Image_Filename);
    $result[] = array(  "Product_Main_Image_Key" => $Product_Main_Image_Key,
                        "Product_Name" => $Product_Name, 
                        "Product_Code" => $Product_Code, 
                        "Product_Price" => '&#163;'.$Product_Price, 
                        "Product_Price_Each_Text" => $Product_Price_Each_Text, 
                        "Product_Price_Description" => $Product_Price_Description,
                        "Product_Short_Description" => $Product_Short_Description, 
                        "Product_Description" => $Product_Description, 
                        "Image_Filename" => $Image_Filename, 
                        "Image_Width" => $resized_To['w'],
                        "Image_Height" => $resized_To['h'],
                        "offset_top" => $offset_top,
                        "offset_left" => $offset_left,
                        "Product_href" => 'product_close_view.php?id='.$Product_Code,
                        "Product_Availability" => $Product_Availability
                        
                        
                        );

*/


    $resized_To =  scaleSize(280, 280, 450, 450); 
    $offset_top = (300 - $resized_To['h']) /2 ;   
    $offset_left = (400 - $resized_To['w']) /2 ;
    


                        
    $result[] = array(  "Product_Main_Image_Key" =>  772582,
                        "Product_Name" =>  'Cool Scarves Name', 
                        "Product_Code" =>  'MyCode', 
                        "Product_Price" =>  '&#163;4.50', 
                        "Product_Price_Each_Text" =>  '&#163;20.50', 
                        "Product_Price_Description" => 'Cool Scarves',
                        "Product_Short_Description" => 'Cool Scarves details A', 
                        "Product_Description" => 'Cool Scarves details B', 
                        "Image_Filename" =>  'https://www.ancientwisdom.biz/user_files/pics/bpsc-02.jpg', 
                        "Image_Width" => $resized_To['w'],
                        "Image_Height" => $resized_To['h'],
                        "offset_top" => $offset_top,
                        "offset_left" => $offset_left,
                        "Product_href" => 'product_close_view.php?id=12345',
                        "Product_Availability" => 'In Stock'
                        );
   
        $info_extra_images[] = array(  "url_small" => 772580,
                    "url_large" => 'https://www.ancientwisdom.biz/user_files/pics/'.$Image_Filename 
                    );    
        $info_extra_images[] = array(  "url_small" => 772582,
                    "url_large" => 'https://www.ancientwisdom.biz/user_files/pics/bpsc-05.jpg' 
                    );     
        $info_extra_images[] = array(  "url_small" => 772584,
                    "url_large" => 'https://www.ancientwisdom.biz/user_files/pics/bpsc-06.jpg'
                    );       
        $info_extra_images[] = array(  "url_small" => 772586,
                    "url_large" => 'https://www.ancientwisdom.biz/user_files/pics/bpsc-04.jpg' 
                    );   
 
 
         $Product_RRP = 9.99;
         $Product_Unit_Weight = 20;
         $Product_Unit_XHTML_Dimensions = '30cm x 60 cm';
         $Product_Unit_Materials = 'Not silk';
 
         $info_overview[] = array(  "text" => 'RRP : &#163;'.$Product_RRP.' each',
                    "colour" => 'ff7f00' 
                    ); 
         $info_overview[] = array(  "text" => 'Weight : '.($Product_Unit_Weight * 100).' grams',
                    "colour" => 'ff7f00' 
                    );   
         $info_overview[] = array(  "text" => 'Size : '.$Product_Unit_XHTML_Dimensions,
                    "colour" => '447f00' 
                    );                      
         $info_overview[] = array(  "text" => 'Materials: '.$Product_Unit_Materials,
                    "colour" => '117f00' 
                    ); 
                    
                    
         $tab1_text =  'Another beautiful range of  wholesale scarves that brings the joy to every day.<br>Sell these Just a Bit Posh Scarves this summer and you will nicely surprise your customers with the beautiful colours and designs<br>...not to mention the price!.<br><br>These scarves comes in large sizes and  feature a fantastic selection of owls, hearts & love, flowers and hippy designs and colours.<br>Very comfortable to wear in any time of the year.';
         
         $tab2_text =  '<b>Tips For Keeping Scarves </b><br><br><br>To help protect your Scarves, try tossing your scarves and clothes into the wash with a tablespoon of SALT.<br>The chloride will help seal the color in and keep it looking fresher longer.<br>It works for rugs, as well as for scarves, it works for anything that`s machine washable. ';
                    
         $tab2_text = $tab2_text.'<br><br><b>Selling Tips</b><br><br>Help improve your sales by keeping all your scarves next to a full length mirror. <br>Nothing better than looking at your self with one of our scarves on to temp you into buying';      
  
  
         $tab3_text = '<b>How long will it take to get my Scarves?</b><br><br>For Royal Mail , this can take upto 7 working days to deliver from date of cleared payment.<br>For Royal Mail tracked, this can take upto 3 working days to deliver from date of cleared payment. ';                                                                          

         $tab3_text = $tab3_text.'<br><br><b>I`ve not received my Scarves, they was despatched Royal Mail 2nd Class, what do I do now?</b><br><br>If your item was despatched with Royal Mail standard parcels, this meams it is untracked. When 7 days have elapsed please check with your local sorting office, they may have your Scarves. If the Scarves are not at the sorting office, they will be returned to us - this can sometimes take upto 15 days after notification to us.  ';


// print_r ($left_Panel_Links);
$smarty->assign('result', $result);
$smarty->assign('contact',$contact);
$smarty->assign('info_overview',$info_overview);
$smarty->assign('tab1_text',$tab1_text);
$smarty->assign('tab2_text',$tab2_text);
$smarty->assign('tab3_text',$tab3_text);

$smarty->assign('info_extra_images', $info_extra_images);


$smarty->display('productInfo.tpl');


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