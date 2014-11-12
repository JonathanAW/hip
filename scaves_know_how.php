<?php

require 'smarty/libs/Smarty.class.php';

//require_once "_code/PDO.php";
   
class Contacts{
  var $id   = 1;
  var $name = 'wiwit YESsssss';
  var $email = 'wsiswoutomo at yahoo dot com';
  var $phone = '123456789';
}

//$contact = new Contacts;


$smarty = new Smarty;
                  
// print_r ($left_Panel_Color_Links);
//$smarty->assign('result', $result);
$smarty->assign('contact',$contact);

//$smarty->assign('left_Panel_Links', $left_Panel_Links);
//$smarty->assign('color_Links',$left_Panel_Color_Links);
$smarty->display('knowhow.tpl');


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