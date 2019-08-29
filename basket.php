<?php	include "header.php";?>		
	<main>
		<div class="basket">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<h1 class="basket__title">Корзина</h1>
						<div class="basket__body">
							<div class="good-line">
								<div class="good-line__pic">
									<img src="img/catalog/1-min.png" alt="">
								</div>
								<div class="good-line__text">
									<h3 class="good-line__title">Царь-бомба Black Tiger</h3>
									<div class="good-line__price">460 грн.</div>
								</div>
								<span class="number-field good-line__amount">
									<span class="number-field__btn minus">-</span>
									<input type="number" class="number-field__input" min="1" max="99" value="2" />
									<span class="number-field__btn plus">+</span>
								</span>
								<div class="good-line__total-price">1560 грн.</div>
								<span class="icon-close good-line__remove"></span>
							</div>
							<div class="good-line">
								<div class="good-line__pic">
									<img src="img/catalog/2-min.png" alt="">
								</div>
								<div class="good-line__text">
									<h3 class="good-line__title">Петарды «Бамболейло»</h3>
									<div class="good-line__price">1560 грн.</div>
								</div>
								<span class="number-field good-line__amount">
									<span class="number-field__btn minus">-</span>
									<input type="number" class="number-field__input" min="1" max="99" value="1" />
									<span class="number-field__btn plus">+</span>
								</span>
								<div class="good-line__total-price">920 грн.</div>
								<span class="icon-close good-line__remove"></span>
							</div>
						</div>
						<form action="" class="step-form" id="basket">
							<div class="step-form__item open">
								<h3 class="step-form__subtitle">Контактная информация</h3>
								<div class="step-form__fields">
									<div class="field field--required">
										<input type="text" placeholder="Имя" class="field__input" required />
									</div>
									<div class="field field--required">
										<input type="email" placeholder="E-mail" class="field__input" required />
									</div>
									<div class="field field--required">
										<input type="tel" placeholder="Телефон" class="field__input" required />
									</div>
								</div>
							</div>
							<div class="step-form__item">
								<h3 class="step-form__subtitle">Доставка и оплата</h3>
								<div class="step-form__fields">
									<div class="field">
										<select class="field__input">
											<option>Доставка по Киеву</option>
											<option>Доставка в пригород</option>
											<option>Доставка по Украине</option>
										</select>
										<span class="field__text">Доставка: 80 грн.</span>
									</div>
									<div class="field field--required">
										<input type="text" class="field__input" placeholder="Адрес" required />
									</div>
									<div class="field">
										<select class="field__input">
											<option>Наличными при получении</option>
											<option>Банковский перевод</option>
											<option>WebMoney</option>
											<option>Безналичный рассчёт</option>
											<option>На карту ПриватБанка</option>
										</select>
									</div>
									<div class="field">
										<input type="date" class="input__field" placeholder="Дата">
									</div>
								</div>
							</div>
							<div class="step-form__item">
								<h3 class="step-form__subtitle">Пожелания</h3>
								<div class="step-form__fields">
									<div class="field">
										<select class="field__input">
											<option>Для дня рождния</option>
											<option>Для корпоратива</option>
											<option>Для свадьбы</option>
											<option>Для нового года</option>
											<option>Для выпускного</option>
										</select>
										<label class="field__label">
											<input type="checkbox" checked>
											<span>Получать скидки на E-mail</span>
										</label>
									</div>
									<div class="field">
										<textarea rows="4" placeholder="Комментарий (если есть)"></textarea>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="col-lg-4">
						<div class="basket__sidebar">
							<div class="basket__info">
								<p>2 товара на сумму: 2480 грн<br> Доставка: 80 грн.</p>
								<div class="basket__total">Итого: 2560 грн.</div>
							</div>
							<button type="submit" form="basket" class="btn btn--green basket__btn">Заказ подтверждаю</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container d-xl-none">
			<span class="up-btn">Вверх</span>
		</div>		
	</main>
<?php	include "footer.php";?>	