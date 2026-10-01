<?php
if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

/** @var \CMain $APPLICATION */

if (!\Bitrix\Main\Loader::includeModule('landing'))
{
	return;
}

\Bitrix\Landing\Connector\Mobile::prologMobileHit();
$language = \Bitrix\Landing\Manager::getLangISO();
?><!DOCTYPE html>
<html lang="<?= $language;?>">
<head>
	<?php $APPLICATION->ShowHead();?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php $APPLICATION->ShowTitle();?></title>
	
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH ?>/libs/swiper/swiper.min.css">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH ?>/css/style.css">
</head>
<body>

<?php $APPLICATION->ShowPanel()?>



	<header class="header">
		<div class="wrapper">
			<div class="header__content">
				<a href="/" class="header__logo">
					<picture>
						<source srcset="<?=SITE_TEMPLATE_PATH ?>/img/logo-mob.png" media="(max-width: 1200px)">
						<source srcset="<?=SITE_TEMPLATE_PATH ?>/img/logo.png" media="(min-width: 1201px)">
						<img src="<?=SITE_TEMPLATE_PATH ?>/img/logo.png" alt="PROSISTEMIKA" width="407" height="103">
					</picture>
				</a>
				<div class="header__center">
					<nav class="header__nav">
						<ul>
							<li><a href="#">Производители</a></li>
							<li><a href="#">О компании</a></li>
							<li><a href="#">Оплата и доставка</a></li>
							<li><a href="#">Новости</a></li>
							<li><a href="#">Контакты </a></li>
						</ul>
					</nav>
					<div class="header__center_bottom">
						<button type="button" class="header__catalog catalog-btn">
							Каталог
							<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<ellipse cx="3.54167" cy="3.14815" rx="3.54167" ry="3.14815" fill="currentColor"/>
								<ellipse cx="13.4557" cy="3.14815" rx="3.54167" ry="3.14815" fill="currentColor"/>
								<ellipse cx="13.4557" cy="11.9606" rx="3.54167" ry="3.14815" fill="currentColor"/>
								<ellipse cx="3.54167" cy="11.9606" rx="3.54167" ry="3.14815" fill="currentColor"/>
							</svg>
						</button>
						<form class="header__search search">
							<input type="search" class="search__input" placeholder="Поиск по каталогу или артикулу...">
							<button type="submit" class="search__btn" aria-label="Найти">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M21.7992 20.2034L17.347 15.7494C18.6819 14.0098 19.3052 11.8276 19.0903 9.64545C18.8755 7.46328 17.8386 5.44454 16.19 3.99875C14.5415 2.55295 12.4047 1.78837 10.2131 1.86009C8.02158 1.93182 5.93937 2.83448 4.38888 4.38497C2.83839 5.93546 1.93573 8.01768 1.864 10.2092C1.79228 12.4008 2.55686 14.5376 4.00265 16.1861C5.44845 17.8347 7.46719 18.8715 9.64936 19.0864C11.8315 19.3013 14.0137 18.678 15.7533 17.3431L20.2092 21.8C20.3139 21.9047 20.4381 21.9877 20.5748 22.0443C20.7116 22.1009 20.8581 22.1301 21.0061 22.1301C21.1541 22.1301 21.3006 22.1009 21.4374 22.0443C21.5741 21.9877 21.6983 21.9047 21.803 21.8C21.9076 21.6954 21.9906 21.5711 22.0473 21.4344C22.1039 21.2977 22.1331 21.1511 22.1331 21.0031C22.1331 20.8551 22.1039 20.7086 22.0473 20.5719C21.9906 20.4351 21.9076 20.3109 21.803 20.2063L21.7992 20.2034ZM4.12829 10.4994C4.12829 9.23853 4.50218 8.00599 5.20267 6.95762C5.90316 5.90926 6.8988 5.09216 8.06368 4.60965C9.22856 4.12714 10.5104 4.0009 11.747 4.24688C12.9836 4.49286 14.1195 5.10002 15.0111 5.99158C15.9027 6.88314 16.5098 8.01905 16.7558 9.25568C17.0018 10.4923 16.8755 11.7741 16.393 12.939C15.9105 14.1039 15.0934 15.0995 14.045 15.8C12.9967 16.5005 11.7641 16.8744 10.5033 16.8744C8.81307 16.8726 7.19257 16.2004 5.9974 15.0053C4.80223 13.8101 4.13003 12.1896 4.12829 10.4994Z" fill="white"/>
								</svg>
							</button>
						</form>
					</div>
				</div>
				<div class="header__right">
					<div class="header__contacts">
						<a href="tel:+78002003047" class="header__phone">+7 (800) 200-30-47</a>
						<a href="mailto:sale@prosistemika.ru" class="header__email">sale@prosistemika.ru</a>
					</div>
					<div class="header__btns">
						<button type="button" class="header__cta btn btn--primary btn--sm">Оставить заявку</button>
						<a href="mailto:sale@prosistemika.ru" class="header__icon header__icon--mail" aria-label="Email">
							<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
						</a>
						<a href="tel:+78002003047" class="header__icon header__icon--phone" aria-label="Телефон">
							<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
						</a>
						<button type="button" class="header__cart" aria-label="Корзина">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M9.375 20.25C9.375 20.6208 9.26503 20.9834 9.059 21.2917C8.85298 21.6 8.56014 21.8404 8.21753 21.9823C7.87492 22.1242 7.49792 22.1613 7.1342 22.089C6.77049 22.0166 6.4364 21.8381 6.17417 21.5758C5.91195 21.3136 5.73337 20.9795 5.66103 20.6158C5.58868 20.2521 5.62581 19.8751 5.76773 19.5325C5.90964 19.1899 6.14996 18.897 6.45831 18.691C6.76665 18.485 7.12916 18.375 7.5 18.375C7.99728 18.375 8.47419 18.5725 8.82582 18.9242C9.17746 19.2758 9.375 19.7527 9.375 20.25ZM17.25 18.375C16.8792 18.375 16.5166 18.485 16.2083 18.691C15.9 18.897 15.6596 19.1899 15.5177 19.5325C15.3758 19.8751 15.3387 20.2521 15.411 20.6158C15.4834 20.9795 15.662 21.3136 15.9242 21.5758C16.1864 21.8381 16.5205 22.0166 16.8842 22.089C17.2479 22.1613 17.6249 22.1242 17.9675 21.9823C18.3101 21.8404 18.603 21.6 18.809 21.2917C19.015 20.9834 19.125 20.6208 19.125 20.25C19.125 19.7527 18.9275 19.2758 18.5758 18.9242C18.2242 18.5725 17.7473 18.375 17.25 18.375ZM22.0753 7.08094L19.5169 15.3966C19.3535 15.9343 19.0211 16.4051 18.569 16.739C18.1169 17.0729 17.5692 17.2521 17.0072 17.25H7.77469C7.2046 17.2482 6.65046 17.0616 6.1953 16.7183C5.74015 16.3751 5.40848 15.8936 5.25 15.3459L2.04469 4.125H1.125C0.826631 4.125 0.540483 4.00647 0.329505 3.7955C0.118526 3.58452 0 3.29837 0 3C0 2.70163 0.118526 2.41548 0.329505 2.2045C0.540483 1.99353 0.826631 1.875 1.125 1.875H2.32687C2.73407 1.87626 3.12988 2.00951 3.45493 2.25478C3.77998 2.50004 4.01674 2.84409 4.12969 3.23531L4.81312 5.625H21C21.1761 5.62499 21.3497 5.6663 21.5069 5.74561C21.664 5.82492 21.8004 5.94001 21.905 6.08164C22.0096 6.22326 22.0795 6.38746 22.1091 6.56102C22.1387 6.73458 22.1271 6.91266 22.0753 7.08094ZM19.4766 7.875H5.45531L7.41375 14.7281C7.43617 14.8065 7.48354 14.8755 7.54867 14.9245C7.6138 14.9736 7.69315 15.0001 7.77469 15H17.0072C17.0875 15.0002 17.1656 14.9746 17.2303 14.927C17.2949 14.8794 17.3426 14.8123 17.3662 14.7356L19.4766 7.875Z" fill="#603CC6"/>
							</svg>
							<span class="header__cart-count">3</span>
						</button>
						<button type="button" class="header__burger" aria-label="Меню">
							<span></span><span></span><span></span>
						</button>
					</div>
				</div>
			</div>
		</div>
			<div class="catalog-menu">
				<div class="catalog-menu__top">
					<a href="/" class="catalog-menu__logo">
						<picture>
							<source srcset="<?=SITE_TEMPLATE_PATH ?>/img/logo-mob.png" media="(max-width: 1200px)">
							<source srcset="<?=SITE_TEMPLATE_PATH ?>/img/logo.png" media="(min-width: 1201px)">
							<img src="<?=SITE_TEMPLATE_PATH ?>/img/logo.png" alt="PROSISTEMIKA">
						</picture>
					</a>
					<button type="button" class="catalog-menu__close">
						<span class="catalog-menu__close-text">Закрыть</span>
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6L6 18M6 6l12 12"/></svg>
					</button>
				</div>
				<div class="catalog-menu__center">
					<button type="button" class="catalog-menu__toggle">
						<span>Каталог</span>
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
					</button>
					<div class="catalog-menu__body">
						<ul class="catalog-menu__col">
							<li><a href="#">Модули</a></li>
							<li><a href="#">Контроллеры</a></li>
							<li><a href="#">Преобразователи</a></li>
							<li><a href="#">Блоки управления</a></li>
							<li><a href="#">Панель оператора</a></li>
							<li><a href="#">Датчики</a></li>
							<li><a href="#">Кабели</a></li>
							<li><a href="#">Пневмооборудование</a></li>
							<li><a href="#">Сервопривод</a></li>
							<li><a href="#">Приводная техника</a></li>
						</ul>
						<ul class="catalog-menu__col">
							<li><a href="#">Вентиляторы</a></li>
							<li><a href="#">Выключатели</a></li>
							<li><a href="#">Автоматы</a></li>
							<li><a href="#">Контакторы</a></li>
							<li><a href="#">Энкодеры</a></li>
							<li><a href="#">Реле</a></li>
							<li><a href="#">Карты памяти</a></li>
							<li><a href="#">Предохранители</a></li>
							<li><a href="#">Сканеры</a></li>
							<li><a href="#">Соединители</a></li>
						</ul>
						<ul class="catalog-menu__col">
							<li><a href="#">Соединители</a></li>
							<li><a href="#">Адаптеры</a></li>
							<li><a href="#">Кнопки</a></li>
							<li><a href="#">Коммутаторы</a></li>
							<li><a href="#">Клеммы</a></li>
							<li><a href="#">Программное обеспечение</a></li>
							<li><a href="#">Диоды</a></li>
							<li><a href="#">Зажимы</a></li>
							<li><a href="#">Монтаж</a></li>
							<li><a href="#">Измерительные приборы</a></li>
						</ul>
					</div>
					<nav class="catalog-menu__links">
						<a href="#">Новости</a>
						<a href="#">Покупателям</a>
						<a href="#">Контакты</a>
					</nav>
				</div>
				<div class="catalog-menu__footer">
					<a href="tel:+78002003047" class="catalog-menu__phone">+7 (800) 200 -30-47</a>
					<a href="mailto:sale@prosistemika.ru" class="catalog-menu__email">sale@prosistemika.ru</a>
					<div class="catalog-menu__socials">
						<a href="#" class="catalog-menu__social" aria-label="Telegram">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M22 2 11 13M22 2l-7 20-4-9-9-4 20-7Z" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</a>
						<a href="#" class="catalog-menu__social" aria-label="WhatsApp">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
						</a>
						<a href="#" class="catalog-menu__social" aria-label="VK">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><text x="12" y="17" text-anchor="middle" font-family="sans-serif" font-size="11" font-weight="700" fill="currentColor">VK</text></svg>
						</a>
					</div>
				</div>
			</div>
	</header>

	<main>