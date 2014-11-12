
$(document).ready(function(){



jQuery(function($){
	'use strict';



	// -------------------------------------------------------------
	//   Effects
	// -------------------------------------------------------------
	(function () {
		var $frame = $('#topPanel');
		var $wrap  = $frame.parent();

		// Call Sly on frame
		$frame.sly({
			horizontal: 1,
			itemNav: 'forceCentered',
			smart: 1,
			activateMiddle: 1,
			activateOn: 'click',
			mouseDragging: 1,
			touchDragging: 1,
			releaseSwing: 1,
			startAt: 3,
			scrollBar: $wrap.find('.scrollbar'),
			scrollBy: 1,
			speed: 300,
			elasticBounds: 1,
			easing: 'swing',
			dragHandle: 1,
			dynamicHandle: 1,
			clickBar: 1,

			// Buttons
			prev: $wrap.find('.prev'),
			next: $wrap.find('.next')
		});
    
    
    		var $frame = $('#secondPanel');
		var $wrap  = $frame.parent();

		// Call Sly on frame
		$frame.sly({
			horizontal: 1,
			itemNav: 'forceCentered',
			smart: 1,
			activateMiddle: 1,
			activateOn: 'click',
			mouseDragging: 1,
			touchDragging: 1,
			releaseSwing: 1,
			startAt: 3,
			scrollBar: $wrap.find('.scrollbar'),
			scrollBy: 1,
			speed: 300,
			elasticBounds: 1,
			easing: 'swing',
			dragHandle: 1,
			dynamicHandle: 1,
			clickBar: 1,

			// Buttons
			prev: $wrap.find('.prev'),
			next: $wrap.find('.next')
		});
    
    
    		var $frame = $('#thirdPanel');
		var $wrap  = $frame.parent();

		// Call Sly on frame
		$frame.sly({
			horizontal: 1,
			itemNav: 'forceCentered',
			smart: 1,
			activateMiddle: 1,
			activateOn: 'click',
			mouseDragging: 1,
			touchDragging: 1,
			releaseSwing: 1,
			startAt: 0,
			scrollBar: $wrap.find('.scrollbar'),
			scrollBy: 1,
			speed: 300,
			elasticBounds: 1,
			easing: 'swing',
			dragHandle: 1,
			dynamicHandle: 1,
			clickBar: 1,

			// Buttons
			prev: $wrap.find('.prev'),
			next: $wrap.find('.next')
		});    
    
    
    
    
    
    
    
	}());


});


 
 
});


function updateSecondPanel(){

 
 $('#img_01').attr('src','http://www.gracese.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/1/_/1_276_43.jpg')

}


var keep_setOn = 0;
var keep_onShow = 0;
var keep_onShowB = 0;
var keep_textList = '';
function showSet(newSetID){



  $('#thirdPanel').hide()
  keep_onShowB = 0;
   
  if(keep_onShow == 0){
   $('#secondPanel').fadeIn(6000)
  }

   keep_onShow = 1;
   keep_setOn = newSetID;
   
    newText = 'Bandana Wrap,Forehead Wrap,Muffer,Ascot Wrap,Frenc Knot,Square Knot,Ponytail Wrap'; 
    newText = newText+';NL;Knotty Twist,Bolero,Head Loop,Triple Loop,Double Loop';
    newText = newText+';NL;Up In Knots,Twisty Turban,Twisted Crown,Twist & Shout,To Be or Not to Be,Side Scarf Pony,Oversized Chignon,My Little Pony,Miss Knotty,Middle of Everywhere,Little Bow Peep,Knotty Twist,Knotty But Nice,Knotted & Nautical,Itty Bitty Bow,Heidi Braid';
    newText = newText+';NL;Ahoy Matey,A Knot in My Hair,Headband,Head Wrap,Rosette Wrap,Head Loop,Bandana Wrap,Forehead Wrap,Ponytail Wrap';
    newText = newText+';NL;Up In Knots,Twisty Turban,Twisted Crown,Twist & Shout,To Be or Not to Be,Side Scarf Pony,Oversized Chignon,My Little Pony,Miss Knotty,Middle of Everywhere,Little Bow Peep,Knotty But Nice,Knotted & Nautical,Heidi Braid,Do The Twist,Criss Cross,All Twisted Up,A Knot in My Hair,Simple Tie,Layered Knot';
    newText = newText+';NL;Half Bow II,Scarf Belt,Crossed Shawl,Shawl,Shrug,Loose Wrap,Slip Knot,Knot Row,Neck Tie Knot,Cape Wrap,Sarong,Bow Tie,Half Bow,Fake Knot,Four-in-Hand,Neck Wrap,Chain Knot Wrap,Headband,Muffler II,Head Wrap,Rosette Wrap,Ascot Wrap,Square Knot,Ponytail Wrap';
    newText = newText+';NL;Not UsedUp In Knots,Middle of Everywhere,Little Bow Peep,Knotted & Nautical,Do The Twist,All Twisted Up,A Knot in My Hair,Chain Knot,Rosette Neck Wrap,Simple Tie,Half Bow II,Slip Knot,Knot Row,Neck Tie Knot,Bow Tie,Fake Knot,Four-in-Hand,Chain Knot Wrap,Headband,Rosette Wrap,Forehead Wrap,French Knot,Ponytail Wrap';
    newText = newText+';NL;Up In Knots,Middle of Everywhere,Little Bow Peep,Knotted & Nautical,Do The Twist,All Twisted Up,A Knot in My Hair,Chain Knot,Rosette Neck Wrap,Simple Tie,Knot Row,Neck Tie Knot,Bow Tie,Fake Knot,Four-in-Hand,Chain Knot Wrap,Headband,Rosette Wrap,Forehead Wrap,French Knot,Ponytail Wrap';
    newText = newText+';NL;Up In Knots,Middle of Everywhere,Little Bow Peep,Knotted & Nautical,Do The Twist,All Twisted Up,A Knot in My Hair,Chain Knot,Rosette Neck Wrap,Half Bow II,Scarf Belt,Knot Row,Neck Tie Knot,Sarong,Bow Tie,Half Bow,Chain Knot Wrap,Headband,Rosette Wrap';
    newText = newText+';NL;Layered Knot,Crossed Shawl,Shawl,Shrug,Loose Wrap,Fake Knot,Neck Wrap,Chain Knot Wrap,Head Wrap,Head Loop,Triple Loop,Double Loop';
    newText = newText+';NL;Itty Bitty Bow,Bows Away,Ahoy Matey,Bandana Wrap,Muffer,Ascot Wrap,French Knot,Square Knot,Ponytail Wrap';
    

//   newText = newText+';NL;aaa,bbb,ccc,aaa,bbb,ccc,aaa,bbb,ccc,aaa,bbb,ccc,aaa,bbb,ccc,aaa,bbb,ccc,aaa,bbb,ccc,aaa,bbb,ccc,aaa,bbb,ccc,aaa,bbb,ccc,aaa,bbb,ccc,aaa,bbb,ccc';
 
 
    
   var arr_newText= newText.split(";NL;");
   var arr_newTextB= arr_newText[newSetID-1].split(",");
   
   //alert(arr_newTextB[2])
   keep_textList = arr_newText[newSetID-1];
   
 //  countPerType = '0,7,5,20,7,8,9';
 //  var arr_countPerType= countPerType.split(",");
   
    for (index=0; index < 21 ; index++) {
       $('#scrollInfoB_'+index).hide()
    }
    
 //   alert(arr_newTextB.length)
   for (index=0; index < arr_newTextB.length ; index++) {
   
     i = index +1;
     $('#scrollInfoB_'+i).show()
     $('#scrollInfoImg_'+i).attr('src','images/knowhow/Set'+newSetID+'_'+i+'.png')
     $('#scrollInfoText_'+i).html(arr_newTextB[index])
   
   }
   
   $('#secondPanel').sly('slideTo' , 0 ); 
  
 //  $('#scrollInfoImg_3').attr('src','http://www.gracese.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/1/_/1_276_43.jpg')

  
  
}

var textLinesX = new Array(6);


function showSetText(textSetID){

  if(keep_onShowB == 0){
   $('#thirdPanel').fadeIn(6000)
  }

   keep_onShowB = 1;
   
$('#thirdPanel').sly('slideTo' , -1000 ); 

var arr_newTextB= keep_textList.split(",");



 
   arr_textLines = Find_info_for(arr_newTextB[textSetID-1]);
   
   


   
        

    
  for (i=0; i <10; i++){
  
     $('#scrollInfoWraper_'+i).hide()
  }   
   
 for (i=0; i <6; i++){
   $('#scrollInfoWraper_'+(i+1) ).show()
   $('#scrollInfoTextChead_'+(i+1)).html(arr_newTextB[textSetID-1]);
   $('#scrollInfoTextCmid_'+(i+1)).html(arr_textLines[i]);
   $('#scrollInfoTextCbottom_'+(i+1)).html('Stage '+(i+1) ); 
   
   if(arr_textLines[i+1].length < 2){
      i = 999;
   }  
 }


 //#slideTo(position, [immediate])

}


function Find_info_for(nameToFind){

  for (i=0; i <6; i++){
      textLinesX[i] = '';
  }

  if(nameToFind == 'Bandana Wrap'){
   textLinesX[0] = 'Fold a square scarf diagonally until one end meets the other, making a large triangle.';
   textLinesX[1] = 'Placing the scarf on top of your head, bring the middle of the longest side to the middle of the forehead so that the pointed end is towards the back of the head.';
   textLinesX[2] = 'Bring the ends to the back and tie them in a single or double knot, whatever is more comfortable for you.';
   textLinesX[3] = 'Adjust on forehead so that the scarf lies where you want it.';
  } 
  
  if(nameToFind == 'Forehead Wrap'){
   textLinesX[0] = 'Place the middle of the scarf at the middle of your forehead and hold in place.';
   textLinesX[1] = 'Bring the ends of the scarf around to the back of your head.';
   textLinesX[2] = 'Tie a single or double knot at the bottom of your crown.';
   textLinesX[3] = 'Adjust the scarf on your forehead as needed.';
   
   }   
 
   if(nameToFind == 'Muffer'){
    textLinesX[0] = 'Fold a square scarf so the ends meet to form a triangle.';
    textLinesX[1] = 'Put the ends of the triangle around the back of your neck so the point lays down the center of your body.';
    textLinesX[2] = 'Tie the ends on the back.';
    textLinesX[3] = 'Either let the ends hang down your back or bring them around and tuck them under the front triangle.';
   
   }  


  if(nameToFind == 'Ascot Wrap'){
   textLinesX[0] = 'Place the scarf around your neck with the ends hanging in front.';
   textLinesX[1] = 'Fold one end over the other two times.';
   textLinesX[2] = 'On the last fold, bring the end up through the loop at your neck.';
   textLinesX[3] = 'Spread the top of the knot and front layer of the scarf so it covers the layer beneath.';
   
   }  
   
  if(nameToFind == 'Frenc Knot'){
   textLinesX[0] = 'Start by putting the scarf around your the front of your neck so the ends hang in the back.';
   textLinesX[1] = 'Wrap the ends around to the front and loosen the loop so that it’s comfortable around your neck.';
   textLinesX[2] = 'Tie a loose knot and then a second tighter knot.';
   
   }
   
  if(nameToFind == 'Square Knot'){
   textLinesX[0] = 'Place the scarf around the back of your neck with the ends hanging in front.';
   textLinesX[1] = 'Tie the ends of the scarf together once.';
   textLinesX[2] = 'Bring the front end back around the bottom end and through the loop created by the two as they cross.';
   
   }
   
  if(nameToFind == 'Knotty Twist'){
   textLinesX[0] = 'Place the scarf on your head like a hood';
   textLinesX[1] = 'Bring the bottom to one side low on your neck';
   textLinesX[2] = 'Tightly twist the bottom. Leave a small loop at the end';
   textLinesX[3] = 'Let the twist coil on itself to make a bun';  
   textLinesX[4] = 'Wrap the end loop around the bun';    
   }   

  if(nameToFind == 'Bolero'){
   textLinesX[0] = 'Hold a circle scarf so that the seam is between your two hands.';
   textLinesX[1] = 'Put one arm though the circle, then pull the other end of the scarf behind your back so that you can pull the other arm though, just as if you were putting on a jacket.';
   textLinesX[2] = 'Make sure it lies flat on your back, then pull the top end over your shoulders.';
   }  

  if(nameToFind == 'Head Loop'){
   textLinesX[0] = 'Spread the circle scarf out wide.';
   textLinesX[1] = 'Put the widest part of the scarf over your head with the seam in the middle.';
   textLinesX[2] = 'Make a loop with the scarf in front of you.';
   textLinesX[3] = 'Pull the loop over your head so the scarf lies flat.'; 
   
   }  

  if(nameToFind == 'Triple Loop'){
    textLinesX[0] = 'Place a circle scarf around your neck.';
   textLinesX[1] = 'Make a figure 8 in the front and pull the  scarf over your head.';
   textLinesX[2] = 'Pull the scarf taut so the two loops are close to your neck.';
   textLinesX[3] = 'Twist the scarf in front of you to create another figure 8.'; 
   textLinesX[4] = 'Pull the scarf over your head one more time.';
   
   }  
   
  if(nameToFind == 'Double Loop'){
   textLinesX[0] = 'Place around your neck once with the seam in the back.';
   textLinesX[1] = 'Make a figure  8 in the front and put the bottom loop over your head one more time.';
   textLinesX[2] = 'You should now have two circles in the front.';
   textLinesX[3] = 'Make sure the two circles lie within each other so the scarf lays flat on your chest.'; 
   
   }  
      
  if(nameToFind == 'Up In Knots'){
   textLinesX[0] = 'Fold a skinny scarf in half. Center the scarf at the nape of your neck';
   textLinesX[1] = 'Bring each side to the front of your head and collect them slightly above one ear. Tie a double knot.';
   textLinesX[2] = 'Let the ends hang like a side ponytail. You can then also twist the sides';
   textLinesX[3] = 'Wrap the twist around the knot. Continue to wrap one or two more times'; 
   textLinesX[4] = 'Tuck in the ends';
   
   
   }   

  if(nameToFind == 'Twisty Turban'){
   textLinesX[0] = 'Use a long rectangle scarf. Center the scarf on your forehead. ';
   textLinesX[1] = 'Collect the sides at the nape of your neck like a low ponytail. Tie a knot at the nape of your neck.';
   textLinesX[2] = 'Bring each side to the front of your head. Criss-cross the sides on top of your head';
   textLinesX[3] = 'Bring the sides back down'; 
   textLinesX[4] = 'Tuck in the ends';
   } 
   
  if(nameToFind == 'Twisted Crown'){
   textLinesX[0] = 'Use a long rectangle scarf.Center the scarf at the nape of your neck.';
   textLinesX[1] = 'Bring the ends forward like a towel';
   textLinesX[2] = 'Tightly twist the sides';
   textLinesX[3] = 'Continue to twist as you wrap around the crown of your head'; 
   textLinesX[4] = 'Tuck the ends under the beginning portion of the twist';
   } 
   
 if(nameToFind == 'Twist & Shout'){
   textLinesX[0] = 'Use a long rectangle scarf. Center the scarf on your forehead';
   textLinesX[1] = 'Bring the sides over your ears and to the nape of your neck like a low ponytail';
   textLinesX[2] = 'Tie a knot with the two sides. Bring the sides together above one ear';
   textLinesX[3] = 'Twist the two sections to the end'; 
   textLinesX[4] = 'Pull the twisted section across the top of your head like a headband. Tuck in the ends';
   } 
   
  if(nameToFind == 'To Be or Not to Be'){
   textLinesX[0] = 'Knot a few strands of a pashmina. Center the scarf on your forehead';
   textLinesX[1] = 'Bring the sides over your ears. Collect the sides at the nape of your neck like a low ponytail';
   textLinesX[2] = 'Twist the loop in back once. Bring the loop to the front of your head';
   textLinesX[3] = 'Twist the loop at the top of your head. Lay the remaining loop on the back of your head'; 
   textLinesX[4] = 'Tuck in one tail';
   } 
   
 if(nameToFind == 'Side Scarf Pony'){
   textLinesX[0] = 'Use a long rectangle scarf. Center the scarf on your forehead';
   textLinesX[1] = 'Bring the sides to the nape of your neck like a low ponytail. Tie a knot at the nape of your neck';
   textLinesX[2] = 'Grab a side in each hand and loosely twist them. Bring each twist to the top of your head';
   textLinesX[3] = 'Situate the twists over one eye and tie a knot. Wrap the twists around each other two or three times'; 
   textLinesX[4] = 'Tuck this newly twisted section under the knot. Let the ends fall down';
   } 

  if(nameToFind == 'Oversized Chignon'){
   textLinesX[0] = 'Use a long rectangle scarf. Center the scarf on your forehead';
   textLinesX[1] = 'Bring the sides over your ears. Collect the sides at the nape of your neck like a low ponytail';
   textLinesX[2] = 'Twist the tail about 1/4 of the way. Coil the twist into the start of a bun';
   textLinesX[3] = 'Twist, coil, and repeat. Continue until you reach the end of the scarf'; 
   textLinesX[4] = 'Tuck the end into the bun';
   } 
    
    
 if(nameToFind == 'My Little Pony'){
   textLinesX[0] = 'Have a hair tie handy for later. Use a long rectangle scarf. Center the scarf on your forehead';
   textLinesX[1] = 'Bring the sides over your ears and to the nape of your neck like a low ponytail';
   textLinesX[2] = 'Pull half of the scarf through the hair tie';
   textLinesX[3] = 'Twist the hair tie'; 
   textLinesX[4] = 'Bunch and pull some more of the scar through the hair tie';
   } 
   
  if(nameToFind == 'Miss Knotty'){
   textLinesX[0] = 'Hold a long rectangle scarf horizontally. Center the scarf at the nape of your neck';
   textLinesX[1] = 'Bring the ends forward like a towel. Tie a knot to the side, near your temple';
   textLinesX[2] = 'Continue to knot down the length of the scarf. Repeat until 1/4 of the ends remain';
   textLinesX[3] = 'Pull the knots back to frame the edge of the scarf'; 
   textLinesX[4] = 'Tuck in the ends';
   } 

  if(nameToFind == 'Middle of Everywhere'){
   textLinesX[0] = 'Hold a long rectangle scarf. Center the scarf at the nape of your neck';
   textLinesX[1] = 'Bring the ends forward like a towel. Tightly twist the sides together';
   textLinesX[2] = 'Bring the twist back down the center of your head. ';
   textLinesX[3] = 'Tie the ends into a knot near the nape of your neck'; 
   textLinesX[4] = 'Tuck in the ends';
   } 
   
  if(nameToFind == 'Little Bow Peep'){
   textLinesX[0] = 'Use a skinny scarf. Fold the scarf in half horizontally';
   textLinesX[1] = 'Bring each side over your ears and up to your forehead';
   textLinesX[2] = 'Tie a knot with the two sides over one eye';
   textLinesX[3] = 'Tie a bow (as big or small as you want!)'; 
   textLinesX[4] = 'Tuck in the ends';
   }    
   
   
  if(nameToFind == 'Knotty Twist'){
   textLinesX[0] = 'Use a loop scarf.Place the scarf on your head like a hood ';
   textLinesX[1] = 'Bring the bottom to one side low on your neck. Tightly twist the bottom';
   textLinesX[2] = 'Leave a small loop at the end';
   textLinesX[3] = 'Let the twist coil on itself to make a bun'; 
   textLinesX[4] = 'Wrap the end loop around the bun';
   }    
   
   
  if(nameToFind == 'Knotty But Nice'){
   textLinesX[0] = 'Hold a long rectangle scarf horizontally';
   textLinesX[1] = 'Center the scarf on one side of your head over your ear. Tightly twist the sides about 1/4 of the way down';
   textLinesX[2] = 'Coil the twist around itself to create a bun';
   textLinesX[3] = 'Keep twisting and coiling around the bun until you reach the end of the scarf'; 
   textLinesX[4] = 'Tuck in the ends';
   }    
   
   
  if(nameToFind == 'Knotted & Nautical'){
   textLinesX[0] = 'Fold a skinny scarf in half horizontally';
   textLinesX[1] = 'Center the scarf at the nape of your neck. Bring each side over your ears and up to the top of your head ';
   textLinesX[2] = 'Knot the two sides at the center of your head';
   textLinesX[3] = 'Tie a loose, wide second knot'; 
   textLinesX[4] = 'Twist & tuck the ends under';
   }    
   
  if(nameToFind == 'Itty Bitty Bow'){
   textLinesX[0] = 'Fold a small square scarf in half like a triangle';
   textLinesX[1] = 'Center the scarf at the nape of your neck';
   textLinesX[2] = 'Bring each side over your ears and and up to the top of your head';
   textLinesX[3] = 'Double knot the sides'; 
   textLinesX[4] = 'Slightly tuck the tips into the headband to create a puffy bow';
   } 
   
  if(nameToFind == 'Heidi Braid'){
   textLinesX[0] = 'Hold a long rectangle scarf horizontally. Center the scarf on your forehead';
   textLinesX[1] = 'Bring the sides over your ears. Collect the sides at the nape of your neck like a low ponytail';
   textLinesX[2] = 'Tie a knot at the nape of your neck. Pull the ends to one side and begin twisting the sides together';
   textLinesX[3] = 'Twist the entire length of the scarf. Bring the twisted sides over your head like a headband'; 
   textLinesX[4] = 'Tuck in the ends';
   }     

  if(nameToFind == 'Ahoy Matey'){
   textLinesX[0] = 'Use a big square scarf. Fold down one corner';
   textLinesX[1] = 'Center the scarf on your forehead (leave some hair for a less pirate look)';
   textLinesX[2] = 'Bring the two corners to the back of your head';
   textLinesX[3] = 'Tie a double knot over the remaining corner'; 
   textLinesX[4] = 'Slide the knot slightly toward one ear';
   }    
   

  if(nameToFind == 'A Knot in My Hair'){
   textLinesX[0] = 'Use a skinny scarf. Fold the scarf in half horizontally';
   textLinesX[1] = 'Center the scarf at nape of your neck';
   textLinesX[2] = 'Bring each side over your ears and up to the top of your head, and criss-cross the tails twice';
   textLinesX[3] = 'Tie a knot at the nape of your neck'; 
   textLinesX[4] = 'Tuck in the ends';
   }    
   

  if(nameToFind == 'Headband'){
   textLinesX[0] = 'Start by folding the scarf as thin as you want the head band to be width-wise.';
   textLinesX[1] = 'Put the middle of the scarf on top of your head.';
   textLinesX[2] = 'Put your head back and pull your hair off your neck.';
   textLinesX[3] = 'Tie the scarf at the back once or twice and adjust at crown.'; 

   }    
   

  if(nameToFind == 'Head Wrap'){
   textLinesX[0] = 'Center the scarf over the top of your head.';
   textLinesX[1] = 'Lay the scarf flat on your head';
   textLinesX[2] = 'Throw one end of the scarf over the opposite shoulder.';

   }    
   

  if(nameToFind == 'Rosette Wrap'){
   textLinesX[0] = 'Start with your hair in a ponytail. Place the middle of the scarf at the back of your neck.';
   textLinesX[1] = 'Put the ends of the scarf to the front of your forehead.';
   textLinesX[2] = 'Twist the ends together and let the twist guide itself into spiral, much like a hair bun';
   textLinesX[3] = 'Tuck the end of the scarf under the spiral and allow it to stick out so it looks like petals.'; 
   textLinesX[4] = 'Take out ponytail.';
   }    
   

  if(nameToFind == 'Head Loop'){
   textLinesX[0] = 'Spread the circle scarf out wide.';
   textLinesX[1] = 'Put the widest part of the scarf over your head with the seam in the middle.';
   textLinesX[2] = 'Make a loop with the scarf in front of you.';
   textLinesX[3] = 'Pull the loop over your head so the scarf lies flat.'; 

   }    
   

  if(nameToFind == 'Bandana Wrap'){
   textLinesX[0] = 'Fold a square scarf diagonally until one end meets the other, making a large triangle.';
   textLinesX[1] = 'Placing the scarf on top of your head, bring the middle of the longest side to the middle of the forehead so that the pointed end is towards the back of the head. Hold';
   textLinesX[2] = 'Bring the ends to the back and tie them in a single or double knot, whatever is more comfortable for you.';
   textLinesX[3] = 'Adjust on forehead so that the scarf lies where you want it.'; 

   }    
   

  if(nameToFind == 'Forehead Wrap'){
   textLinesX[0] = 'Place the middle of the scarf at the middle of your forehead and hold in place.';
   textLinesX[1] = 'Bring the ends of the scarf around to the back of your head.';
   textLinesX[2] = 'Tie a single or double knot at the bottom of your crown.';
   textLinesX[3] = 'Adjust the scarf on your forehead as needed.'; 

   }    
   

  if(nameToFind == 'Ponytail Wrap'){
   textLinesX[0] = 'Wrap a scarf around your ponytail, with the ends facing up.';
   textLinesX[1] = 'Tie the ends once or two times.';

   }    
   

  if(nameToFind == 'Do The Twist'){
   textLinesX[0] = 'Fold a skinny scarf in half horizontally. Center the scarf on your forehead';
   textLinesX[1] = 'Bring the two sides to the back of your head. Criss-cross the sides at the nape of your neck';
   textLinesX[2] = 'Bring each side over your ears to the top of your head';
   textLinesX[3] = 'Double knot the two sides'; 
   textLinesX[4] = 'Twist down one side of your head & tuck in the ends';
   }    
   

  if(nameToFind == 'Criss Cross'){
   textLinesX[0] = 'Hold a long rectangle scarf horizontally. Center the scarf on your forehead. Collect the sides at the nape of your neck like a low ponytail ';
   textLinesX[1] = 'Tie a knot at the nape of your neck. Tightly twist one of the sides. ';
   textLinesX[2] = 'Bring the twisted side over the top of your head like a headband. Tuck in the end. Tightly twist the other side. Cross this side over the first twist';
   textLinesX[3] = 'Tuck in the end. For more Untuck one side. Tuck it under the first twist and pull to the side'; 
   textLinesX[4] = 'Wrap the end over both twists. Tuck in the end';
   }    
   

   if(nameToFind == 'All Twisted Up'){
   textLinesX[0] = 'Fold a skinny scarf in half horizontally. Center the scarf at the nape of your neck. Bring the sides over your ears to the center of your head';
   textLinesX[1] = 'Tie a tight knot at the center of your forehead. Tightly twist the side until it curls onto itself. Guide the twist into a little curl';
   textLinesX[2] = 'Twist & curl to the end of the scarf. Tuck in the end. Twist the remaining side over the first twist';
   textLinesX[3] = 'Guide the twist into a little curl. Twist & curl to the end'; 
   textLinesX[4] = 'Tuck in the end';
   }    
   


  if(nameToFind == 'Simple Tie'){
   textLinesX[0] = 'Place the scarf around the back of your neck with the ends hanging in front.';
   textLinesX[1] = 'Tie the ends of the scarf once.';
   textLinesX[2] = 'Adjust the knot to the height you prefer.';

   }    
   
  if(nameToFind == 'Layered Knot'){
   textLinesX[0] = 'Start by putting the scarf around the front of your neck so the ends hang in back.';
   textLinesX[1] = 'Wrap the end around to the front and loosen the loop so that its comfortable around you neck.';
   textLinesX[2] = 'Cross one end over the other and tie a knot.';
   textLinesX[3] = 'Make sure the end of the scarf hanging down in front is a bit longer than the end behind it, and make sure the longer end covers the shorter end.'; 
   textLinesX[4] = 'Adjust the first loop so that it covers the knot and creates a tail in the front.';
   }    
   
  if(nameToFind == 'Half Bow II'){
   textLinesX[0] = 'Place the scarf over the front of your neck. Wrap the ends around your neck and back to the front.';
   textLinesX[1] = 'Adjust so one end of the scarf is longer than the other.';
   textLinesX[2] = 'Wrap the shorter end over the top of the longer end';
   textLinesX[3] = 'Pull the shorter end up through the knot, creating a half bow.'; 
   textLinesX[4] = 'Adjust the bow to either the front or the side';
   } 

  if(nameToFind == 'Scarf Belt'){
   textLinesX[0] = 'Fold the scarf to the width of preference.';
   textLinesX[1] = 'Decide whether you’d like the belt around your waist or hips.';
   textLinesX[2] = 'Tie the scarf on the side or in the front of your body and let the ends hang down';

   } 

  if(nameToFind == 'Crossed Shawl'){
   textLinesX[0] = 'Wrap the scarf around your shoulders like you would a regular shawl.';
   textLinesX[1] = 'Cross the left end over your right shoulder.';
   textLinesX[2] = 'Cross the right end over left shoulder.';
   textLinesX[3] = 'This will cover your shoulders and back.'; 

   } 

  if(nameToFind == 'Shawl'){
   textLinesX[0] = 'Drape the scarf over your back and around your shoulders.';
   textLinesX[1] = 'Make sure the scarf is even on both sides.';
   textLinesX[2] = 'Wear the scarf up on your shoulders or down across your arms, with the ends hanging down.';

   } 

  if(nameToFind == 'Shrug'){
   textLinesX[0] = 'Drape the scarf around your back.';
   textLinesX[1] = 'Pull the ends of the scarf up over your arms.';
   textLinesX[2] = 'Tie the ends of the scarf behind your back in a single or double knot';
   textLinesX[3] = 'Let the ends hang down in back.'; 

   } 

  if(nameToFind == 'Loose Wrap'){
   textLinesX[0] = 'Put the scarf around your neck with the ends hanging in back.';
   textLinesX[1] = 'Bring the ends back around evenly so they hang down in front.';

   } 

  if(nameToFind == 'Slip Knot'){
   textLinesX[0] = 'Fold the scarf in half.';
   textLinesX[1] = 'Wrap the scarf around the back of your neck.';
   textLinesX[2] = 'Pull both ends of the scarf through the loop.';
   textLinesX[3] = 'Adjust so the scarf sits comfortably on your chest.'; 
   textLinesX[4] = 'Leave the knot close to your neck or pull it further away for a looser fit.';
   } 

  if(nameToFind == 'Knot Row'){
   textLinesX[0] = 'Put the scarf around the back of your neck so both sides hang down in front.';
   textLinesX[1] = 'Tie the ends together, making multiple, parallel knots partway down the length of the scarf.';
   textLinesX[2] = 'This will create a pattern. Tie as many knots as you’d like.';

   } 

  if(nameToFind == 'Neck Tie Knot'){
   textLinesX[0] = 'Put the scarf around the back of your neck with the ends to the front.';
   textLinesX[1] = 'Fold one end over the other two times.';
   textLinesX[2] = 'Take this same end up through the back and through the loop you created.';
   textLinesX[3] = 'Pull the ends taunt.'; 

   } 

  if(nameToFind == 'Cape Wrap'){
   textLinesX[0] = 'Fold a square scarf so the ends meet and form a triangle.';
   textLinesX[1] = 'Place a scarf over your shoulders so that the longest straight end is at the top of your back and two triangles corners meet in front.';
   textLinesX[2] = 'Make a square knot with these two ends in front.';

   } 

  if(nameToFind == 'Sarong'){
   textLinesX[0] = 'Open the scarf wide and wrap around your hips.';
   textLinesX[1] = 'Pull the ends to one side and tie to secure.';

   } 

  if(nameToFind == 'Bow Tie'){
   textLinesX[0] = 'Put the scarf around the back of your neck with both sides hanging down in front evenly.';
   textLinesX[1] = 'Tie a simple bow tie (like you’d tie your shoe).';
   textLinesX[2] = 'You can tie the bow close to your neck or keep it farther away, whichever you prefer.';

   } 

  if(nameToFind == 'Half Bow'){
   textLinesX[0] = 'Pull the scarf around the back of your neck. Adjust the ends so that one is longer than the other.';
   textLinesX[1] = 'Cross the longer ends over the shorter one.';
   textLinesX[2] = 'Pull the longer end up through the bottom, creating a loop.';
   textLinesX[3] = 'As you pull, keep the end taunt so it tightens securely around your neck.'; 
   textLinesX[4] = 'Spread the bow and wear it either on the side or in the fro';
   } 

  if(nameToFind == 'Fake Knot'){
   textLinesX[0] = 'Make a loose knot at one end of the scarf.';
   textLinesX[1] = 'Wrap the scarf around the back of your neck once and then a second time.';
   textLinesX[2] = 'Pull the loose end of the scarf through the knot.';
   textLinesX[3] = 'Pull the knot upward to tighten.'; 
   textLinesX[4] = 'Loosen the neck loop until the scarf fits comfortably around your neck.';
   } 

  if(nameToFind == 'Four-in-Hand'){
   textLinesX[0] = 'Fold the scarf in half and place the scarf around the back of your neck with a loop on one side.';
   textLinesX[1] = 'Pull one of the ends through the loop.';
   textLinesX[2] = 'Twist the loop';
   textLinesX[3] = 'Pull the other end of the scarf through the loop.'; 
   textLinesX[4] = 'Adjust the scarf for fit so it lies flat on your chest.';
   } 

  if(nameToFind == 'Neck Wrap'){
   textLinesX[0] = 'Put the scarf around your neck.';
   textLinesX[1] = 'Wrap the scarf around your neck until it creates a turtle neck-like covering.';
   textLinesX[2] = 'Tuck in the ends of the scarf so they don’t show.';

   } 

  if(nameToFind == 'Chain Knot Wrap'){
   textLinesX[0] = 'If you have long hair, start with it in a ponytail.';
   textLinesX[1] = 'Put the middle of the scarf on the back of your neck and pul the ends up towards the top of your head.';
   textLinesX[2] = 'Cross the ends together twice on top of your head.';
   textLinesX[3] = 'Make sure the cross is centered on your head and pull the ends back under to the nape of your neck.'; 
   textLinesX[4] = 'Tie Knot to secure. Undo your ponytail.';
   } 

  if(nameToFind == 'Muffler II'){
   textLinesX[0] = 'Fold a rectangle scarf in half length-wise  to make it reassemble a square.';
   textLinesX[1] = 'Fold one corner to the middle of the opposite side  so that it forms a triangle.';
   textLinesX[2] = 'Put two ends of the triangle over the back of your neck, leaving a point hanging down in the middle of your body.';
   textLinesX[3] = 'Tie the scarf in the back and adjust accordingly.'; 
 
   } 

  if(nameToFind == 'Chain Knot'){
   textLinesX[0] = 'Drape the scarf around the back of your neck.';
   textLinesX[1] = 'Bring the sides evenly to the front and wrap them around each other twice.';
   textLinesX[2] = 'Pull the ends to the back of your neck and them in a knot.';

   } 

   if(nameToFind == 'Rosette Neck Wrap'){
   textLinesX[0] = 'Place the scarf around your the back of your neck with the ends hanging in front.';
   textLinesX[1] = 'With the ends together and positioned to one side of the neck, start twisting.';
   textLinesX[2] = 'When the twist becomes taut, wrap it in a circular motion at your neck using your fingers to guide the scarf into a bun.';
   textLinesX[3] = 'When you come to the ends, tuck them into the bigger loop at your neck so they stick out to resemble petals.'; 

   } 

  if(nameToFind == 'French Knot'){
   textLinesX[0] = 'Start by putting the scarf around your the front of your neck so the ends hang in the back.';
   textLinesX[1] = 'Wrap the ends around to the front and loosen the loop so that it’s comfortable around your neck.';
   textLinesX[2] = 'Tie a loose knot and then a second tighter knot.';

   } 

  if(nameToFind == 'Bows Away'){
   textLinesX[0] = 'Fold a big square scarf in half like a triangle';
   textLinesX[1] = 'Center the folded edge at the nape of your neck';
   textLinesX[2] = 'Bring each side over your ears and up to the top of your head';
   textLinesX[3] = 'Tie a bow with the sides'; 
   textLinesX[4] = 'Tuck in the middle corner';
   } 


     
  if(nameToFind == 'xxx'){
   textLinesX[0] = 'xxxxxx';
   textLinesX[1] = 'xxxxxxx';
   textLinesX[2] = 'xxxxxxxx';
   textLinesX[3] = 'xxxxxxx'; 
   textLinesX[4] = 'xxxxxx';
   }    
   
  return textLinesX
}

 function linkTo(thisLink){
 
   
    location.href = thisLink
 
 }

// Avoid `console` errors in browsers that lack a console.
(function(){for(var a,e=function(){},b="assert clear count debug dir dirxml error exception group groupCollapsed groupEnd info log markTimeline profile profileEnd table time timeEnd timeStamp trace warn".split(" "),c=b.length,d=window.console=window.console||{};c--;)a=b[c],d[a]||(d[a]=e)})();

// LoremImages
(function(b){b.fn.loremImages=function(e,d,j){var a=b.extend({},b.fn.loremImages.defaults,j);return this.each(function(c,k){var f=b(k),g="";for(c=0;c<a.count;c++){var h=e+Math.round(Math.random()*a.randomWidth),i=d+Math.round(Math.random()*a.randomHeight);g+=a.itemBuilder.call(f,c,"//lorempixel.com/"+(a.grey?"g/":"")+h+"/"+i+"/"+(a.category?a.category+"/":"")+"?"+Math.round(Math.random()*1E3),h,i)}f.append(g)})};b.fn.loremImages.defaults={count:10,grey:0,randomWidth:0,randomHeight:0,category:0,itemBuilder:function(e,
d){return'<img src="'+d+'" alt="Lorempixel">'}}})(jQuery);

// jQuery easing 1.3
jQuery.easing.jswing=jQuery.easing.swing;
jQuery.extend(jQuery.easing,{def:"easeOutQuad",swing:function(e,a,c,b,d){return jQuery.easing[jQuery.easing.def](e,a,c,b,d)},easeInQuad:function(e,a,c,b,d){return b*(a/=d)*a+c},easeOutQuad:function(e,a,c,b,d){return-b*(a/=d)*(a-2)+c},easeInOutQuad:function(e,a,c,b,d){return 1>(a/=d/2)?b/2*a*a+c:-b/2*(--a*(a-2)-1)+c},easeInCubic:function(e,a,c,b,d){return b*(a/=d)*a*a+c},easeOutCubic:function(e,a,c,b,d){return b*((a=a/d-1)*a*a+1)+c},easeInOutCubic:function(e,a,c,b,d){return 1>(a/=d/2)?b/2*a*a*a+c:
b/2*((a-=2)*a*a+2)+c},easeInQuart:function(e,a,c,b,d){return b*(a/=d)*a*a*a+c},easeOutQuart:function(e,a,c,b,d){return-b*((a=a/d-1)*a*a*a-1)+c},easeInOutQuart:function(e,a,c,b,d){return 1>(a/=d/2)?b/2*a*a*a*a+c:-b/2*((a-=2)*a*a*a-2)+c},easeInQuint:function(e,a,c,b,d){return b*(a/=d)*a*a*a*a+c},easeOutQuint:function(e,a,c,b,d){return b*((a=a/d-1)*a*a*a*a+1)+c},easeInOutQuint:function(e,a,c,b,d){return 1>(a/=d/2)?b/2*a*a*a*a*a+c:b/2*((a-=2)*a*a*a*a+2)+c},easeInSine:function(e,a,c,b,d){return-b*Math.cos(a/
d*(Math.PI/2))+b+c},easeOutSine:function(e,a,c,b,d){return b*Math.sin(a/d*(Math.PI/2))+c},easeInOutSine:function(e,a,c,b,d){return-b/2*(Math.cos(Math.PI*a/d)-1)+c},easeInExpo:function(e,a,c,b,d){return 0==a?c:b*Math.pow(2,10*(a/d-1))+c},easeOutExpo:function(e,a,c,b,d){return a==d?c+b:b*(-Math.pow(2,-10*a/d)+1)+c},easeInOutExpo:function(e,a,c,b,d){return 0==a?c:a==d?c+b:1>(a/=d/2)?b/2*Math.pow(2,10*(a-1))+c:b/2*(-Math.pow(2,-10*--a)+2)+c},easeInCirc:function(e,a,c,b,d){return-b*(Math.sqrt(1-(a/=d)*
a)-1)+c},easeOutCirc:function(e,a,c,b,d){return b*Math.sqrt(1-(a=a/d-1)*a)+c},easeInOutCirc:function(e,a,c,b,d){return 1>(a/=d/2)?-b/2*(Math.sqrt(1-a*a)-1)+c:b/2*(Math.sqrt(1-(a-=2)*a)+1)+c},easeInElastic:function(e,a,c,b,d){var e=1.70158,f=0,g=b;if(0==a)return c;if(1==(a/=d))return c+b;f||(f=0.3*d);g<Math.abs(b)?(g=b,e=f/4):e=f/(2*Math.PI)*Math.asin(b/g);return-(g*Math.pow(2,10*(a-=1))*Math.sin((a*d-e)*2*Math.PI/f))+c},easeOutElastic:function(e,a,c,b,d){var e=1.70158,f=0,g=b;if(0==a)return c;if(1==
(a/=d))return c+b;f||(f=0.3*d);g<Math.abs(b)?(g=b,e=f/4):e=f/(2*Math.PI)*Math.asin(b/g);return g*Math.pow(2,-10*a)*Math.sin((a*d-e)*2*Math.PI/f)+b+c},easeInOutElastic:function(e,a,c,b,d){var e=1.70158,f=0,g=b;if(0==a)return c;if(2==(a/=d/2))return c+b;f||(f=d*0.3*1.5);g<Math.abs(b)?(g=b,e=f/4):e=f/(2*Math.PI)*Math.asin(b/g);return 1>a?-0.5*g*Math.pow(2,10*(a-=1))*Math.sin((a*d-e)*2*Math.PI/f)+c:0.5*g*Math.pow(2,-10*(a-=1))*Math.sin((a*d-e)*2*Math.PI/f)+b+c},easeInBack:function(e,a,c,b,d,f){void 0==
f&&(f=1.70158);return b*(a/=d)*a*((f+1)*a-f)+c},easeOutBack:function(e,a,c,b,d,f){void 0==f&&(f=1.70158);return b*((a=a/d-1)*a*((f+1)*a+f)+1)+c},easeInOutBack:function(e,a,c,b,d,f){void 0==f&&(f=1.70158);return 1>(a/=d/2)?b/2*a*a*(((f*=1.525)+1)*a-f)+c:b/2*((a-=2)*a*(((f*=1.525)+1)*a+f)+2)+c},easeInBounce:function(e,a,c,b,d){return b-jQuery.easing.easeOutBounce(e,d-a,0,b,d)+c},easeOutBounce:function(e,a,c,b,d){return(a/=d)<1/2.75?b*7.5625*a*a+c:a<2/2.75?b*(7.5625*(a-=1.5/2.75)*a+0.75)+c:a<2.5/2.75?
b*(7.5625*(a-=2.25/2.75)*a+0.9375)+c:b*(7.5625*(a-=2.625/2.75)*a+0.984375)+c},easeInOutBounce:function(e,a,c,b,d){return a<d/2?0.5*jQuery.easing.easeInBounce(e,2*a,0,b,d)+c:0.5*jQuery.easing.easeOutBounce(e,2*a-d,0,b,d)+0.5*b+c}});

// jQuery throttle / debounce - v1.1 - 3/7/2010
(function(b,c){var $=b.jQuery||b.Cowboy||(b.Cowboy={}),a;$.throttle=a=function(e,f,j,i){var h,d=0;if(typeof f!=="boolean"){i=j;j=f;f=c}function g(){var o=this,m=+new Date()-d,n=arguments;function l(){d=+new Date();j.apply(o,n)}function k(){h=c}if(i&&!h){l()}h&&clearTimeout(h);if(i===c&&m>e){l()}else{if(f!==true){h=setTimeout(i?k:l,i===c?e-m:e)}}}if($.guid){g.guid=j.guid=j.guid||$.guid++}return g};$.debounce=function(d,e,f){return f===c?a(d,e,false):a(d,f,e!==false)}})(this);