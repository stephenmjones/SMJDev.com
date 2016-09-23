//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Toggles Visibility of Nav Links When Collapsed
$(function(){
	$("#navpull").click(function(){
		$('nav').slideToggle();
	});
});

////~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Toggles Visibility of Nav Links When Link is Clicked
$(function(){
	$('nav').children("li").children("li").children("a").click(function() {
		$('nav').slideToggle();
	});
});


//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Shows/Collapses Nav Links Based on Screen Size
//$(window).resize(function(){
//	var w = $(window).width();
//	if(w > 480 && $('#navmenu').is(':hidden')) {
//		$('#navmenu').removeAttr('style');
//	}
//	if(w < 480 && $('#navmenu').is(':visible')) {
//		$('#navmenu').removeAttr('style');
//	}
//});

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Nav Active Link Functions
$(document).ready(function () {


	$(document).on("scroll", onScroll);

	$('a[href^="#"]').on('click', function (e) {
		e.preventDefault();
		$(document).off("scroll");

		$('a').each(function () {
			$(this).removeClass('active');
		});
		$(this).addClass('active');

		var target = this.hash;
		$target = $(target);
		$('html, body').stop().animate({
			'scrollTop': $target.offset().top - $('header').height()
		}, 800, 'swing', function () {
			window.location.hash = target;
			$(document).on("scroll", onScroll);
		});
	});
});

function onScroll(event){
	var scrollPosition = $(document).scrollTop();
	$('nav a').each(function () {
		var currentLink = $(this);
		var refElement = $(currentLink.attr("href"));
		if (refElement.position().top - $('header').height() <= scrollPosition && refElement.position().top + refElement.height() > scrollPosition) {
			$('nav ul li a').removeClass("active");
			currentLink.addClass("active");
		}
	});
}

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 100% Height Bugfix on Mobile
$( document ).ready(function() {
	if ( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		var h = $('.height-fix').height();
		$('.height-fix').height(h);
	}
});