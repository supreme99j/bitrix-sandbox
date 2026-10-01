
	<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use Bitrix\Landing\Assets;
use Bitrix\Main\Loader;
use Bitrix\Main\UI\Extension;

/** @var \CMain $APPLICATION */

if (!Loader::includeModule('landing'))
{
	return;
}

$assets = Assets\Manager::getInstance();
$assets->addAsset('landing_auto_font_scale');

$APPLICATION->ShowProperty('FooterJS');
?>
</main>

	<footer class="footer">
		<div class="wrapper wrapper--full">
			<div class="footer__content">
				<div class="wrapper">
					<div class="lead">
						<div class="lead__inner" style="background-image: url('<?=SITE_TEMPLATE_PATH ?>/img/lead-bg.webp');">
							<div class="lead__content">
								<h2 class="lead__title">Не нашли нужное оборудование?</h2>
								<p class="lead__text">Оставьте свои контактные данные и артикул оборудования, которое вам нужно — наш менеджер найдет его и свяжется с вами.</p>
							</div>
							<form class="lead__form form" data-validate>
								<input type="text" class="form__input" placeholder="Артикул" required data-pattern="[A-Za-zА-Яа-яЁё0-9][A-Za-zА-Яа-яЁё0-9\s./-]*" data-error-empty="Укажите артикул оборудования" data-error="Введите корректный артикул">
								<input type="text" class="form__input" placeholder="Ваше имя" required data-pattern="[A-Za-zА-Яа-яЁё][A-Za-zА-Яа-яЁё\s'-]{1,}" data-error-empty="Укажите ваше имя" data-error="Введите корректное имя">
								<input type="email" class="form__input" placeholder="E-mail" required data-pattern="[^\s@]+@[^\s@]+\.[A-Za-zА-Яа-яЁё]{2,}" data-error-empty="Укажите e-mail" data-error="Введите корректный e-mail">
								<input type="tel" class="form__input" placeholder="+7 (___) ___-__-__" required data-mask="+7 (999) 999-99-99" data-pattern="\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}" data-error-empty="Укажите номер телефона" data-error="Введите номер полностью">
								<label class="form__check checkbox">
									<input type="checkbox" required data-error="Подтвердите согласие с политикой конфиденциальности">
									<span class="checkbox__box">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
									</span>
									<span class="checkbox__text">Согласен с политикой конфиденциальности</span>
								</label>
								<button type="submit" class="btn btn--primary form__submit">Отправить</button>
							</form>
						</div>
					</div>
					
					<div class="footer__top">
						<div class="footer__brand">
							<a href="/" class="footer__logo">
								<img src="<?=SITE_TEMPLATE_PATH ?>/img/logo-white.svg" alt="PROSISTEMIKA" width="441" height="62">
							</a>
							<p class="footer__copy">©2024г. PROSISTEMIKA Копирование и использование материалов без разрешения правообладателя запрещено</p>
						</div>
						<div class="footer__info">
							<div class="footer__info-col">
								<div class="footer__label">Адрес</div>
								<p>Санкт-Петербург, <br>Петергофское шоссе 73у</p>
							</div>
							<div class="footer__info-col">
								<div class="footer__label">Телефон</div>
								<a href="tel:+78002003047">+7 (800) 200-30-47</a>
								<a href="tel:+78126026101">+7 (812) 602-61-01</a>
							</div>
							<div class="footer__info-col">
								<div class="footer__label">E-mail</div>
								<a href="mailto:sale@prosistemika.ru">sale@prosistemika.ru</a>
							</div>
						</div>
					</div>

					
					<div class="footer__center">
						<div class="footer__col footer__col--subscribe">
							<h3 class="footer__heading">Подпишитесь на рассылку</h3>
							<p class="footer__caption">Оставайтесь в курсе новостей и узнавайте первыми о новинках и спецпредложениях</p>
							<form class="footer__form" data-validate>
								<input type="email" class="footer__input" placeholder="Ваш e-mail" required data-pattern="[^\s@]+@[^\s@]+\.[A-Za-zА-Яа-яЁё]{2,}" data-error-empty="Укажите e-mail" data-error="Введите корректный e-mail">
								<button type="submit" class="btn btn--primary footer__submit">Подписаться</button>
							</form>
							<div class="footer__socials">
								<a href="#" aria-label="Telegram">
									<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_956_24564)">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M5.8846 12.8628C9.67437 11.2116 12.2015 10.1231 13.4659 9.59716C17.0762 8.09554 17.8263 7.83469 18.3153 7.82608C18.4228 7.82419 18.6633 7.85084 18.819 7.97722C18.9505 8.08394 18.9867 8.2281 19.0041 8.32928C19.0214 8.43046 19.0429 8.66095 19.0258 8.84104C18.8301 10.8966 17.9836 15.8851 17.5529 18.1874C17.3707 19.1616 17.0119 19.4882 16.6645 19.5202C15.9096 19.5896 15.3363 19.0213 14.6051 18.542C13.461 17.7919 12.8146 17.3251 11.704 16.5932C10.4205 15.7474 11.2525 15.2825 11.984 14.5228C12.1754 14.3239 15.5017 11.2985 15.566 11.024C15.5741 10.9897 15.5816 10.8617 15.5055 10.7942C15.4295 10.7266 15.3173 10.7497 15.2364 10.7681C15.1216 10.7941 13.2938 12.0022 9.75291 14.3924C9.23409 14.7487 8.76416 14.9223 8.34311 14.9132C7.87895 14.9032 6.98607 14.6507 6.32232 14.435C5.50819 14.1703 4.86114 14.0304 4.91748 13.581C4.94683 13.3469 5.2692 13.1075 5.8846 12.8628Z" fill="white"/>
										</g>
										<defs>
										<clipPath id="clip0_956_24564">
										<rect width="26" height="26" fill="white"/>
										</clipPath>
										</defs>
									</svg>
								</a>
								<a href="#" aria-label="WhatsApp">
									<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M3.62762 12.9641C4.65796 13.525 5.81913 13.8191 7 13.8191C10.8591 13.8191 14 10.7189 14 6.90957C14 3.1003 10.8591 0 7 0C3.14087 0 0 3.1003 0 6.90957C0 8.13315 0.326545 9.33093 0.949504 10.3848L0.0586579 14L3.62762 12.9641ZM3.99933 3.6808C4.14754 3.54624 4.34014 3.47427 4.54146 3.47427H4.75466C5.03681 3.47427 5.28806 3.64873 5.38397 3.90926L5.81988 5.09528C5.8603 5.20715 5.84049 5.33155 5.76519 5.42542L5.42043 5.85023C5.28411 6.01608 5.24765 6.24295 5.3269 6.44089C5.74459 7.47826 6.98655 8.20739 7.63569 8.52818C7.87109 8.64396 8.15324 8.60015 8.3395 8.41787L8.72073 8.04157C8.81187 7.9516 8.9482 7.91952 9.07184 7.95707L10.2282 8.32164C10.5064 8.41004 10.695 8.66429 10.695 8.95219V9.24244C10.695 9.45445 10.6094 9.65863 10.4573 9.80884C9.33101 10.9065 7.46207 10.1014 6.25117 9.36839C5.37854 8.83954 4.61767 8.14481 4.05175 7.30153C2.68218 5.2611 3.51429 4.11741 3.99933 3.6808Z" fill="white"/>
									</svg>
								</a>
								<a href="#" aria-label="VK">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_956_24556)">
										<path d="M12.7668 17.29C7.29683 17.29 4.17687 13.54 4.04688 7.30005H6.78688C6.87688 11.88 8.89683 13.82 10.4968 14.22V7.30005H13.0769V11.25C14.6569 11.08 16.3167 9.28005 16.8767 7.30005H19.4568C19.0268 9.74005 17.2268 11.54 15.9468 12.28C17.2268 12.88 19.2769 14.45 20.0569 17.29H17.2168C16.6068 15.39 15.0869 13.92 13.0769 13.72V17.29H12.7668Z" fill="white"/>
										</g>
										<defs>
										<clipPath id="clip0_956_24556">
										<rect width="24" height="24" fill="white"/>
										</clipPath>
										</defs>
									</svg>
								</a>
							</div>

							<ul class="footer__sublist">
								<li><a href="#">Политика конфиденциальности</a></li>
								<li><a href="#">Согласие на обработку персональных данных</a></li>
								<li class="show-mob"><a href="#">Разработка сайта</a></li>
							</ul>
						</div>
						<div class="footer__cols">
							<div class="footer__col footer__col--catalog">
								<div class="footer__label">Каталог</div>
								<div class="footer__lists">
									<ul class="footer__list">
										<li><a href="#">Модули</a></li>
										<li><a href="#">Контроллеры</a></li>
										<li><a href="#">Преобразователи</a></li>
										<li><a href="#">Блоки управления</a></li>
										<li><a href="#">Панель оператора</a></li>
										<li><a href="#">Датчики</a></li>
										<li><a href="#">Кабели</a></li>
										<li><a href="#">Пневмооборудование</a></li>
										<li><a href="#">Сервопривод</a></li>
									</ul>
									<ul class="footer__list">
										<li><a href="#">Приводная техника</a></li>
										<li><a href="#">Вентиляторы</a></li>
										<li><a href="#">Выключатели</a></li>
										<li><a href="#">Автоматы</a></li>
										<li><a href="#">Контакторы</a></li>
										<li><a href="#">Энкодеры</a></li>
										<li><a href="#">Реле</a></li>
										<li><a href="#">Карты памяти</a></li>
									</ul>
								</div>
							</div>

							<div class="footer__col footer__col--buyers">
								<div class="footer__label">Покупателям</div>
								<ul class="footer__list">
									<li><a href="#">Каталог</a></li>
									<li><a href="#">Новости</a></li>
									<li><a href="#">Оплата и доставка</a></li>
									<li><a href="#">Контакты</a></li>
								</ul>
								<ul class="footer__sublist">
									<li class="show-pc"><a href="#">Партнерам</a></li>
									<li><a href="#">Заявка на оборудование</a></li>
									<li class="show-pc"><a href="#">Разработка сайта</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<div class="modal" id="modal-callback">
        <div class="modal__bg" data-close></div>
        <div class="modal__content">
            <div class="modal__title">Закажите обратный звонок</div>
            <form class="modal__form" data-validate>
				<div class="modal__inps">
					<input type="text" class="modal__inp" placeholder="Ваше имя" required data-pattern="[A-Za-zА-Яа-яЁё][A-Za-zА-Яа-яЁё\s'-]{1,}" data-error-empty="Укажите ваше имя" data-error="Введите корректное имя">
					<input type="text" inputmode="tel" class="modal__inp" placeholder="+7 (___) ___-__-__" required data-mask="+7 (999) 999-99-99" data-pattern="\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}" data-error-empty="Укажите номер телефона" data-error="Введите номер полностью">
				</div>
				<label class="modal__check checkbox">
					<input type="checkbox" required data-error="Необходимо согласие на обработку персональных данных">
					<span class="checkbox__box">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
					</span>
					<span class="checkbox__text">Я даю согласие на обработку персональных данных в <br>соответствии с Федеральным законом</span>
				</label>
                <button type="submit" class="btn btn--primary">Отправить</button>
            </form>
        </div>
		<button type="button" class="modal__close" data-close>
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M21 21L3 3" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M21.0001 3L3 21.0001" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
		</button>
    </div>

	<div class="modal" id="modal-sent">
        <div class="modal__bg" data-close></div>
        <div class="modal__content">
            <div class="modal__title">Ваша заявка отправлена!</div>
			<div class="modal__descr">Благодарим за заявку. Мы свяжемся с вами в ближайшее время, чтобы уточнить детали.</div>
			<button type="submit" class="modal__btn btn btn--primary">Отлично</button>
        </div>
		<button type="button" class="modal__close" data-close>
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M21 21L3 3" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M21.0001 3L3 21.0001" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
		</button>
    </div>

	<div class="modal" id="modal-enroll">
        <div class="modal__bg" data-close></div>
        <div class="modal__content">
            <div class="modal__title">Ваша заявка отправлена!</div>
			<form class="modal__form" data-validate>
				<div class="modal__inps">
					<input type="text" class="modal__inp" placeholder="Имя" required data-pattern="[A-Za-zА-Яа-яЁё][A-Za-zА-Яа-яЁё\s'-]{1,}" data-error-empty="Укажите имя" data-error="Введите корректное имя">
					<input type="text" class="modal__inp" placeholder="Фамилия" required data-pattern="[A-Za-zА-Яа-яЁё][A-Za-zА-Яа-яЁё\s'-]{1,}" data-error-empty="Укажите фамилию" data-error="Введите корректную фамилию">
					<input type="text" class="modal__inp" placeholder="Название компании (необязательно)" data-pattern=".{2,}" data-error="Введите название компании">
					<input type="text" class="modal__inp" placeholder="ИНН" required data-pattern="\d{10}|\d{12}" data-error-empty="Укажите ИНН" data-error="ИНН состоит из 10 или 12 цифр">
					<input type="text" class="modal__inp" placeholder="ИНН" required data-pattern="\d{10}|\d{12}" data-error-empty="Укажите ИНН" data-error="ИНН состоит из 10 или 12 цифр">
					<input type="text" inputmode="tel" class="modal__inp" placeholder="+7 (___) ___-__-__" required data-mask="+7 (999) 999-99-99" data-pattern="\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}" data-error-empty="Укажите номер телефона" data-error="Введите номер полностью">
					<input type="text" class="modal__inp" placeholder="E-mail" required data-pattern="[^\s@]+@[^\s@]+\.[A-Za-zА-Яа-яЁё]{2,}" data-error-empty="Укажите e-mail" data-error="Введите корректный e-mail">
				</div>
				<label class="modal__check checkbox">
					<input type="checkbox" required data-error="Необходимо согласие на обработку персональных данных">
					<span class="checkbox__box">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
					</span>
					<span class="checkbox__text">Я даю согласие на обработку персональных данных в <br>соответствии с Федеральным законом</span>
				</label>
                <button type="submit" class="btn btn--primary">Отправить</button>
            </form>
        </div>
		<button type="button" class="modal__close" data-close>
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M21 21L3 3" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M21.0001 3L3 21.0001" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
		</button>
    </div>

	<div class="modal" id="modal-find">
        <div class="modal__bg" data-close></div>
        <div class="modal__content">
            <div class="modal__title">Не нашли нужный товар?</div>
			<p class="modal__descr">Мы часто обновляем ассортимент на сайте и может быть именно сейчас нужный вам товар на актуализации! Оставьте свои контакты и мы подберем вам нужный товар или предложим аналог.</p>
			<form class="modal__form" data-validate>
				<div class="modal__inps">
					<input type="text" class="modal__inp" placeholder="Имя" required data-pattern="[A-Za-zА-Яа-яЁё][A-Za-zА-Яа-яЁё\s'-]{1,}" data-error-empty="Укажите имя" data-error="Введите корректное имя">
					<input type="text" class="modal__inp" placeholder="E-mail" required data-pattern="[^\s@]+@[^\s@]+\.[A-Za-zА-Яа-яЁё]{2,}" data-error-empty="Укажите e-mail" data-error="Введите корректный e-mail">
					<input type="text" class="modal__inp" placeholder="Артикул (необязательно)" data-pattern="[A-Za-zА-Яа-яЁё0-9][A-Za-zА-Яа-яЁё0-9\s./-]*" data-error="Введите корректный артикул">
				</div>
				<label class="modal__check checkbox">
					<input type="checkbox" required data-error="Необходимо согласие на обработку персональных данных">
					<span class="checkbox__box">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
					</span>
					<span class="checkbox__text">Я даю согласие на обработку персональных данных в <br>соответствии с Федеральным законом</span>
				</label>
                <button type="submit" class="btn btn--primary">Отправить</button>
            </form>
        </div>
		<button type="button" class="modal__close" data-close>
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M21 21L3 3" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M21.0001 3L3 21.0001" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
		</button>
    </div>

	<div class="modal" id="modal-developers">
        <div class="modal__bg" data-close></div>
        <div class="modal__content">
            <div class="modal__title">Разработка сайта</div>
			<div class="modal__team">
				<div class="modal__team_images">
					<div class="modal__team_image"><img src="<?=SITE_TEMPLATE_PATH ?>/img/team-img-1.png" alt=""></div>
					<div class="modal__team_image"><img src="<?=SITE_TEMPLATE_PATH ?>/img/team-img-2.png" alt=""></div>
				</div>

				<div class="modal__team_items">
					<div class="modal__team_item">
						<div class="modal__team_name">Алексей, <br>Фронтенд-разработчик</div>
						<a href="#" class="modal__team_link">Написать в Telegram</a>
					</div>
					<div class="modal__team_item">
						<div class="modal__team_name">Ольга, дизайнер</div>
						<a href="#" class="modal__team_link">Написать в Telegram</a>
					</div>
				</div>
			</div>
        </div>
		<button type="button" class="modal__close" data-close>
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M21 21L3 3" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M21.0001 3L3 21.0001" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
		</button>
    </div>

	<!-- <div class="cookie">
		<p class="cookie__text">
			Используем куки и рекомендательные технологии, оставаясь на сайте, вы соглашаетесь на их использование.
		</p>
		<button class="cookie__btn btn btn--primary btn--sm">Я согласен</button>
	</div> -->

	<script src="<?=SITE_TEMPLATE_PATH ?>/libs/swiper/swiper.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH ?>/js/script.js"></script>
</body>
</html>
