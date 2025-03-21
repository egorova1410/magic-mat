<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Magic mat - ресторан</title>
		<!--Подключение стилей-->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/reset.css">

		<!--Подключение шрифтов-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link
			href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap"
			rel="stylesheet">
		<script src="https://kit.fontawesome.com/bd7b41f0b5.js"
			crossorigin="anonymous"></script>
	</head>

	<body>
		<div class="wrapper">
			<header id="1" class="header">
			  <div class="container header__inner">
				<a class="logo" href="index.php">
				  <img src="img/magic mat.svg" alt class="header__logo" />
				</a>
				<button class="menu__btn">
				  <span></span>
				  <span></span>
				  <span></span>
				</button>
				<ul class="menu__list">
				  <li class="menu__list-item fire">
					<a href="stocks.php" class="menu__list-link">АКЦИИ </a>
				  </li>
				  <li class="menu__list-item menu__list-arrow">
					<p class="menu__list-link">ГОРЯЧЕЕ</p>
					<ul class="menu__list-submenu">
					  <li class="submenu__item">
						<a href="hot.php" class="submenu__link">Горячие блюда</a>
					  </li>
					  <li class="submenu__item">
						<a href="soups.php" class="submenu__link">Супы</a>
					  </li>
					</ul>
				  </li>
				  <li class="menu__list-item menu__list-arrow">
					<p class="menu__list-link">ХОЛОДНОЕ</p>
					<ul class="menu__list-submenu">
					  <li class="submenu__item">
						<a href="coldSnacks.php" class="submenu__link">Холодные закуски</a>
					  </li>
					  <li class="submenu__item">
						<a href="salads.php" class="submenu__link">Салаты</a>
					  </li>
					  <li class="submenu__item">
						<a href="sauces.php" class="submenu__link">Соусы</a>
					  </li>
					</ul>
				  </li>
				  <li class="menu__list-item">
					<a href="fresh-bakery.php" class="menu__list-link">СВЕЖАЯ ВЫПЕЧКА</a>
				  </li>
				  <li class="menu__list-item">
					<a href="dessert.php" class="menu__list-link">ДЕСЕРТЫ</a>
				  </li>
				  <li class="menu__list-item menu__list-arrow">
					<p class="menu__list-link">НАПИТКИ</p>
					<ul class="menu__list-submenu">
					  <li class="submenu__item">
						<a href="tea.php" class="submenu__link">Чай</a>
					  </li>
					  <li class="submenu__item">
						<a href="coffee.php" class="submenu__link">Кофе</a>
					  </li>
					</ul>
				  </li>
				  <li class="mobile__nav">
					<ul class="mobile__stock">
					  <a class="mobile__stock-link" href="#">
						<p class="mobile__stock-value">30%</p>
						<a href="stocks.php" class="menu__list-link">Акции</p>
						<p class="mobile__stock-value">20%</p>
					  </a>
					</ul>
					<ul class="mobile__main-dish">
					  <ul class="mobile__card">
						<li class="mobile__card-title">ГОРЯЧЕЕ:</li>
						<li class="mobile__item">
						  <img src="img/mobile/mobile-img1.png" alt class="mobile__img"/>
						  <a href="hot.php" class="mobile__link">Горячие блюда</a>
						</li>
						<li class="mobile__item">
						  <img src="img/mobile/mobile-img2.png" alt class="mobile__img"/>
						  <a href="soups.php" class="mobile__link">Супы</a>
						</li>
						<li class="mobile__item">
						  <img src="img/mobile/mobile-img4 (2).png" alt class="mobile__img"/>
						  <a href="#" class="mobile__link">Хинкали</a>
						</li>
					  </ul>
					  <ul class="mobile__card">
						<li class="mobile__card-title">ХОЛОДНОЕ:</li>
						<li class="mobile__item">
						  <img src="img/mobile/mobile-img4.png" altclass="mobile__img"/>
						  <a href="#" class="mobile__link">Холодные закуски </a>
						</li>
						<li class="mobile__item">
						  <img src="img/mobile/mobile-img5.png" alt class="mobile__img"/>
						  <a href="salads.php" class="mobile__link">Салаты</a>
						</li>
						<li class="mobile__item">
						  <img src alt class="mobile__img"/>
						  <a href="sauces.php" class="mobile__link">Соусы</a>
						</li>
					  </ul>
					</ul>
					<ul class="mobile__card">
					  <li class="mobile__card-titleH">//////</li>
					  <li class="mobile__item">
						<img src="img/mobile/mobile-img6.png" alt class="mobile__img"/>
						  <a href="fresh-bakery.php" class="mobile__link">Свежая выпечка</a>
					  </li>
					  <li class="mobile__item">
						<img src="img/mobile/mobile-img7.png" alt class="mobile__img" />
						<a href="dessert.php" class="mobile__link">Десерты</a>
					  </li>
					  <li class="mobile__item">
						<img src="img/mobile/mobile-img8.png" alt class="mobile__img"/>
						<a href="#" class="mobile__link">Напитки</a>
					  </li>
					</ul>
				  </li>
				</ul>
					<ul class="user__action">
						<li class="user__action-item"><a href="#" class="user__action-link"><i
									class="fa-solid fa-magnifying-glass"></i></a>
						</li>
						<li class="user__action-item"><a href="#" class="user__action-link"><i
									class="fa-solid fa-user"></i></a>
						</li>
						<li class="basket__innet">
							<a href="#" class="basket">

							</a>
						</li>
					</ul>
				</div>

			</header>
			<main class="main">

				<div class="popular-food">
					<div class="container">
						<h2 class="h2__title">Супы</h2>
						<div class="bread-crumb">
							<a href="index.php">Главная</a>
							<span> / </span>
							<a href="soups.php">Супы</a>
						</div>
						<div class="cardholder cardholder__margin">
							<div class="card">
								<img class="card__img" src="img/soups/soups1.jpg" alt>
								<h4 class="card__title">Шурпа</h4>
								<div class="card__gramm-bg">
									<p class="card__gram">300 г</p>
								</div>
								<p class="card__structure"></p>
								<div class="card__buy">
									<div class="cost__block">
										<p class="card__cost-old"></p>
										<p class="card__cost">650 ₽</p>
									</div>
									<div class="product__quantity"></div>
									<button class="inbasket" data-sb-id-or-vendor-code="401"
										data-sb-product-name="Шурпа"
										data-sb-product-price="650" data-sb-product-quantity="1"
										data-sb-product-img="img/soups/soups1.jpg">
										<i class="fa-solid fa-basket-shopping"></i>
									</button>
								</div>
							</div>

							<div class="card">
								<img class="card__img" src="img/soups/soups2.jpg" alt>
								<h4 class="card__title">Суп из русского осетра </h4>
								<div class="card__gramm-bg">
									<p class="card__gram">380 г</p>
								</div>
								<p class="card__structure">с подкопченными томатами</p>
								<div class="card__buy">
									<div class="cost__block">
										<p class="card__cost">880 ₽</p>
									</div>

									<div class="product__quantity"></div>
									<button class="inbasket" data-sb-id-or-vendor-code="402"
										data-sb-product-name="Суп из русского осетра "
										data-sb-product-price="880" data-sb-product-quantity="1"
										data-sb-product-img="img/soups/soups2.jpg">
										<i class="fa-solid fa-basket-shopping"></i>
									</button>
								</div>
							</div>

							<div class="card">
								<img class="card__img" src="img/soups/soups3.jpg" alt>
								<h4 class="card__title">Суп из черного петуха</h4>
								<div class="card__gramm-bg">
									<p class="card__gram">300 г</p>
								</div>
								<p class="card__structure">со шпинатом и лапшой</p>
								<div class="card__buy">
									<div class="cost__block">
										<p class="card__cost">530 ₽</p>
									</div>

									<div class="product__quantity"></div>
									<button class="inbasket" data-sb-id-or-vendor-code="403"
										data-sb-product-name="Суп из черного петуха"
										data-sb-product-price="530" data-sb-product-quantity="1"
										data-sb-product-img="img/soups/soups3.jpg">
										<i class="fa-solid fa-basket-shopping"></i>
									</button>
								</div>
							</div>

							<div class="card">
								<img class="card__img" src="img/soups/soups4.jpg" alt>
								<h4 class="card__title">Сырный крем-суп</h4>
								<div class="card__gramm-bg">
									<p class="card__gram">250 г</p>
								</div>
								<p class="card__structure">Лосось, сливочный сыр, картофель и морковь</p>
								<div class="card__buy">
									<div class="cost__block">
										<p class="card__cost">670 ₽</p>
									</div>
									<div class="product__quantity"></div>
									<button class="inbasket" data-sb-id-or-vendor-code="404"
										data-sb-product-name="Сырный крем-суп"
										data-sb-product-price="670" data-sb-product-quantity="1"
										data-sb-product-img="img/soups/soups4.jpg">
										<i class="fa-solid fa-basket-shopping"></i>
									</button>
								</div>
							</div>

							<div class="card">
								<img class="card__img" src="img/soups/soups5.jpg" alt>
								<h4 class="card__title">Машхурда</h4>
								<div class="card__gramm-bg">
									<p class="card__gram">330 г</p>
								</div>
								<p class="card__structure"></p>
								<div class="card__buy">
									<div class="cost__block">
										<p class="card__cost-old"></p>
										<p class="card__cost">620 ₽</p>
									</div>
									<div class="product__quantity"></div>
									<button class="inbasket" data-sb-id-or-vendor-code="405"
										data-sb-product-name="Машхурда"
										data-sb-product-price="620" data-sb-product-quantity="1"
										data-sb-product-img="img/soups/soups5.jpg">
										<i class="fa-solid fa-basket-shopping"></i>
									</button>
								</div>
							</div>

							<div class="card">
								<img class="card__img" src="img/soups/soups6.jpg" alt>
								<h4 class="card__title">Крем-суп из чечевицы</h4>
								<div class="card__gramm-bg">
									<p class="card__gram">300 г</p>
								</div>
								<p class="card__structure">с травами</p>
								<div class="card__buy">
									<div class="cost__block">
										<p class="card__cost">500 ₽</p>
									</div>

									<div class="product__quantity"></div>
									<button class="inbasket" data-sb-id-or-vendor-code="406"
										data-sb-product-name="Крем-суп из чечевицы"
										data-sb-product-price="500" data-sb-product-quantity="1"
										data-sb-product-img="img/soups/soups6.jpg">
										<i class="fa-solid fa-basket-shopping"></i>
									</button>
								</div>
							</div>

							<div class="card">
								<img class="card__img" src="img/soups/soups7.jpg" alt>
								<h4 class="card__title">Суп из бычих хвостов</h4>
								<div class="card__gramm-bg">
									<p class="card__gram">400 г</p>
								</div>
								<p class="card__structure">с овощами</p>
								<div class="card__buy">
									<div class="cost__block">
										<p class="card__cost">730 ₽</p>
									</div>
									<div class="product__quantity"></div>
									<button class="inbasket" data-sb-id-or-vendor-code="407"
										data-sb-product-name="Суп из бычих хвостов"
										data-sb-product-price="730" data-sb-product-quantity="1"
										data-sb-product-img="img/soups/soups7.jpg">
										<i class="fa-solid fa-basket-shopping"></i>
									</button>
								</div>
							</div>
						</div>
					</section>
				</main>
				<footer class="footer">
					<div class="container">
					  <div class="footer__top">
						<a class="footer__logo" href="index.php"><img src="img/magic mat.svg" alt/></a>
						<ul class="footer__list">
						  <li class="footer__item">
							<a class="footer__link" href="callBack.php">Обратная связь</a>
						  </li>
						  <li class="footer__item">
							<a class="footer__link" href="order.php">Доставка</a>
						  </li>
						  <li class="footer__item">
							<a class="footer__link" href="about us.php">О нас</a>
						  </li>
						  <li class="footer__item">
							<a class="footer__link" href="payment.php">Оплата</a>
						  </li>
						  <li class="footer__item">
							<a class="footer__link" href="contacts.php">Контакты</a>
						  </li>
						</ul>
						<div class="footer-contact__inner">
						  <a href="tel:+7 (499) 841-67-29" class="footer__phone"
							>+7 (499) 841-67-29</a
						  >
						  <a href="mailto:delivery@magic_mat.rest" class="footer__mail"
							>delivery@magic_mat.rest</a
						  >
						</div>
					  </div>
					  <div class="footer__bottom">
						<p class="ofcite">© 2009–2025, ООО «magic mat», официальный сайт</p>
						<div class="aboutus">
						  <p>Политика конфиденциальности и оферта</p>
						  <p>Пользовательское соглашение</p>
						</div>
					  </div>
					</div>
				  </footer>
				</div>
			<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
			<script src="js/script.js"></script>

			<link rel="stylesheet" href="smartbasket/css/smartbasket.min.css">

			<div class="smart-basket__wrapper"></div>

			<script src="./smartbasket/js/smartbasket.min.js"></script>

			<script>
		$(function () {
			$('.smart-basket__wrapper').smbasket({
				productElement: 'card',
				buttonAddToBasket: 'inbasket',
				productPrice: 'product__price-number',
				productSize: 'product__size-element',

				productQuantityWrapper: 'product__quantity',
				smartBasketMinArea: 'basket',
				countryCode: '+7',
				smartBasketCurrency: '₽',
				smartBasketMinIconPath: './smartbasket/img/shopping-basket-wight.svg',

				agreement: {
					isRequired: true,
					isChecked: true,
					isLink: 'https://artstranger.ru/privacy.php',
				},
				nameIsRequired: false,
			});
		});
			</script>
		</body>
	</html>