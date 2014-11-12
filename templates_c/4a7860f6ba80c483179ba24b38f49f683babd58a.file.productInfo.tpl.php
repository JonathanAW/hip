<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-12 02:53:12
         compiled from "./templates/productInfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:984859625457a94d6d7512-31530628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a7860f6ba80c483179ba24b38f49f683babd58a' => 
    array (
      0 => './templates/productInfo.tpl',
      1 => 1415785989,
      2 => 'file',
    ),
    '34bb911e821a6393a7c580d84dc2fc5b2d69de5b' => 
    array (
      0 => './templates/layout_blocks_product_info.tpl',
      1 => 1415205067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '984859625457a94d6d7512-31530628',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5457a94d93b376_68170034',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5457a94d93b376_68170034')) {function content_5457a94d93b376_68170034($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("setting.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<html>
<head>
  <title><?php echo $_smarty_tpl->getConfigVariable('pageTitle');?>
</title>
  

  <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
  
  <link href="http://www.mypickandmix.com/aw/hip/css/product_info.css" rel="stylesheet" type="text/css"/>
   <?php echo '<script'; ?>
 src="js/jquery-1.10.2.min.js"><?php echo '</script'; ?>
>
   
   
   <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.navgoco.min.js"><?php echo '</script'; ?>
>
   
   <!--
   <link href="js/jquery.navgoco.css" rel="stylesheet" type="text/css"/>
   -->

   
   <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.elevatezoom.js"><?php echo '</script'; ?>
>
      
   <?php echo '<script'; ?>
 type="text/javascript" src="js/productInfo.js"><?php echo '</script'; ?>
>
   
   <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'> 
   <?php echo '<script'; ?>
 src="js/jquery.cookie.js"><?php echo '</script'; ?>
>
   

</head>
<body bgcolor="<?php echo $_smarty_tpl->getConfigVariable('bodyColor');?>
" >
<div id="xyz_main">
<br> <br><br><br><br>




<div style="width:973px">
    <div style="float:left; width:400px">
    

      <div id="LestSideBox"  style="position:relative; left:0px; top:0px;;height:0px;" > 

          <div id="LestSideBoxInside" class="FrontshopAXX " style="position:relative; left:0px; top:0px;height:430px;overflow:hiddenx" > 
 <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?> 
        <div class="Cursor_Pointer" style="position:relative; left:<?php echo $_smarty_tpl->tpl_vars['row']->value['offset_left'];?>
px; top:<?php echo $_smarty_tpl->tpl_vars['row']->value['offset_top']+12;?>
px; width:80px; height:315px ;z-index:10">
        <a title=""><img  id='zoom_01' src="https://www.ancientwisdom.biz/public_image.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value['Product_Main_Image_Key'];?>
" data-zoom-image="<?php echo $_smarty_tpl->tpl_vars['row']->value['Image_Filename'];?>
" title="" width="<?php echo $_smarty_tpl->tpl_vars['row']->value['Image_Width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['row']->value['Image_Height'];?>
" border="0"  alt=""></a></div>
 <?php } ?> 


 <div class='Normal-PL Style_productPrice' style='position:relative;left:10px;top:6px'  > More views</div>  
    <hr>  
 
 <div class='smallImgBoxWapper' id="gallery_01">  
 <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_extra_images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?> 
<!-- 
              <div class="Cursor_Pointer smallImgBox" style="position:relative; left:0px; top:0px; width:70px; height:70px ;z-index:10">
        <a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['Product_href'];?>
" onClick='changeImage("<?php echo $_smarty_tpl->tpl_vars['row']->value['url_large'];?>
")' title=""><img  src="http://www.mypickandmix.com/aw/hip/_code/showimg.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value['url_small'];?>
" title="" width="70" height="70" border="0"  alt=""></a></div>
-->
    <div class="Cursor_Pointer smallImgBox" style="position:relative; left:0px; top:0px; width:70px; height:70px ;z-index:10">

         <a href="#" data-image="https://www.ancientwisdom.biz/public_image.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value['url_small'];?>
" data-zoom-image="<?php echo $_smarty_tpl->tpl_vars['row']->value['url_large'];?>
" > 
         <img id="img_01" src="https://www.ancientwisdom.biz/public_image.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value['url_small'];?>
" width="70" height="70" /> 
         </a>
   </div>

  <?php } ?> 
 </div>
 
 
 
   
   
     </div> 
     </div>  
  
  
  

  
  

    </div>
    <div style="float:right;width:563px;margin-left:10px;">
    

     <div id="outsideScarvesBox" class="FrontshopAXX " style="position:relative; left:0px; top:0px;" > 
 
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>

        
          <div class='' style="position:relative; height:430px; width:563px; z-index:20; border:0px solid ;border-color: #cfcfcf">

         <div id="" style="position:absolute; left:0px; top:10px;width:563px;  ">
      <div class="Normal-PC">
      <span class="Style_productName" title="" id="" ><?php echo $_smarty_tpl->tpl_vars['row']->value['Product_Name'];?>
</span></div> </div>  
     
  
         <div id="" style="position:absolute; left:-5px; top:70px;width:563px; ">
      <div class="Normal-PR"  >
      <span class="Style_productCodeA" title="" id="" >Product Code:<span class="Style_productCodeB"><?php echo $_smarty_tpl->tpl_vars['row']->value['Product_Code'];?>
 </span></span></div> </div>  

        <div id="" style="position:absolute; left:-5px; top:90px;width:563px; ">
      <div class="Normal-PR"  >
      <span class="Style_productCodeA" title="" id="" >Availability:<span class="Style_productCodeB"><?php echo $_smarty_tpl->tpl_vars['row']->value['Product_Availability'];?>
 </span></span></div> </div>  


         <div id="" style="position:absolute; left:5px; top:70px;width:563px; ">
      <div class="Normal-PL"  >
      <span class="Style_productCodeA" title="" id="" >Price each:<span class="Style_productCodeB"> <?php echo $_smarty_tpl->tpl_vars['row']->value['Product_Price_Each_Text'];?>
 </span></span></div> </div>  

        <div id="" style="position:absolute; left:5px; top:90px;width:563px; ">
      <div class="Normal-PL"  >
      <span class="Style_productCodeA" title="" id="" >Pack Size:<span class="Style_productCodeB"> <?php echo $_smarty_tpl->tpl_vars['row']->value['Product_Price_Description'];?>
 </span></span></div> </div>  


        <div id="" style="position:absolute; left:433px; top:170px;width:100px; ">
        <div class="Normal-PC Style_CONFIDENCE"  >SHOP IN CONFIDENCE</div>
         <img id="img_01" src="http://www.positivessl.com/images-new/PossitiveSSL_tl_white2.gif"  /> 
        </div>
      
      
      
  <div id="" style="position:absolute; left:100px; top:140px;width:363px; ">         
<hr>
  </div>    
     
         <div id="" style="position:absolute; left:52px; top:170px;width:563px;  ">
      <div class="Normal-PL">
      <span class="Style_overview" title="" id="" >Quick Overview</span></div> </div>                                                   
  
   
        <div id="" style="position:absolute; left:30px; top:180px;width:563px;  ">
        
        <div class="Normal-PL">
        
        <ul>
           <?php  $_smarty_tpl->tpl_vars['rowB'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rowB']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_overview']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rowB']->key => $_smarty_tpl->tpl_vars['rowB']->value) {
$_smarty_tpl->tpl_vars['rowB']->_loop = true;
?>
            <li><span class='Style_productCodeC' style='color:#<?php echo $_smarty_tpl->tpl_vars['rowB']->value['colour'];?>
' ><?php echo $_smarty_tpl->tpl_vars['rowB']->value['text'];?>
</span></li>
           <?php } ?>
        </ul>  
       </div> 
    </div>
 
           
           
    <div id="" style="position:absolute; left:230px; top:380px;  ">
            <div id="" class="letterbox" style="position:absolute; left:0px; top:5px; width:35px;height:22px; z-index:199;">     
           <input class="Noborder" name=""  onKeyPress="return numbersonly(this, event)"  id="inputbox_amount<?php echo '<?'; ?>
echo($r)<?php echo '?>'; ?>
"    type="text" class="" maxlength=3 value ="1" 
        style="position:absolute;width:30px;left:2px;top:2px;z-index:210">          
        </div>  
        
        
        
          <div  id= ""  OnClick="javascript:BuyMeNow(<?php echo '<?'; ?>
echo($r)<?php echo '?>'; ?>
 , '<?php echo '<?'; ?>
echo($info_ID)<?php echo '?>'; ?>
' , '<?php echo '<?'; ?>
echo($info_TextHead)<?php echo '?>'; ?>
' , '<?php echo '<?'; ?>
echo($info_ImageSmall)<?php echo '?>'; ?>
' )"
          onMouseOver="javascript:$('#RollBut_BuyMeNow<?php echo '<?'; ?>
echo($r)<?php echo '?>'; ?>
').attr('src','http://www.mypickandmix.com/shop/images/buyNowB.gif'); " onMouseOut="javascript:$('#RollBut_BuyMeNow<?php echo '<?'; ?>
echo($r)<?php echo '?>'; ?>
').attr('src','http://www.mypickandmix.com/shop/images/buyNowA.gif');" class="Cursor_Pointer" 
          style="position:absolute; left:50px; top:0px; width:48px; height:38px; z-index:210">
          <img id= "RollBut_BuyMeNow<?php echo '<?'; ?>
echo($r)<?php echo '?>'; ?>
" src="http://www.mypickandmix.com/shop/images/buyNowA.gif" width="74" height="36" border="0" title="" alt=""></div>  
        
        </div>
     </div>   
        
        
     <!--   <?php echo $_smarty_tpl->tpl_vars['row']->value['Product_Name'];?>
 -->

        <?php } ?> 
   </div>


    </div>
</div>




<div style="clear:both"></div>


 
 <div id="" class="FrontshopAXX " style="position:relative; left:0px; top:5px;width:973px;height:750px;  ">
 
<div  class='tab-container myTabs ' style='display:nonexxx' name='name'>
 <ul id="tabs" class="nav" '>
   <li onClick='newTab(1)' class='Cursor_Pointer' ><a >Product Description</a></li>
   <li onClick='newTab(2)' class='Cursor_Pointer'><a >Tips</a></li>
   <li onClick='newTab(5)' class='Cursor_Pointer' ><a >Q and A</a></li>
   <li onClick='newTab(3)' class='Cursor_Pointer'><a >Shipping Information</a></li>
   <li onClick='newTab(4)' class='Cursor_Pointer'><a >Terms & Conditions</a></li>
 </ul>
 <div id="content"  class='Style_productCodeD' style='overflow:hidden;padding-top:10px;padding-left:10px;padding-right:10px;padding-bottom:20px;border:1px solid ;border-color: #cfcfcf;display:nonexxx'> 
  <div id="tab1" >
   <h2><?php echo strip_tags($_smarty_tpl->tpl_vars['row']->value['Product_Name']);?>
</h2>
   
   
    <br><br>
   
   
    <?php echo $_smarty_tpl->tpl_vars['tab1_text']->value;?>

 

   
   
  </p>
  



   <p></p>
  </div>
  
  
   <div id="tab2" style='display:none'>
   <h2>Useful Tips</h2>

       <div  style="position:relative; left:640px; top:-80px; z-order:10;height:0px">
    <img src='http://3.bp.blogspot.com/-woXZaTZPBwo/UaVi0PhQ8zI/AAAAAAAAAQo/ejuh4RAS_Ek/s1600/useful-tips.png'>
    </div>

   <p>
   
    <?php echo $_smarty_tpl->tpl_vars['tab2_text']->value;?>

   
 
  </pre>

  </div>
  <div id="tab3" style='display:none'>
  <h2>Delivery</h2>
   
       <div  style="position:relative; left:600px; top:-98px; z-order:10;height:0px;">
    <img src='http://gonereading.com/newshop/wp-content/uploads/2012/01/Shipping-Information.jpg'>
    </div>


   <br><br><b>Despatch</b>
   <br>
   <br>All Scarves are despatched safely and securely.
    <br>    
     <br>All Scarves will include a sales summary of your purchase.
     <br>Weekend orders will be processed on the next working day.
     <br>   
    <br><b>Packing</b>
    <br>All Scarves are shipped in air tight packaging to keep them freash for longer.
    <br>    
     <br><b>Delivery</b>
     <br>All Scarves are despatched from our UK distribution centre.
  
      <br>We use respected couriers only - Royal Mail, City Link, Myhermes.

      <br>All orders will be processed and shipped within 48hrs of confirmed payment.
    
        <br>Larger & more expensive orders will be sent through a trackable service.

        <br>All orders will be despatched to the address held on eBay only.
        <br>
 

   
   
  </p>
  



   <p></p>  </div>
  
  
  
    <div id="tab4" style='display:none'>
   <h2>TERMS & CONDITIONS</h2>
Please read our terms of sale prior to bidding. This is important and will ensures you are happy with our terms. 
<br>We want your shopping experience with us to be a happy one.
<br>
<br><b>Payment</b>
<br>Please note once you click `buy it now` immediate Paypal payment is required.
<br>
<br><b>Packaging</b>
<br>All our Scarves are packaged as carefully as possible.
<br>
<br><b>Postage & Packing</b>
<br>We try to make sure the postage costs are the best on eBay
<br>
<br>Postage & Packing costs include the following:
<br>
<br>    Cost of the postage - Stamps!
<br>
<br>    Packaging costs including bags, boxes, and other packing materials 
<br>
 <br>   Cost of picking and preparing your order, well we are my pick and mix
<br>


    <b>RETURNS POLICY</b>
<br>
<br>All products and Scarves are individually inspected before being dispatched, to ensure items are  sent out in perfect condition.
<br>In the unlikely event that your Scarves are not right, please just return them to us within 7 days of receipt in its original condition. Upon inspection, we will be happy to replace, or refund you.
<br>
<br>All returned items or Scarves must be authorised and sent back to us with proof of delivery. Any return postage costs will be refunded at our discretion only
<br>
<br>We want to ensure you are always happy when shopping with us.<br>To ensure this, we offer our <big><strong><b><i>absolute satisfaction</b></i></strong></big> guarantee where you can return any unopened item or Scarves within 14 days of the date of your receipt of your order. 
<br> <br>
  </div>

    <div id="tab5" style='display:none'>

   
   <h2>Q & A</h2>
   
         <div  style="position:relative; left:700px; top:-60px; z-order:10;height:0px">
    <img src='http://www.mypickandmix.com/ebayTesting/images/qanda.jpg'>
    </div>
<br>
<?php echo $_smarty_tpl->tpl_vars['tab3_text']->value;?>
 
  

    
 </div>
</div>
   


</div>
</body>
</html><?php }} ?>
