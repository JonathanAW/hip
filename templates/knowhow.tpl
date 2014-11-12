{extends file="layout_blocks/layout_blocks_knowhow.tpl"}
{block name=title}Product List{/block}
{block name=head}


 <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
 <link href="http://www.mypickandmix.com/aw/hip/css/knowhow.css" rel="stylesheet" type="text/css"/>
   <script src="js/jquery-1.10.2.min.js"></script>


   <script type="text/javascript" src="js/sly.min.js"></script>
   <script type="text/javascript" src="js/knowhow.js"></script>
   
   
   
{/block}




{block name=panelA}
	<div class="pagespan container" style='width:973px;'>
		<div class="wrap">
			<h2 class="Normal-PC Style_scrollhaederText">Our Guide For How To Tie A Scarve</small></h2>

      <br>
			<div class="frame effectsA" id="topPanel">
				<ul class="clearfix">
			
          
          <li onClick='showSet(1)' >  <img id="" src="images/knowhow/knowHow1.png" style='width:230px;height:185px'>
          <div style='position: absolute;top:195px;left:0px;width:220px;z-order:99' class='Style_scrollAtext Normal-PC' >Bandana</div></li>

           <li onClick='showSet(2)'>  <img id="" src="images/knowhow/knowHow2.png" style='width:230px;height:185px'>
          <div style='position: absolute;top:195px;left:0px;width:220px;z-order:99' class='Style_scrollAtext Normal-PC' >Circle</div></li>

          <li onClick='showSet(3)'>  <img id="" src="images/knowhow/knowHow3.png" style='width:230px;height:185px'>
          <div style='position: absolute;top:195px;left:0px;width:220px;z-order:99' class='Style_scrollAtext Normal-PC' >Head: Set 1</div></li>

          <li onClick='showSet(4)'>  <img id="" src="images/knowhow/knowHow11.png" style='width:230px;height:185px'>
          <div style='position: absolute;top:195px;left:0px;width:220px;z-order:99' class='Style_scrollAtext Normal-PC' >Head: Set 2</div></li>


          <li onClick='showSet(5)'>  <img id="" src="images/knowhow/knowHow4.png" style='width:230px;height:185px'>
          <div style='position: absolute;top:195px;left:0px;width:220px;z-order:99' class='Style_scrollAtext Normal-PC' >Rectangle Set 1</div></li>

          <li onClick='showSet(6)'>  <img id="" src="images/knowhow/knowHow4c.png" style='width:230px;height:185px'>
          <div style='position: absolute;top:195px;left:0px;width:220px;z-order:99' class='Style_scrollAtext Normal-PC' >Rectangle Set 2</div></li>


          <li onClick='showSet(7)'>  <img id="" src="images/knowhow/knowHow5.png" style='width:230px;height:185px'>
          <div style='position: absolute;top:195px;left:0px;width:220px;z-order:99' class='Style_scrollAtext Normal-PC' >Neck</div></li>

          <li onClick='showSet(8)'>  <img id="" src="images/knowhow/knowHow6.png" style='width:230px;height:185px'>
          <div style='position: absolute;top:195px;left:0px;width:220px;z-order:99' class='Style_scrollAtext Normal-PC' >Skinny</div></li>

          <li onClick='showSet(9)'>  <img id="" src="images/knowhow/knowHow7.png" style='width:230px;height:185px'>
          <div style='position: absolute;top:195px;left:0px;width:220px;z-order:99' class='Style_scrollAtext Normal-PC' >Thin</div></li>


          <li onClick='showSet(10)'>  <img id="" src="images/knowhow/knowHow9.png" style='width:230px;height:185px'>
          <div style='position: absolute;top:195px;left:0px;width:220px;z-order:99' class='Style_scrollAtext Normal-PC' >Winter</div></li>

          <li onClick='showSet(11)'>  <img id="" src="images/knowhow/knowHow10.png" style='width:230px;height:185px'>
          <div style='position: absolute;top:195px;left:0px;width:220px;z-order:99' class='Style_scrollAtext Normal-PC' >Square</div></li>

 

				</ul>
			</div>

			<div class="controls center" style='display:none'>
				<button class="btn prev"><i class="icon-chevron-left"></i> prev</button>
				<button class="btn next">next <i class="icon-chevron-right"></i></button>
			</div>
		</div>
    
		<div class="wrap">


			<div class="frame effects" id="secondPanel" style='display:none'>
				<ul class="clearfix">
				
       {for $r=1 to 20} 
          <li id='scrollInfoB_{$r}' onClick='showSetText({$r})'>  <img id='scrollInfoImg_{$r}' src="images/blanka.gif" style='width:230px;height:120px'>
          <div id='scrollInfoText_{$r}' style='position: absolute;top:125px;left:0px;width:220px;z-order:99' class='Style_scrollAtext Normal-PC' ></div></li>
       {/for}




				</ul>
			</div>


    

        
</div>  

		<div class="wrap">


			<div class="frame effects" id="thirdPanel" style='display:none'>
				<ul class="clearfix">
				
        {for $r=1 to 5} 
          <li id='scrollInfoWraper_{$r}'><img id="" src="images/knowhow/SetBorder.png" style='width:228px;height:120px'> 
          <div id='scrollInfoTextChead_{$r}' style='position: absolute;top:20px;left:0px;width:220px;z-order:99' class='Style_scrollAtextB Normal-PC' >type....</div> 
          <div id='scrollInfoTextCmid_{$r}' style='position: absolute;top:45px;left:15px;width:210px;z-order:99' class='Style_scrollAtextC Normal-PL' >  </div>  
          <div id='scrollInfoTextCbottom_{$r}' style='position: absolute;top:125px;left:0px;width:220px;z-order:99' class='Style_scrollAtext Normal-PC' >Stage 0</div></li>
       {/for}
       

				</ul>
			</div>


    

        
</div> 


{/block}




{block name=productlist}

 

{/block}