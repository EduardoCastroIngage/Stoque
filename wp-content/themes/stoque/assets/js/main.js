
// Animação ao Scroll

const target = document.querySelectorAll('[data-anime]');
const animationClass = 'animate';

function animeScroll(){
	const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 4);
	target.forEach(function(element){
		if((windowTop) > element.offsetTop){
			element.classList.add(animationClass);
		} 
	})
}

animeScroll();

if(target.length){
	window.addEventListener('scroll', debounce(function(){
		animeScroll();
	}, 200));
}

$('.multi-item-carousel').on('slide.bs.carousel', function (e) {
let $e = $(e.relatedTarget),
itemsPerSlide = 3,
totalItems = $('.carousel-item', this).length,
$itemsContainer = $('.carousel-inner', this),
it = itemsPerSlide - (totalItems - $e.index());
if (it > 0) {
for (var i = 0; i < it; i++) {
$('.carousel-item', this).eq(e.direction == "left" ? i : 0).
	// append slides to the end/beginning
	appendTo($itemsContainer);
}
}
});


$(document).ready(function(){
$('.menuToggle').click(function(){
$(this).toggleClass('open');
});
});

$('.carousel').carousel({
pause: true;
})


$(document).ready(function(){
$('.menu-open-close').click(function(){
$('.menu-lateral').toggleClass('active');
})
})

const btn = document.querySelectorAll('.ajuda');

	btn.forEach((item)=>{              
	
	item.addEventListener('click', function(){
	item.classList.add('click-ativo');
});
});


window.onload = function(e) {
var offset = document.getElementsByClassName('header')[0].offsetTop;
var menu = document.getElementsByClassName('header')[0];

document.addEventListener('scroll', function() {
	if (document.body.scrollTop > offset || document.documentElement.scrollTop > offset) {
			menu.style.position = 'fixed';
			menu.style.background = '#121212';
	} else {
			menu.style.position = 'absolute';
			menu.style.background = 'transparent';
	}
});
}