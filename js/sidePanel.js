
$(document).ready(function(){

  //  $('#LestSideBoxInside').html('ttttesting')
  
  	// Initialize navgoco with default options
	$("#demo1").navgoco({
		caretHtml: '',
		accordion: false,
		openClass: 'open',
		save: true,
		cookie: {
			name: 'navgoco',
			expires: false,
			path: '/'
		},
		slide: {
			duration: 400,
			easing: 'swing'
		},
		// Add Active class to clicked menu item
		onClickAfter: function(e, submenu) {
			e.preventDefault();
			$('#demo1').find('li').removeClass('active');
			var li =  $(this).parent();
			var lis = li.parents('li');
			li.addClass('active');
			lis.addClass('active');
		},
	});

	$("#collapseAll").click(function(e) {
		e.preventDefault();
		$("#demo1").navgoco('toggle', false);
	});

	$("#expandAll").click(function(e) {
		e.preventDefault();
		$("#demo1").navgoco('toggle', true);
	});
  
  
  
     $('#LestSideBoxInside').perfectScrollbar();
  
  
 });
 

  
 function linkTo(thisLink){
 
   
    location.href = thisLink
 
 }

