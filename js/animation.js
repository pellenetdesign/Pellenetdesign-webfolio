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
	//animate "For hire"
	$('body').hover(function(){
    var hireme = $("p.hire-me a img");
		hireme.animate({opacity:0.5},"100");
		hireme.animate({marginLeft:1},"100");
		hireme.animate({opacity:0.5},"100");
		hireme.animate({marginLeft:1},"100");
		hireme.animate({opacity:0.5},"100");
		hireme.animate({marginLeft:1},"100");
		hireme.animate({opacity:0.5},"100");
		hireme.animate({marginLeft:1},"100");
		hireme.animate({opacity:0.5},"100");
		hireme.animate({marginLeft:1},"100");
		hireme.animate({opacity:0.5},"100");
		hireme.animate({marginLeft:1},"100");
  });
  //affix the top of page
  /*$('#navbar').affix()*/
});//end doc ready