/* $('.animation').each(function(){
	var animationData = $(this).attr('data-animation'),
			params = {
				container: this,
				renderer: 'canvas',
				loop: false,
				autoplay: true,
				path: animationData
			};
	lottie.loadAnimation(params);
}) */
function isMobile(){
	return window.innerWidth < 1200;
}
$(window).on('load resize',function(){
	if(!isMobile()){
		$('.main-menu li.open').removeClass('open');
		$('.header__top-menu,.footer__menu').removeClass('open')
	}
})
//выпадающие телефоны
$('.phone-select__head').click(function(){
	$(this).parent('.phone-select').toggleClass('open');
	$('.phone-select').not($(this).parent()).removeClass('open');
})
$(document).click(function(e){
	if(!$(e.target).is('.phone-select') && !$('.phone-select').has(e.target).length){
		$('.phone-select.open').removeClass('open');
	}
})
//меню в шапке
$('.header__menu-btn').click(function(){
	$(this).toggleClass('active');
	$('.header__top-menu').toggleClass('open');
})
//выпадающие подпункты в главном меню
$('.main-menu .has-children>a').click(function(e){
	if(isMobile()){
		e.preventDefault();
		$(this).parent('li').toggleClass('open').siblings().removeClass('open');
	}	
})

$('.categories__more').click(function(e){
	e.preventDefault();
	$(this).parents('.categories').find('.categories__item').not(':visible').addClass('show');
	$(this).parent('.categories__footer').hide();
})

$('.tabs__trigger').click(function(){
	if(!$(this).is('.active')){
		var index = $(this).index(),
				items = $(this).parents('.tabs').find('.tabs__item');
		$(this).addClass('active').siblings().removeClass('active');
		$(this).parents('.tabs').find('.tabs__mobile-trigger').removeClass('active');
		items.hide().eq(index).fadeIn(300).prev('.tabs__mobile-trigger').addClass('active');
	}
})
$('.tabs__mobile-trigger').click(function(){
	var index = $(this).parents('.tabs').find('.tabs__mobile-trigger').index(this);
	if(!$(this).is('.active')){		
		$(this).parents('.tabs').find('.tabs__trigger').removeClass('active').eq(index).addClass('active');
		$(this).addClass('active').siblings('.active').removeClass('active');
		$(this).siblings('.tabs__item').hide();
		$(this).next('.tabs__item').fadeIn(300);
	}else{
		$(this).removeClass('active').next('.tabs__item').fadeOut(300);
		$(this).parents('.tabs').find('.tabs__trigger').eq(index).removeClass('active');
	}
})

$('.up-btn').click(function(e){
	e.preventDefault();
	$('html').animate({
		scrollTop: 0
	},700);
})

$('.footer__menu-btn').click(function(){
	$(this).toggleClass('active');
	$('.footer__menu').toggleClass('open');
})