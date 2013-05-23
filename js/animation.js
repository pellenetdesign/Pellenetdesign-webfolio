//my actions
$(document).ready(function(){
	$('.mainCarousel').carousel({
    interval: 32000
    });
	$('.carouselNewsfeed').carousel({
    interval: 12000
    });
	//tabs	
	$(function () {
		$('#socialFeedTab a:last').tab('show');
	});
	$('.dropdown-toggle').dropdown();
	//tooltip
	$('.ttTop a').tooltip({placement:'top', animation:'fade'});
	$('.ttBottom a').tooltip({placement:'bottom', animation:'fade'});
	$('.ttLeft a').tooltip({placement:'left', animation:'fade'});
	$('.ttRight a').tooltip({placement:'right', animation:'fade'});
	//popover click
	$('.poTop').popover({placement:'top', animation:'fade'});
	$('.poBottom').popover({placement:'bottom', animation:'fade'});
	$('.poLeft').popover({placement:'left', animation:'fade'});
	$('.poRight').popover({placement:'right', animation:'fade'});
	//popover hover
	$('.poTopHover').popover({placement:'top', trigger:'hover', animation:'fade'});
	$('.poBottomHover').popover({placement:'bottom', trigger:'hover', animation:'fade'});
	$('.poLeftHover').popover({placement:'left', trigger:'hover', animation:'fade'});
	$('.poRightHover').popover({placement:'right', trigger:'hover', animation:'fade'});
	//popover personalized
	//top Right navbar
	$('.poBottomHoverForhire').popover({placement:'bottom', trigger:'hover', animation:'fade', title:'Available for hire and ready to roll', content:'I am a fully-fledged webdesigner looking for a new agency to better my team-working skills and to share my webbly know-how.. Interested??, well then click on the bubble to check out my latest resume to this date'});
	//,  
});//end doc ready