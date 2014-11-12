
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
  
  
$("#zoom_01").elevateZoom({ 
    zoomWindowFadeIn: 500, 
    zoomWindowFadeOut: 500, 
    lensFadeIn: 500, 
    lensFadeOut: 500,
    easing : true,
    scrollZoom : true,
    galleryActiveClass: "active" 

}); 

  
  
 
 setTimeout(function(){startZoom()},3500)
//resizeImageGetSizes() 
 
 
});

var tabOnNow = 1;
function newTab(tabOn){
 
$('#tab'+tabOnNow).slideUp(1000, function() {
    // Animation complete.
    $('#tab'+tabOn).slideDown(1000);

});
tabOnNow = tabOn; 

}

var keep_imgH = 100;
var keep_imgW = 100;

function startZoom(){

    keep_imgH = $('#zoom_01').height()
    keep_imgW = $('#zoom_01').width()

 $("#zoom_01").elevateZoom({gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'}); 
//pass the images to Fancybox 
$("#zoom_01").bind("click", function(e) {
var ez = $('#zoom_01').data('elevateZoom');	
$.fancybox(ez.getGalleryList()); 
return false; });
}



 

 function linkTo(thisLink){
 
   
    location.href = thisLink
 
 }

