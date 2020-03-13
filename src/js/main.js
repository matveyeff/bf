$(document).ready(function(){
  $('.slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		speed: 400,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 5000,
		cssEase: 'ease',
		dots: true
  });
});

var menu = document.getElementById('menu');
var nav = document.getElementById('nav');
var close = document.getElementById('close');

menu.addEventListener('click', function(e) {
	e.preventDefault();
	nav.style.display = 'flex';
	close.style.display = 'flex'
	menu.style.display = 'none'
});

close.addEventListener('click', function(e) {
	e.preventDefault();
	nav.style.display = 'none';
	close.style.display = 'none'
	menu.style.display = 'flex'
})

$(window).on('load', function(){
	$('.preloader').delay(500).fadeOut('slow', function(){
		$(this).attr('style', 'display: none !important');
	});
});

document.addEventListener('appReady.EappsInstagramFeed', function() {
	$('.my-instashow').eappsInstagramFeed({
		api: '/instashow/api/index.php',
		source: '@beauty_force.ru',
		width: 'auto',
		layout: 'grid',
		columns: 5,
		rows: 3,
		lang: 'ru'
	});
});

baguetteBox.run('.baguetteBoxThree', {
	animation: 'fadeIn',
	noScrollbars: true,
	captions: false
});