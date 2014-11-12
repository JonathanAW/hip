<?php
require 'smarty/libs/Smarty.class.php';

//require_once "_code/PDO.php";
   
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

//$find_By_Family_Code = 'vintp';


$result2 =  array ( );
        
/*
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
                        "offset_left" => $offset_left,
                        "Product_href" => 'product_close_view.php?id='.$Product_Code
                        );

    }
    
  */                                       
    
    $resized_To =  scaleSize(200, 200, 450, 450); 
    $offset_top = (220 - $resized_To['h']) /2 ;   
    $offset_left = (220 - $resized_To['w']) /2 ;
    
  
    $result[] = array(  "Product_Main_Image_Key" =>  'https://www.ancientwisdom.biz/user_files/pics/bpsc-02.jpg',
                        "Product_Name" =>  'test Name', 
                        "Product_Code" =>  'MyCode', 
                        "Product_Price" =>  '4.50', 
                        "Product_Price_Each_Text" =>  '0.50<br>each', 
                        "Product_Price_Description" => 'Cool Scarves',
                        "Product_Short_Description" => 'Cool Scarves details A', 
                        "Product_Description" => 'Cool Scarves details B', 
                        "Image_Filename" =>  'https://www.ancientwisdom.biz/user_files/pics/bpsc-02.jpg', 
                        "Image_Width" => $resized_To['w'],
                        "Image_Height" => $resized_To['h'],
                        "offset_top" => $offset_top,
                        "offset_left" => $offset_left,
                        "Product_href" => 'product_close_view.php?id=12345'
                        );

    $result[] = array(  "Product_Main_Image_Key" =>  'https://www.ancientwisdom.biz/user_files/pics/bpsc-02.jpg',
                        "Product_Name" =>  'test Name', 
                        "Product_Code" =>  'MyCode', 
                        "Product_Price" =>  '4.50', 
                        "Product_Price_Each_Text" =>  '0.50<br>each', 
                        "Product_Price_Description" => 'Cool Scarves',
                        "Product_Short_Description" => 'Cool Scarves details A', 
                        "Product_Description" => 'Cool Scarves details B', 
                        "Image_Filename" =>  'https://www.ancientwisdom.biz/user_files/pics/bpsc-02.jpg', 
                        "Image_Width" => $resized_To['w'],
                        "Image_Height" => $resized_To['h'],
                        "offset_top" => $offset_top,
                        "offset_left" => $offset_left,
                        "Product_href" => 'product_close_view.php?id=12345'
                        );
                        
                        
     $result[] = array(  "Product_Main_Image_Key" =>  'https://www.ancientwisdom.biz/user_files/pics/bpsc-02.jpg',
                        "Product_Name" =>  'test Name', 
                        "Product_Code" =>  'MyCode', 
                        "Product_Price" =>  '4.50', 
                        "Product_Price_Each_Text" =>  '0.50<br>each', 
                        "Product_Price_Description" => 'Cool Scarves',
                        "Product_Short_Description" => 'Cool Scarves details A', 
                        "Product_Description" => 'Cool Scarves details B', 
                        "Image_Filename" =>  'https://www.ancientwisdom.biz/user_files/pics/bpsc-02.jpg', 
                        "Image_Width" => $resized_To['w'],
                        "Image_Height" => $resized_To['h'],
                        "offset_top" => $offset_top,
                        "offset_left" => $offset_left,
                        "Product_href" => 'product_close_view.php?id=12345'
                        );
                        
     $result[] = array(  "Product_Main_Image_Key" =>  'https://www.ancientwisdom.biz/user_files/pics/bpsc-02.jpg',
                        "Product_Name" =>  'test Name', 
                        "Product_Code" =>  'MyCode', 
                        "Product_Price" =>  '4.50', 
                        "Product_Price_Each_Text" =>  '0.50<br>each', 
                        "Product_Price_Description" => 'Cool Scarves',
                        "Product_Short_Description" => 'Cool Scarves details A', 
                        "Product_Description" => 'Cool Scarves details B', 
                        "Image_Filename" =>  'https://www.ancientwisdom.biz/user_files/pics/bpsc-02.jpg', 
                        "Image_Width" => $resized_To['w'],
                        "Image_Height" => $resized_To['h'],
                        "offset_top" => $offset_top,
                        "offset_left" => $offset_left,
                        "Product_href" => 'product_close_view.php?id=12345'
                        );                                                 
        
      $left_Panel_Sub_Links[] = array(  "name" => '0 > &#163;2.99',
                    "href" => 'products.php?pricerange=1' 
                    );    
      $left_Panel_Sub_Links[] = array(  "name" => '&#163;3.00 > &#163;4.99',
                    "href" => 'products.php?pricerange=2' 
                    );  
      $left_Panel_Sub_Links[] = array(  "name" => '&#163;5.00 > &#163;9.99',
                    "href" => 'products.php?pricerange=3' 
                    );  
      $left_Panel_Sub_Links[] = array(  "name" => '&#163;10.00 > ',
                    "href" => 'products.php?pricerange=4' 
                    );  
                         
    $left_Panel_Links[] = array(  "cat_Name" => 'Shop By Price',
                        "sub_cat_Names" => $left_Panel_Sub_Links                       
                        );  
                        
                        
                          

    $left_Panel_Sub_Links =  array ( );
    $left_Panel_Sub_Links[] = array(  "name" => 'Cashmere',
                        "href" => 'products.php?Material=1' 
                        );    
    $left_Panel_Sub_Links[] = array(  "name" => 'Chiffon',
                        "href" => 'products.php?Material=2' 
                        );
     $left_Panel_Sub_Links[] = array(  "name" => 'Cotton',
                        "href" => 'products.php?Material=3' 
                        );                       
    $left_Panel_Sub_Links[] = array(  "name" => 'Imitate Cashmere',
                        "href" => 'products.php?Material=4' 
                        );                        
    $left_Panel_Sub_Links[] = array(  "name" => 'Imitate Silk',
                        "href" => 'products.php?Material=5' 
                        );
    $left_Panel_Sub_Links[] = array(  "name" => 'Polyester',
                        "href" => 'products.php?Material=6' 
                        );                        
    $left_Panel_Sub_Links[] = array(  "name" => 'Silk',
                        "href" => 'products.php?Material=7' 
                        );                        
    $left_Panel_Sub_Links[] = array(  "name" => 'Voile',
                        "href" => 'products.php?Material=8' 
                        );                        
                                                    
    $left_Panel_Links[] = array(  "cat_Name" => 'Shop By Material',
                        "sub_cat_Names" => $left_Panel_Sub_Links                     
                        );
 
 
     $left_Panel_Sub_Links =  array ( );
    $left_Panel_Sub_Links[] = array(  "name" => 'Animal Print',
                        "href" => 'products.php?Pattern=1' 
                        );    
    $left_Panel_Sub_Links[] = array(  "name" => 'Floral Print',
                        "href" => 'products.php?Pattern=2' 
                        );
     $left_Panel_Sub_Links[] = array(  "name" => 'Geometric Patterns',
                        "href" => 'products.php?Pattern=3' 
                        );                       
    $left_Panel_Sub_Links[] = array(  "name" => 'Bohemian Patterns',
                        "href" => 'products.php?Pattern=4' 
                        );                        
    $left_Panel_Sub_Links[] = array(  "name" => 'Skull Print',
                        "href" => 'products.php?Pattern=5' 
                        );
    $left_Panel_Sub_Links[] = array(  "name" => 'Others Print',
                        "href" => 'products.php?Pattern=6' 
                        );                        
    $left_Panel_Sub_Links[] = array(  "name" => 'Solid Color',
                        "href" => 'products.php?Pattern=7' 
                        );                        
    $left_Panel_Sub_Links[] = array(  "name" => 'Dots',
                        "href" => 'products.php?Pattern=8' 
                        );                        
                                                    
    $left_Panel_Links[] = array(  "cat_Name" => 'Shop By Pattern',
                        "sub_cat_Names" => $left_Panel_Sub_Links                     
                        );   
                        
                        
      $left_Panel_Sub_Links =  array ( );
    $left_Panel_Sub_Links[] = array(  "name" => 'Infinity',
                        "href" => 'products.php?Style=1' 
                        );    
    $left_Panel_Sub_Links[] = array(  "name" => 'Men’s',
                        "href" => 'products.php?Style=2' 
                        );
     $left_Panel_Sub_Links[] = array(  "name" => 'Pashmina',
                        "href" => 'products.php?Style=3' 
                        );                       
    $left_Panel_Sub_Links[] = array(  "name" => 'Beach',
                        "href" => 'products.php?Style=4' 
                        );                        
    $left_Panel_Sub_Links[] = array(  "name" => 'Square',
                        "href" => 'products.php?Style=5' 
                        );
    $left_Panel_Sub_Links[] = array(  "name" => 'Bordered',
                        "href" => 'products.php?Style=6' 
                        );                        
    $left_Panel_Sub_Links[] = array(  "name" => 'Ordinary',
                        "href" => 'products.php?Style=7' 
                        );                        
                        
                                                    
    $left_Panel_Links[] = array(  "cat_Name" => 'Shop By Style',
                        "sub_cat_Names" => $left_Panel_Sub_Links                     
                        ); 

 
 
     $left_Panel_Color_Links[] = array(  "colourHash" => '000000',
                        "href" => 'products.php?Colour=1' 
                        );    
      $left_Panel_Color_Links[] = array(  "colourHash" => 'ffffff',
                        "href" => 'products.php?Colour=2' 
                        );                           

      $left_Panel_Color_Links[] = array(  "colourHash" => '0c0c3d',
                        "href" => 'products.php?Colour=3' 
                        );  
     $left_Panel_Color_Links[] = array(  "colourHash" => '3cc47e',
                        "href" => 'products.php?Colour=4' 
                        );    
      $left_Panel_Color_Links[] = array(  "colourHash" => '134f30',
                        "href" => 'products.php?Colour=5' 
                        );                           

      $left_Panel_Color_Links[] = array(  "colourHash" => 'b2b2b2',
                        "href" => 'products.php?Colour=6' 
                        );                         
     $left_Panel_Color_Links[] = array(  "colourHash" => 'aa56ff',
                        "href" => 'products.php?Colour=7' 
                        );    
      $left_Panel_Color_Links[] = array(  "colourHash" => 'ff7f00',
                        "href" => 'products.php?Colour=8' 
                        );                           

      $left_Panel_Color_Links[] = array(  "colourHash" => 'ffaad4',
                        "href" => 'products.php?Colour=9' 
                        );                                                   
    $left_Panel_Color_Links[] = array(  "colourHash" => '8fbbe8',
                        "href" => 'products.php?Colour=10' 
                        );    
      $left_Panel_Color_Links[] = array(  "colourHash" => '59199e',
                        "href" => 'products.php?Colour=11' 
                        );                           

      $left_Panel_Color_Links[] = array(  "colourHash" => 'ff0000',
                        "href" => 'products.php?Colour=12' 
                        );
// print_r ($left_Panel_Color_Links);
$smarty->assign('result', $result);
$smarty->assign('contact',$contact);
$smarty->assign('left_Panel_Links', $left_Panel_Links);
$smarty->assign('color_Links',$left_Panel_Color_Links);

//$smarty->display('header.tpl');
$smarty->display('productLists.tpl');
$smarty->display('footer.tpl'); 

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