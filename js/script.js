$('.animation').each(function(){
	var animationData = $(this).data('animation'),
			params = {
				container: this,
				renderer: 'svg',
				loop: false,
				autoplay: true,
				path: animationData,
				rendererSettings: {
					preserveAspectRatio: 'xMidYMid slice'
				}
			};
	lottie.loadAnimation(params);
})
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

$('.dropdown__trigger').click(function(){
	$(this).toggleClass('open').siblings('.dropdown__content').slideToggle(300);
})

//кастомный input[type=number]
$('.number-field__btn').click(function(){
	var input = $(this).siblings('input')[0],
			min = input.min || 0,
			max = input.max || 99,
			step = input.step || 1,
			value = input.value;

	if($(this).is('.plus') && value <= max-step){
		input.value = +value + +step;
		$(input).trigger('change');
	}
	if($(this).is('.minus') && value >= +min + +step){
		input.value = value - step;
		$(input).trigger('change');
	}
})
//пошаговая форма
function checkItem(item){
	var flag = true;
	$(item).find('input').each(function(){
		if(!this.validity.valid){
			flag = false;
		}
	})
	return flag;
}
$('.step-form input').on('input',function(){
	var	block = $(this).parents('.step-form__item')[0];

	if(checkItem(block)){
		var flag = true;
		$(block).nextAll('.step-form__item').each(function(){
			if(flag){
				$(this).addClass('open');
			}else{
				flag = false;
			}
			if(!checkItem(this)){
				flag = false;
			}
		})
	}else{
		$(block).nextAll('.step-form__item').removeClass('open');
	}
})

//цена товаров в корзине
$('body').on('change','.good-line__amount input',function(){
	var good = $(this).parents('.good-line'),
			pricePerUnit = parseFloat(good.find('.good-line__price').text()) || 0,
			amount = +this.value || 0;
	good.find('.good-line__total-price').text(pricePerUnit*amount + " грн.");
})
//Удаление товаров из корзины (декоративное)
$('.good-line__remove').click(function(){
	$(this).parents('.good-line').fadeOut(300,function(){
		$(this).remove()
	});
})
//слайдер-ползунок для двойного поля
function updateForkValues(data){
	$(data.input).parents('.fork').find('.fork__from').val(data.from);
	$(data.input).parents('.fork').find('.fork__to').val(data.to);
}
$(".fork__input").ionRangeSlider({
	type: "double",
	hide_min_max: true,
	hide_from_to: true,
	skin: "round",
	min: 0,
	max: 1000,
	onChange: updateForkValues,
	onStart: updateForkValues
});

$('.fork__output input').on('input',function(){
	var slider = $(this).parents('.fork').find('.fork__input').data('ionRangeSlider');
	if($(this).is('.fork__from')){
		slider.update({from: this.value})
	}
	if($(this).is('.fork__to')){
		slider.update({to: this.value})
	}
})
//Модальные окна
function openModal(modalId, initiator){  
  var scrollWidth = window.innerWidth - document.body.clientWidth;//Ширина полосы прокрутки
  
	$('.modal-wrapper').children().unwrap();
	if(!$('#'+modalId).length){
		alert('Ошибка вызова модального окна');
		return false;
	}
	$('#'+modalId).trigger('beforeModalShow',initiator).wrap('<div class="modal-wrapper" style="display:none" />');
	$('.modal-wrapper').fadeIn(400,function(){
    $('#'+modalId).trigger('afterModalShow',initiator);
  });	
	if(scrollWidth){
		$('html').css('padding-right',scrollWidth);
		$('body').css('overflow-y','hidden');
	}
}
function closeModal(){
	$('.modal-wrapper').fadeOut(200, function(){
		$('html').css('padding-right','');
		$('body').css('overflow-y','');
	});
}
$(document).on('click', '[data-modal]', function(e){
	e.preventDefault();
	var modal = $(this).data('modal');
	openModal(modal,e.target);
})
$(document).on('click', '.modal__close', closeModal);

$(document).on('mousedown', '.modal-wrapper', function(e){
	if(!$('.modal').is(e.target) && $('.modal').has(e.target).length === 0){
		closeModal();
	}
})
$(document).keydown(function(e){
	//Закрытие окна на Esc
	if(e.which == 27){
		closeModal();
	}
});