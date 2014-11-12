{extends file="layout_blocks/layout_blocks_product_list.tpl"}


 

{block name=title}Product List{/block}
{block name=head}

  <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
  <link href="http://www.mypickandmix.com/aw/hip/css/product_list.css" rel="stylesheet" type="text/css"/>
   <script src="js/jquery-1.10.2.min.js"></script>
   
   
   <script type="text/javascript" src="js/jquery.navgoco.min.js"></script>
   <link href="js/jquery.navgoco.css" rel="stylesheet" type="text/css"/>

   <script type="text/javascript" src="js/perfect-scrollbar.js"></script>
   <link href="js/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
   
      
   <script type="text/javascript" src="js/sidePanel.js"></script>
   
   
   <script src="js/jquery.cookie.js"></script>
   
{/block}

{block name=headerA}
      {include file="layout_blocks/header.tpl"}  
{/block} 
 

{block name=productLeftSidePanel}
       
      <div id="LestSideBox"  style="position:relative; left:0px; top:0px;width:220px;height:0px;" > 

          <div id="LestSideBoxInside" class="FrontshopAXX " style="position:relative; left:0px; top:0px;width:215px;height:750px;overflow:hiddenx" > 
            <div class="Normal-PC Style_sideInfoPan2">Shopping Options</div>
      
          
             <div class="Cursor_Pointer" id="expandAll" style='position:absolute;left:2px; top:0px;;height:0px;' ><big>+</big></div>
          
                
             <div class="Cursor_Pointer" id="collapseAll" style='position:absolute;left:20px; top:-2px;;height:0px;' ><big>-</big></div>
       
<ul id="demo1" class="nav">
  {foreach $left_Panel_Links as $row}
	<li><a href='#' class='Style_sideInfoPan1' >{$row.cat_Name}</a>
		<ul>
    {foreach from=$row.sub_cat_Names  key=key item=value}
			<li  ><a  href="{$value.href}" onClick='linkTo("{$value.href}")' class='Style_sideInfoPan3'> {$value.name}</a></li>
    {/foreach}

		</ul>
	</li>
  {/foreach}
  
	<li><a href='#' class='Style_sideInfoPan1' > Shop By Colour</a>
		<ul>
        <div id=""  style="position:relative; ;width:120px;" > 
        	<table border="0" cellspacing="4" cellpadding="0" bgcolor="#fff">
          
         
          <tr>
          {foreach $color_Links as $row key=key}
      
              {if $key %6 == 0 }
                 <tr>
              {/if}
            	
            	<td bgcolor="#{$row.colourHash}" class="SelectedColour" >
            	<div class="Cursor_Pointer"  onClick='linkTo("{$row.href}")'>
            	<img src="images/blanka.gif" width="20" height="20">
            	</div>
            	</td>
    
              {/foreach}
              </tr>
              
              {foreach $color_Links as $row key=key}
               {if $key %6 == 0 }
                 </tr>
               {/if}         
          
          {/foreach}
          
          
          </tr></tr>
        	</table>
     </div>
		</ul>
	</li>  
  
  

</ul>          
          
          
</div>    



    
          
          
   <!--       
      xxxxxxxxxxx
      {foreach $left_Panel_Links as $row}
      <br>o{$row.sub_cat_Names}o<br> 
      {foreach from=$row.sub_cat_Names  key=key item=value}
       <br>{$value.name}:::<br>
      {/foreach}
       i
         {$row.href}
      {/foreach}
          
  -->        
          
          
     </div> 
     

{/block}




{block name=productlist}

     <div id="outsideSweetsBox" class="FrontshopAXX " style="position:relative; left:220px; top:0px;width:733px;" > 
 
        {foreach $result as $row}
        <!--
            <option {if $row.id == $smarty.get.id}selected{/if} value="{$row.id}">{$row.name}</option>
        -->
        
          <div class='sweetBox' style="position:relative; width:220px;height:370px; z-index:20; border:1px solid ;border-color: #cfcfcf">

               <div id="ShowPriceI_0" style="position:absolute;width:135px;left:0px;height:45px;top:0px;border:0px solid black;z-index:11">
          <img class="" id='sideImgP_0' src="http://mypickandmix.com/aw/hip/images/sidePriceBanHip.gif" style="border:0px solid blue;border-color:#808080;width:95px;height:90px;" > 
      </div>
      
         <div id="ShowPriceT_0"  class="rotateP"  style="position:absolute;width:75px;left:2px;height:45px;top:16px;border:0px solid pink;z-index:11">
              <div class="Normal-PC" >
    <span class="Style_productPriceBanner" title="" id='' >{$row.Product_Price_Each_Text}</span></div> </div>
      
    <div id="" class="boxForshopPage" style="position:absolute; left:0px; top:0px;width:180px; height:336px " > </div> 
        <div class="Cursor_Pointer" style="position:absolute; left:{$row.offset_left}px; top:{$row.offset_top + 12}px; width:80px; height:80px ;z-index:10">
        <a href="{$row.Product_href}" onClick='linkTo("{$row.Product_href}")' title=""><img  src="{$row.Product_Main_Image_Key}" title="" width="{$row.Image_Width}" height="{$row.Image_Height}" border="0"  alt=""></a></div>
    
                                                 
  
   
        <div id="" style="position:absolute; left:10px; top:230px ;width:200px; ">
      <div class="Normal-PC">
      <span class="text_shop2 Style_productName" title="" id="" >{$row.Product_Name}</span></div> </div>  
      
        <div id="" style="position:absolute; left:2px; top:280px ;width:176px; ">
      <div class="Normal-PC">
      <span class="StyleRancho2" title="" id="" ></span></div> </div> 
      
       
         <div id="" style="position:absolute; left:10px; top:290px ;width:200px;display:nonex ">
      <div class="Normal-PC">
      <span class="Style_productPrice" title="" id="" >{$row.Product_Price_Description}</span></div> </div>            
     
     
 
     
              
           
  
            <div id="" class="letterbox" style="position:absolute; left:64px; top:325px; width:35px;height:22px; z-index:199;">     
           <input class="Noborder" name=""  onKeyPress="return numbersonly(this, event)"  id="inputbox_amount<?echo($r)?>"    type="text" class="" maxlength=3 value ="1" 
        style="position:absolute;width:30px;left:2px;top:2px;z-index:210">          
        </div>  
        
        
        
          <div  id= ""  OnClick="javascript:BuyMeNow(<?echo($r)?> , '<?echo($info_ID)?>' , '<?echo($info_TextHead)?>' , '<?echo($info_ImageSmall)?>' )"
          onMouseOver="javascript:$('#RollBut_BuyMeNow<?echo($r)?>').attr('src','http://www.mypickandmix.com/shop/images/buyNowB.gif'); " onMouseOut="javascript:$('#RollBut_BuyMeNow<?echo($r)?>').attr('src','http://www.mypickandmix.com/shop/images/buyNowA.gif');" class="Cursor_Pointer" 
          style="position:absolute; left:102px; top:318px; width:48px; height:38px; z-index:210">
          <img id= "RollBut_BuyMeNow<?echo($r)?>" src="http://www.mypickandmix.com/shop/images/buyNowA.gif" width="74" height="36" border="0" title="" alt=""></div>  
        
        </div>
        
        
        
     <!--   {$row.Product_Name} -->

        {/foreach} 
   </div>

{/block}