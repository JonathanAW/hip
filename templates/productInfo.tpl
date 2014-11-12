{extends file="layout_blocks/layout_blocks_product_info.tpl"}
{block name=title}Product List{/block}
{block name=head}

  <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
  
  <link href="http://www.mypickandmix.com/aw/hip/css/product_info.css" rel="stylesheet" type="text/css"/>
   <script src="js/jquery-1.10.2.min.js"></script>
   
   
   <script type="text/javascript" src="js/jquery.navgoco.min.js"></script>
   
   <!--
   <link href="js/jquery.navgoco.css" rel="stylesheet" type="text/css"/>
   -->

   
   <script type="text/javascript" src="js/jquery.elevatezoom.js"></script>
      
   <script type="text/javascript" src="js/productInfo.js"></script>
   
   <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'> 
   <script src="js/jquery.cookie.js"></script>
   
{/block}
{block name=productInfoLeftSidePanel}

      <div id="LestSideBox"  style="position:relative; left:0px; top:0px;;height:0px;" > 

          <div id="LestSideBoxInside" class="FrontshopAXX " style="position:relative; left:0px; top:0px;height:430px;overflow:hiddenx" > 
 {foreach $result as $row} 
        <div class="Cursor_Pointer" style="position:relative; left:{$row.offset_left}px; top:{$row.offset_top + 12}px; width:80px; height:315px ;z-index:10">
        <a title=""><img  id='zoom_01' src="https://www.ancientwisdom.biz/public_image.php?id={$row.Product_Main_Image_Key}" data-zoom-image="{$row.Image_Filename}" title="" width="{$row.Image_Width}" height="{$row.Image_Height}" border="0"  alt=""></a></div>
 {/foreach} 


 <div class='Normal-PL Style_productPrice' style='position:relative;left:10px;top:6px'  > More views</div>  
    <hr>  
 
 <div class='smallImgBoxWapper' id="gallery_01">  
 {foreach $info_extra_images as $row} 
<!-- 
              <div class="Cursor_Pointer smallImgBox" style="position:relative; left:0px; top:0px; width:70px; height:70px ;z-index:10">
        <a href="{$row.Product_href}" onClick='changeImage("{$row.url_large}")' title=""><img  src="http://www.mypickandmix.com/aw/hip/_code/showimg.php?id={$row.url_small}" title="" width="70" height="70" border="0"  alt=""></a></div>
-->
    <div class="Cursor_Pointer smallImgBox" style="position:relative; left:0px; top:0px; width:70px; height:70px ;z-index:10">

         <a href="#" data-image="https://www.ancientwisdom.biz/public_image.php?id={$row.url_small}" data-zoom-image="{$row.url_large}" > 
         <img id="img_01" src="https://www.ancientwisdom.biz/public_image.php?id={$row.url_small}" width="70" height="70" /> 
         </a>
   </div>

  {/foreach} 
 </div>
 
 
 
   
   
     </div> 
     </div>  
  
  
  

  
  
{/block}




{block name=productlist}

     <div id="outsideScarvesBox" class="FrontshopAXX " style="position:relative; left:0px; top:0px;" > 
 
        {foreach $result as $row}

        
          <div class='' style="position:relative; height:430px; width:563px; z-index:20; border:0px solid ;border-color: #cfcfcf">

         <div id="" style="position:absolute; left:0px; top:10px;width:563px;  ">
      <div class="Normal-PC">
      <span class="Style_productName" title="" id="" >{$row.Product_Name}</span></div> </div>  
     
  
         <div id="" style="position:absolute; left:-5px; top:70px;width:563px; ">
      <div class="Normal-PR"  >
      <span class="Style_productCodeA" title="" id="" >Product Code:<span class="Style_productCodeB">{$row.Product_Code} </span></span></div> </div>  

        <div id="" style="position:absolute; left:-5px; top:90px;width:563px; ">
      <div class="Normal-PR"  >
      <span class="Style_productCodeA" title="" id="" >Availability:<span class="Style_productCodeB">{$row.Product_Availability} </span></span></div> </div>  


         <div id="" style="position:absolute; left:5px; top:70px;width:563px; ">
      <div class="Normal-PL"  >
      <span class="Style_productCodeA" title="" id="" >Price each:<span class="Style_productCodeB"> {$row.Product_Price_Each_Text} </span></span></div> </div>  

        <div id="" style="position:absolute; left:5px; top:90px;width:563px; ">
      <div class="Normal-PL"  >
      <span class="Style_productCodeA" title="" id="" >Pack Size:<span class="Style_productCodeB"> {$row.Product_Price_Description} </span></span></div> </div>  


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
           {foreach $info_overview as $rowB}
            <li><span class='Style_productCodeC' style='color:#{$rowB.colour}' >{$rowB.text}</span></li>
           {/foreach}
        </ul>  
       </div> 
    </div>
 
           
           
    <div id="" style="position:absolute; left:230px; top:380px;  ">
            <div id="" class="letterbox" style="position:absolute; left:0px; top:5px; width:35px;height:22px; z-index:199;">     
           <input class="Noborder" name=""  onKeyPress="return numbersonly(this, event)"  id="inputbox_amount<?echo($r)?>"    type="text" class="" maxlength=3 value ="1" 
        style="position:absolute;width:30px;left:2px;top:2px;z-index:210">          
        </div>  
        
        
        
          <div  id= ""  OnClick="javascript:BuyMeNow(<?echo($r)?> , '<?echo($info_ID)?>' , '<?echo($info_TextHead)?>' , '<?echo($info_ImageSmall)?>' )"
          onMouseOver="javascript:$('#RollBut_BuyMeNow<?echo($r)?>').attr('src','http://www.mypickandmix.com/shop/images/buyNowB.gif'); " onMouseOut="javascript:$('#RollBut_BuyMeNow<?echo($r)?>').attr('src','http://www.mypickandmix.com/shop/images/buyNowA.gif');" class="Cursor_Pointer" 
          style="position:absolute; left:50px; top:0px; width:48px; height:38px; z-index:210">
          <img id= "RollBut_BuyMeNow<?echo($r)?>" src="http://www.mypickandmix.com/shop/images/buyNowA.gif" width="74" height="36" border="0" title="" alt=""></div>  
        
        </div>
     </div>   
        
        
     <!--   {$row.Product_Name} -->

        {/foreach} 
   </div>

{/block}


{block name=bottomInfo}
 
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
   <h2>{strip_tags($row.Product_Name)}</h2>
   
   
    <br><br>
   
   
    {$tab1_text}
 

   
   
  </p>
  



   <p></p>
  </div>
  
  
   <div id="tab2" style='display:none'>
   <h2>Useful Tips</h2>

       <div  style="position:relative; left:640px; top:-80px; z-order:10;height:0px">
    <img src='http://3.bp.blogspot.com/-woXZaTZPBwo/UaVi0PhQ8zI/AAAAAAAAAQo/ejuh4RAS_Ek/s1600/useful-tips.png'>
    </div>

   <p>
   
    {$tab2_text}
   
 
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
{$tab3_text} 
  

    
 </div>
</div>
   
{/block}
