<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-12 09:30:29
         compiled from "./templates/productLists.tpl" */ ?>
<?php /*%%SmartyHeaderCode:870872523545258480375a2-05449066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '441037f11355fda6bd97b6c220f893d4f7cd42ea' => 
    array (
      0 => './templates/productLists.tpl',
      1 => 1415809827,
      2 => 'file',
    ),
    '00fe1f2ebfe318f65c18939cae85564780b6f826' => 
    array (
      0 => './templates/layout_blocks/layout_blocks_product_list.tpl',
      1 => 1415806988,
      2 => 'file',
    ),
    '87a0af62da715a588be30d88f2e214384b1ed2cc' => 
    array (
      0 => './templates/layout_blocks/header.tpl',
      1 => 1415799100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '870872523545258480375a2-05449066',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_545258481b3bd5_30849147',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545258481b3bd5_30849147')) {function content_545258481b3bd5_30849147($_smarty_tpl) {?> <?php  $_config = new Smarty_Internal_Config("setting.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>

<html>
<head>
  <title><?php echo $_smarty_tpl->getConfigVariable('pageTitle');?>
</title>
  

  <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
  <link href="http://www.mypickandmix.com/aw/hip/css/product_list.css" rel="stylesheet" type="text/css"/>
   <?php echo '<script'; ?>
 src="js/jquery-1.10.2.min.js"><?php echo '</script'; ?>
>
   
   
   <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.navgoco.min.js"><?php echo '</script'; ?>
>
   <link href="js/jquery.navgoco.css" rel="stylesheet" type="text/css"/>

   <?php echo '<script'; ?>
 type="text/javascript" src="js/perfect-scrollbar.js"><?php echo '</script'; ?>
>
   <link href="js/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
   
      
   <?php echo '<script'; ?>
 type="text/javascript" src="js/sidePanel.js"><?php echo '</script'; ?>
>
   
   
   <?php echo '<script'; ?>
 src="js/jquery.cookie.js"><?php echo '</script'; ?>
>
   

</head>
<body bgcolor="<?php echo $_smarty_tpl->getConfigVariable('bodyColor');?>
" >
<div id="xyz_main">

      <?php /*  Call merged included template "layout_blocks/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout_blocks/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '870872523545258480375a2-05449066');
content_54638b25934fb1_25890576($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "layout_blocks/header.tpl" */?>  

<br> <br><br><br><br>

       
      <div id="LestSideBox"  style="position:relative; left:0px; top:0px;width:220px;height:0px;" > 

          <div id="LestSideBoxInside" class="FrontshopAXX " style="position:relative; left:0px; top:0px;width:215px;height:750px;overflow:hiddenx" > 
            <div class="Normal-PC Style_sideInfoPan2">Shopping Options</div>
      
          
             <div class="Cursor_Pointer" id="expandAll" style='position:absolute;left:2px; top:0px;;height:0px;' ><big>+</big></div>
          
                
             <div class="Cursor_Pointer" id="collapseAll" style='position:absolute;left:20px; top:-2px;;height:0px;' ><big>-</big></div>
       
<ul id="demo1" class="nav">
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['left_Panel_Links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<li><a href='#' class='Style_sideInfoPan1' ><?php echo $_smarty_tpl->tpl_vars['row']->value['cat_Name'];?>
</a>
		<ul>
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value['sub_cat_Names']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<li  ><a  href="<?php echo $_smarty_tpl->tpl_vars['value']->value['href'];?>
" onClick='linkTo("<?php echo $_smarty_tpl->tpl_vars['value']->value['href'];?>
")' class='Style_sideInfoPan3'> <?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a></li>
    <?php } ?>

		</ul>
	</li>
  <?php } ?>
  
	<li><a href='#' class='Style_sideInfoPan1' > Shop By Colour</a>
		<ul>
        <div id=""  style="position:relative; ;width:120px;" > 
        	<table border="0" cellspacing="4" cellpadding="0" bgcolor="#fff">
          
         
          <tr>
          <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['color_Links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
      
              <?php if ($_smarty_tpl->tpl_vars['key']->value%6==0) {?>
                 <tr>
              <?php }?>
            	
            	<td bgcolor="#<?php echo $_smarty_tpl->tpl_vars['row']->value['colourHash'];?>
" class="SelectedColour" >
            	<div class="Cursor_Pointer"  onClick='linkTo("<?php echo $_smarty_tpl->tpl_vars['row']->value['href'];?>
")'>
            	<img src="images/blanka.gif" width="20" height="20">
            	</div>
            	</td>
    
              <?php } ?>
              </tr>
              
              <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['color_Links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
               <?php if ($_smarty_tpl->tpl_vars['key']->value%6==0) {?>
                 </tr>
               <?php }?>         
          
          <?php } ?>
          
          
          </tr></tr>
        	</table>
     </div>
		</ul>
	</li>  
  
  

</ul>          
          
          
</div>    



    
          
          
   <!--       
      xxxxxxxxxxx
      <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['left_Panel_Links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
      <br>o<?php echo $_smarty_tpl->tpl_vars['row']->value['sub_cat_Names'];?>
o<br> 
      <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value['sub_cat_Names']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
       <br><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
:::<br>
      <?php } ?>
       i
         <?php echo $_smarty_tpl->tpl_vars['row']->value['href'];?>

      <?php } ?>
          
  -->        
          
          
     </div> 
     





     <div id="outsideSweetsBox" class="FrontshopAXX " style="position:relative; left:220px; top:0px;width:733px;" > 
 
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
        <!--
            <option <?php if ($_smarty_tpl->tpl_vars['row']->value['id']==$_GET['id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</option>
        -->
        
          <div class='sweetBox' style="position:relative; width:220px;height:370px; z-index:20; border:1px solid ;border-color: #cfcfcf">

               <div id="ShowPriceI_0" style="position:absolute;width:135px;left:0px;height:45px;top:0px;border:0px solid black;z-index:11">
          <img class="" id='sideImgP_0' src="http://mypickandmix.com/aw/hip/images/sidePriceBanHip.gif" style="border:0px solid blue;border-color:#808080;width:95px;height:90px;" > 
      </div>
      
         <div id="ShowPriceT_0"  class="rotateP"  style="position:absolute;width:75px;left:2px;height:45px;top:16px;border:0px solid pink;z-index:11">
              <div class="Normal-PC" >
    <span class="Style_productPriceBanner" title="" id='' ><?php echo $_smarty_tpl->tpl_vars['row']->value['Product_Price_Each_Text'];?>
</span></div> </div>
      
    <div id="" class="boxForshopPage" style="position:absolute; left:0px; top:0px;width:180px; height:336px " > </div> 
        <div class="Cursor_Pointer" style="position:absolute; left:<?php echo $_smarty_tpl->tpl_vars['row']->value['offset_left'];?>
px; top:<?php echo $_smarty_tpl->tpl_vars['row']->value['offset_top']+12;?>
px; width:80px; height:80px ;z-index:10">
        <a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['Product_href'];?>
" onClick='linkTo("<?php echo $_smarty_tpl->tpl_vars['row']->value['Product_href'];?>
")' title=""><img  src="<?php echo $_smarty_tpl->tpl_vars['row']->value['Product_Main_Image_Key'];?>
" title="" width="<?php echo $_smarty_tpl->tpl_vars['row']->value['Image_Width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['row']->value['Image_Height'];?>
" border="0"  alt=""></a></div>
    
                                                 
  
   
        <div id="" style="position:absolute; left:10px; top:230px ;width:200px; ">
      <div class="Normal-PC">
      <span class="text_shop2 Style_productName" title="" id="" ><?php echo $_smarty_tpl->tpl_vars['row']->value['Product_Name'];?>
</span></div> </div>  
      
        <div id="" style="position:absolute; left:2px; top:280px ;width:176px; ">
      <div class="Normal-PC">
      <span class="StyleRancho2" title="" id="" ></span></div> </div> 
      
       
         <div id="" style="position:absolute; left:10px; top:290px ;width:200px;display:nonex ">
      <div class="Normal-PC">
      <span class="Style_productPrice" title="" id="" ><?php echo $_smarty_tpl->tpl_vars['row']->value['Product_Price_Description'];?>
</span></div> </div>            
     
     
 
     
              
           
  
            <div id="" class="letterbox" style="position:absolute; left:64px; top:325px; width:35px;height:22px; z-index:199;">     
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
          style="position:absolute; left:102px; top:318px; width:48px; height:38px; z-index:210">
          <img id= "RollBut_BuyMeNow<?php echo '<?'; ?>
echo($r)<?php echo '?>'; ?>
" src="http://www.mypickandmix.com/shop/images/buyNowA.gif" width="74" height="36" border="0" title="" alt=""></div>  
        
        </div>
        
        
        
     <!--   <?php echo $_smarty_tpl->tpl_vars['row']->value['Product_Name'];?>
 -->

        <?php } ?> 
   </div>



</div>
</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-12 09:30:29
         compiled from "./templates/layout_blocks/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54638b25934fb1_25890576')) {function content_54638b25934fb1_25890576($_smarty_tpl) {?>
    cooooooooooooooo
<?php }} ?>
