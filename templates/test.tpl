{config_load file="setting.conf"}
<html>
  <head>
    <title>{#pageTitle#}</title>
    
<style>


div.sweetBox 
{
float:left;
height:165px;
margin:8px;
background-color:#ffffff;
}

 div.FrontshopAXX
  {
  width:995px;

  margin:0px 0px;
  background-color:#ffffff;
  border:0px solid #888888;
  


  }
  
  div.center {   margin-left: auto;   margin-right: auto; }
  
 
  .Style_productName
        {
        font-family: Arial, sans-serif; font-size:20.0px; 
        line-height:80%;display:block; color:#000000;
        } 
  .Style_productPriceBanner
        {
        font-family: Arial, sans-serif; font-size:20.0px; 
        line-height:80%;display:block; color:#000000;
        }
  .Style_productPrice
        {
        font-family: Arial, sans-serif; font-size:18.0px; 
        line-height:80%;display:block; color:#002000;
        }    
div.myTabs{

text-align:left
}

img.myTabs2{

text-align:left;
    border:1px solid #888888;
  border-radius:4px;
}        
        
div.rotateP
{
float:left;
-ms-transform:rotate(-42deg); /* IE 9 */
-moz-transform:rotate(-42deg); /* Firefox */
-webkit-transform:rotate(-42deg); /* Safari and Chrome */
-o-transform:rotate(-42deg); /* Opera */
transform:rotate(-42deg);
filter:inherit;
}
       
 .Normal-P
        {
        margin:0.0px 0.0px 0.0px 0.0px; text-align:left; font-weight:400; 
        }
.Normal-P0
        {
        margin:0.0px 0.0px 0.0px 0.0px; text-align:center; font-weight:400; 
        }
.Normal-PL
        {
        margin:0.0px 0.0px 0.0px 0.0px; text-align:left; font-weight:400; 
        }
.Normal-PC
        {
        margin:0.0px 0.0px 0.0px 0.0px; text-align:center; font-weight:400; 
        }
.Normal-PR
        {
        margin:0.0px 0.0px 0.0px 0.0px; text-align:right; font-weight:400; 
        }                           

</style>



  </head>
  
  

  <body bgcolor="{#bodyColor#}">

    
    <br><br><br>
      <div id="LestSideBox"  style="position:relative; left:0px; top:0px;width:220px;height:0px;" > 

          <div id="LestSideBoxInside" class="FrontshopAXX " style="position:relative; left:0px; top:8px;width:215px;height:300px;" > 
               Search For Scarves By
          </div>
     </div>   
     <div id="outsideSweetsBox" class="FrontshopAXX " style="position:relative; left:220px; top:0px;width:733px;" > 
 
        {foreach $result as $row}
        <!--
            <option {if $row.id == $smarty.get.id}selected{/if} value="{$row.id}">{$row.name}</option>
        -->
        
          <div class='sweetBox' style="position:relative; width:220px;height:370px; z-index:20; border:1px solid gray">

               <div id="ShowPriceI_0" style="position:absolute;width:135px;left:0px;height:45px;top:0px;border:0px solid black;z-index:11">
          <img class="" id='sideImgP_0' src="http://mypickandmix.com/aw/hip/images/sidePriceBanHip.gif" style="border:0px solid blue;border-color:#808080;width:95px;height:90px;" > 
      </div>
      
         <div id="ShowPriceT_0"  class="rotateP"  style="position:absolute;width:75px;left:2px;height:45px;top:16px;border:0px solid pink;z-index:11">
              <div class="Normal-PC" >
    <span class="Style_productPriceBanner" title="" id='' >{$row.Product_Price_Each_Text}</span></div> </div>
      
    <div id="" class="boxForshopPage" style="position:absolute; left:0px; top:0px;width:180px; height:336px " > </div> 
        <div class="Cursor_Pointer" style="position:absolute; left:{$row.offset_left}px; top:{$row.offset_top + 12}px; width:80px; height:80px ;z-index:10">
        <a href="http://www.mypickandmix.com/shop/images/SweetPicsEachLarge/xxx" title=""><img  src="http://www.mypickandmix.com/aw/hip/_code/showimg.php?id={$row.Product_Main_Image_Key}" title="" width="{$row.Image_Width}" height="{$row.Image_Height}" border="0"  alt=""></a></div>
    
                                                 
  
   
        <div id="" style="position:absolute; left:10px; top:230px ;width:200px; ">
      <div class="Normal-PC">
      <span class="text_shop2" title="" id="" >{$row.Product_Name}</span></div> </div>  
      
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
 
  </body>
</html>