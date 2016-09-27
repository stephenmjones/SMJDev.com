//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Toggles Visibility of Nav Links When Collapsed
$(function(){
	$("#navpull").click(function(){
		$('nav').slideToggle();
	});
});

////~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Toggles Visibility of Nav Links When Link is Clicked
$(function(){
	$('nav').children("ul").children("li").children("a").click(function() {
		$('nav').slideToggle();
	});
});

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Scrolls Page When Anchor Link is Clicked
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
			'scrollTop': $target.offset().top - $('header').height() + 1
		}, 800, 'swing', function () {
			window.location.hash = target;
			$('html').animate({ 'scrollTop': $target.offset().top - $('header').height() + 1 }, 0);
			$(document).on("scroll", onScroll);
		});
	});
});

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Changes Active Link When Page Is Scrolled
function onScroll(){
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