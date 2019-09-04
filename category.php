<?php	include "header.php";?>		
	<main>
		<div class="page-head d-none d-xl-block">
			<div class="container">
				<ul class="breadcrumbs">
					<li><a href="/">Главная</a></li>
					<li>Салютные установки</li>
				</ul>
			</div>
		</div>
		<div class="filter">
			<div class="container">
				<div class="filter__inner">
					<div class="row">
						<div class="col-md-6 col-xl-3 filter__item">
							<h4 class="filter__subtitle">Цена, грн:</h4>
							<div class="fork">
								<div class="fork__head">
									<span class="fork__output">
										<span>от</span>
										<input type="number" min="0" max="10000" step="50" class="fork__from">
									</span>
									<span class="fork__output">
										<span>до</span>
										<input type="number" min="0" max="10000" step="50" class="fork__to">
									</span>
								</div>
								<input name="price" type="text" data-min="0" data-max="10000" data-step="50" class="fork__input" />
							</div>
						</div>
						<div class="col-md-6 col-xl-3 filter__item">
							<h4 class="filter__subtitle">Время работы, сек:</h4>
							<div class="fork">
								<div class="fork__head">
									<label class="fork__output">
										<span>от</span>
										<input type="number" min="0" max="10000" step="50" class="fork__from">
									</label>
									<label class="fork__output">
										<span>до</span>
										<input type="number" min="0" max="10000" step="50" class="fork__to">
									</label>
								</div>
								<input name="worktime" type="text" data-min="0" data-max="10000" data-step="50" class="fork__input" />
							</div>
						</div>
						<div class="col-md-6 col-xl-3 filter__item">
							<h4 class="filter__subtitle">Производители:</h4>
							<select>
								<option disabled selected >Выбрать из списка</option>
								<option>Производитель1</option>
								<option>Производитель2</option>
							</select>
						</div>
						<div class="col-md-6 col-xl-3 filter__item">
							<h4 class="filter__subtitle">Доп. фильтры:</h4>
							<select class="simple-select">
								<option>Калибр</option>
								<option>9mm</option>
								<option>7.62mm</option>
							</select>
							<select class="simple-select">
								<option>Кол-во залпов</option>
								<option>1</option>
								<option>2</option>
							</select>
							<select class="simple-select">
								<option>Высота</option>
								<option>10м</option>
								<option>20м</option>
							</select>							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="category">
			<div class="container">
				<div class="category__head">
					<h2 class="category__title">Салютные установки</h2>
					<div class="category__filter">
						<span class="category__amount">349 товаров</span>
						<select class="category__select">
							<option>От дешевых к дорогим</option>
							<option>От дорогих к дешевым</option>
						</select>
					</div>
				</div>
				<div class="category__body">
					<div class="row justify-content-center">
						<div class="category__item col-sm-8 col-md-6 col-lg-4">
							<div class="card">
								<div class="card__discount">-30%</div>
								<a href="#" class="card__video"><span>Видео</span></a>
								<div class="card__box">
									<img src="img/catalog/0.png" alt="" class="card__img">
									<ul class="card__chars">
										<li>Время: 40 сек.</li>
										<li>Длина: 11,5 см</li>
										<li>Запуск: фитилем</li>
										<li>Эффектов: 1 шт</li>
									</ul>
								</div>
								<div class="card__body">
									<h3 class="card__title">Салютная установка BALET</h3>
									<span class="card__price">279 грн.</span>
									<button class="btn btn--cart card__btn">В корзину</button>
								</div>
								<div class="card__footer">
									<span class="card__vendor-code">Артикул: 2312</span>
									<a href="#" class="card__quick-buy">Купить в 1 клик</a>
								</div>
							</div>
						</div>
						<div class="category__item col-sm-8 col-md-6 col-lg-4">
							<div class="card">
								<div class="card__discount">-30%</div>
								<a href="#" class="card__video"><span>Видео</span></a>
								<div class="card__box">
									<img src="img/catalog/1.png" alt="" class="card__img">
									<ul class="card__chars">
										<li>Время: 40 сек.</li>
										<li>Длина: 11,5 см</li>
										<li>Запуск: фитилем</li>
										<li>Эффектов: 1 шт</li>
									</ul>
								</div>
								<div class="card__body">
									<h3 class="card__title">Царь-бомба Black Tiger</h3>
									<span class="card__price">479 грн.</span>
									<button class="btn btn--cart card__btn">В корзину</button>
								</div>
								<div class="card__footer">
									<span class="card__vendor-code">Артикул: 2312</span>
									<a href="#" class="card__quick-buy">Купить в 1 клик</a>
								</div>
							</div>
						</div>
						<div class="category__item col-sm-8 col-md-6 col-lg-4">
							<div class="card">
								<div class="card__discount">-30%</div>
								<a href="#" class="card__video"><span>Видео</span></a>
								<div class="card__box">
									<img src="img/catalog/2.png" alt="" class="card__img">
									<ul class="card__chars">
										<li>Время: 40 сек.</li>
										<li>Длина: 11,5 см</li>
										<li>Запуск: фитилем</li>
										<li>Эффектов: 1 шт</li>
									</ul>
								</div>
								<div class="card__body">
									<h3 class="card__title">Петарды Petardy</h3>
									<span class="card__price">2479 грн.</span>
									<button class="btn btn--cart card__btn">В корзину</button>
								</div>
								<div class="card__footer">
									<span class="card__vendor-code">Артикул: 2312</span>
									<a href="#" class="card__quick-buy">Купить в 1 клик</a>
								</div>
							</div>
						</div>
						<div class="category__item col-sm-8 col-md-6 col-lg-4">
							<div class="card">
								<div class="card__discount">-30%</div>
								<a href="#" class="card__video"><span>Видео</span></a>
								<div class="card__box">
									<img src="img/catalog/3.png" alt="" class="card__img">
									<ul class="card__chars">
										<li>Время: 40 сек.</li>
										<li>Длина: 11,5 см</li>
										<li>Запуск: фитилем</li>
										<li>Эффектов: 1 шт</li>
									</ul>
								</div>
								<div class="card__body">
									<h3 class="card__title">Салютная установка BALET</h3>
									<span class="card__price">279 грн.</span>
									<button class="btn btn--cart card__btn">В корзину</button>
								</div>
								<div class="card__footer">
									<span class="card__vendor-code">Артикул: 2312</span>
									<a href="#" class="card__quick-buy">Купить в 1 клик</a>
								</div>
							</div>
						</div>
						<div class="category__item col-sm-8 col-md-6 col-lg-4 d-none d-sm-block">
							<div class="card">
								<div class="card__discount">-30%</div>
								<a href="#" class="card__video"><span>Видео</span></a>
								<div class="card__box">
									<img src="img/catalog/4.png" alt="" class="card__img">
									<ul class="card__chars">
										<li>Время: 40 сек.</li>
										<li>Длина: 11,5 см</li>
										<li>Запуск: фитилем</li>
										<li>Эффектов: 1 шт</li>
									</ul>
								</div>
								<div class="card__body">
									<h3 class="card__title">Салютная установка BALET</h3>
									<span class="card__price">279 грн.</span>
									<button class="btn btn--cart card__btn">В корзину</button>
								</div>
								<div class="card__footer">
									<span class="card__vendor-code">Артикул: 2312</span>
									<a href="#" class="card__quick-buy">Купить в 1 клик</a>
								</div>
							</div>
						</div>
						<div class="category__item col-sm-8 col-md-6 col-lg-4 d-none d-sm-block">
							<div class="card">
								<div class="card__discount">-30%</div>
								<a href="#" class="card__video"><span>Видео</span></a>
								<div class="card__box">
									<img src="img/catalog/5.png" alt="" class="card__img">
									<ul class="card__chars">
										<li>Время: 40 сек.</li>
										<li>Длина: 11,5 см</li>
										<li>Запуск: фитилем</li>
										<li>Эффектов: 1 шт</li>
									</ul>
								</div>
								<div class="card__body">
									<h3 class="card__title">Салютная установка BALET</h3>
									<span class="card__price">279 грн.</span>
									<button class="btn btn--cart card__btn">В корзину</button>
								</div>
								<div class="card__footer">
									<span class="card__vendor-code">Артикул: 2312</span>
									<a href="#" class="card__quick-buy">Купить в 1 клик</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="category__footer">
					<div class="row">
						<div class="col-md-6 order-md-1 category__text">
							<p>Нужна быстрая доставка в течении 3 часов?<br> Позвоните по номеру (066) 205-07-51 и укажите артикул товара</p>
						</div>
						<div class="col-md-6">
							<nav class="pagination">
								<a href="#" class="pagination__link active">1</a>
								<a href="#" class="pagination__link">2</a>
								<a href="#" class="pagination__link">3</a>
								<span class="pagination__separ">...</span>
								<a href="#" class="pagination__link">21</a>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="text-columns">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 text-columns__item">
						<h3>Про салютные установки</h3>
						<p>Салютные установки представляют из себя связку мортир, что связаны между собой бикфордовым шнуром либо стапином. Вы открываете крышку на салютной установке, освобождаете фитиль от защитной пленки, поджигаете его и через 6-8 секунд салют начинает стрелять.</p>
					</div>
					<div class="col-xl-6 text-columns__item">
						<h3>Где купить?</h3>
						<p>Купить салют Вы можете в Киеве, Одессе, Харькове, Днепре, Полтаве, Львове, Ужгороде, Чернигове, Виннице и других городах Украины. Везде, где есть транспортная компания Новая Почта, Интайи, Деливери, УкрПочта Вы можете заказать салютную установку с доставкой в Ваш город.</p>
					</div>
					<div class="col-xl-6 text-columns__item">
						<h3>Чем отличаются?</h3>
						<p>Салютные установки отличаются: количеством выстрелов, калибром зарядов, временем работы фейерверка. Чем больше количество выстрелов и больше калибр тем дороже салют. Купить салютную установку можно в считанные секунды.</p>
					</div>
					<div class="col-xl-6 text-columns__item">
						<h3>Какие бывают?</h3>
						<ul>
							<li>15-20 мм - мелкий калибр, вылет зарядов до 30 метров;</li>
							<li>25-30 мм - средний калибр, вылет зарядов на высоту 35-45 метров;</li>
							<li>40, 45, 50, 63 мм - крупный калибр, высота вылета на высоту 50-75 метров.</li>
							<li>75, 100 мм - это уже полупрофессиональныеустановки, с вылетом до 100 метров.</li>
						</ul>
					</div>
					<div class="col-xl-6 text-columns__item">
						<h3>Почему стоит покупать у нас?</h3>
						<p>Купить салют в интернет-магазине Puroshop означает получить качественный продукт, сертифицированный в Украине, что соблюдает все нормы хранения и транспортировки. Мы работаем на прямую с поставщиками пиротехники в Украине</p>
					</div>
					<div class="col-xl-6 text-columns__item">
						<h3>Инструкция по запуску</h3>
						<p>Салютные установки представляют из себя связку мортир, что связаны между собой бикфордовым шнуром либо стапином. Вы открываете крышку на салютной установке, освобождаете фитиль от защитной пленки, поджигаете его и через 6-8 секунд салют начинает стрелять.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="banner">
			<div class="container">
				<div class="banner__inner">
					<div class="banner__text">
						<h2 class="banner__title">Нужно <nobr>пиро-шоу</nobr> «под ключ»?</h2>
						<p>Феерия, которая покорит твое сердце!</p>
						<a href="#" class="btn banner__btn">Подробнее</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<span class="up-btn">Вверх</span>
		</div>		
	</main>
<?php	include "footer.php";?>	