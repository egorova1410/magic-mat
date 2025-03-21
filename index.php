<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Magic mat - ресторан</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/reset.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/bd7b41f0b5.js" crossorigin="anonymous"></script>
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
                </ul>
                <ul class="mobile__card">
                  <li class="mobile__card-title">ХОЛОДНОЕ:</li>
                  <li class="mobile__item">
                    <img src="img/mobile/mobile-img4.png" alt class="mobile__img"/>
                    <a href="coldSnacks.php" class="mobile__link">Холодные закуски </a>
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
                <ul class="mobile__card">
						<li class="mobile__card-title">НАПИТКИ:</li>
						<li class="mobile__item">
						  <img src="img/mobile/mobile-img4.png" altclass="mobile__img"/>
						  <a href="tea.php" class="mobile__link">Чай</a>
						</li>
						<li class="mobile__item">
						  <img src="img/mobile/mobile-img5.png" alt class="mobile__img"/>
						  <a href="coffee.php" class="mobile__link">Кофе</a>
						</li>
					  </ul>
              </ul>
            </li>
          </ul>
          <ul class="user__action">
            <li class="user__action-item">
              <a href="#" class="user__action-link"><i class="fa-solid fa-magnifying-glass"></i></a>
            </li>
            <li class="user__action-item" id="user">
              <a href="User/Auth/Auth.php" class="user__action-link"
                ><i class="fa-solid fa-user"></i></a>
            </li>
            <li class="basket__innet">
              <a href="#" class="basket"> </a>
              <button class="smart-basket__min">
                <img class="smart-basket__min-icon" src=".././smartbasket/img/shopping-basket-wight.svg" width="18" alt="Корзина">
                <span class="smart-basket__min-count">0</span>
              </button>
            </li>
          </ul>
        </div>
      </header>
      <main class="main">
        <div class="top">
          <div class="container top__container">
            <div class="top__inner">
              <div class="top__deliveri">
                <h3 class="h3__title">Доставка готовой еды из фермерских продуктов!</h3>
                <img class="top__tocka1" src="img/tocka1.svg" alt />
                <div class="top__deliveri-margin">
                  <a href="tel:+7 (499) 841-67-29" class="phone">+7 (499) 841-67-29</a>
                  <a href="mailto:delivery@midas.rest" class="mail">delivery@magic_mat.rest</a>
                </div>
              </div>
              <div class="stock">
                <img src="img/special_for_you.jpg" alt class="stock__img" />
              </div>
              <div class="card">
                <h4 class="stock__title">Стейк из лосося с овощами</h4>
                <div class="gramm__bg-stock">
                  <p class="gramm">250 г</p>
                </div>
                <p class="structure__stock">
                  Нежный стейк дикого лосося, пропитанный соком и ароматом
                  слегка обжаренных фермерских овощей
                </p>
                <div class="stock__buy">
                  <p class="cost">1 200 ₽</p>
                  <div class="product__quantity"></div>
                  <button
                    class="inbasket"
                    data-sb-id-or-vendor-code="00"
                    data-sb-product-name="Стейк из лосося с овощами"
                    data-sb-product-price="1200"
                    data-sb-product-quantity="1"
                    data-sb-product-img="img/special_for_you.jpg">
                    <i class="fa-solid fa-basket-shopping"></i>
                  </button>
                </div>
              </div>
              <img class="top__tocka2" src="img/tocka2.svg" alt />
            </div>
          </div>
        </div>
        <section class="section">
          <div class="delivery">
            <h2>
              Информация о <br />
              доставке
            </h2>
            <div class="deliveryMod">
              <div class="deliveryInfo">
                <img src="img/delivery/info.svg" alt="" />
                <p>
                  ВРЕМЯ ДОСТАВКИ <br />
                  До 90 мин.
                </p>
              </div>
              <div class="deliveryInfo">
                <img src="img/delivery/wallet.svg" alt="" />
                <p>
                  МИН. СУММА ЗАКАЗА <br />
                  500 ₽
                </p>
              </div>
              <div class="deliveryInfo">
                <img src="img/delivery/car.svg" alt="" />
                <p>
                  СТОИМОСТЬ ДОСТАВКИ <br />
                  250 ₽
                </p>
              </div>
              <div class="deliveryInfo">
                <img src="img/delivery/medal.svg" alt="" />
                <p>
                  БЕСПЛАТНАЯ ДОСТАВКА <br />
                  от 800 ₽
                </p>
              </div>
            </div>
          </div>

          <h2 class="section__title">Популярные блюда</h2>
          <div class="popular-food">
            <div class="container">
              <div class="cardholder">
                <div class="card">
                  <img class="card__img" src="img/card1.jpg" alt />
                  <h4 class="card__title">Хачапури по-аджарски</h4>
                  <div class="card__gramm-bg">
                    <p class="card__gram">430 г</p>
                  </div>
                  <p class="card__structure">
                    Хачапури "Лодочка" с начинкой из расплавленного сыра
                    сулугуни, яйца и масла.
                  </p>

                  <div class="card__buy">
                    <div class="cost__block">
                      <p class="card__cost-old"></p>
                      <p class="card__cost">470 ₽</p>
                    </div>
                    <div class="product__quantity"></div>
                    <button
                      class="inbasket"
                      data-sb-id-or-vendor-code="01"
                      data-sb-product-name="Хачапури по-аджарски"
                      data-sb-product-price="470"
                      data-sb-product-quantity="1"
                      data-sb-product-img="img/card1.jpg">
                      <i class="fa-solid fa-basket-shopping"></i>
                    </button>
                  </div>
                </div>
                <div class="card">
                  <img class="card__img" src="img/card2.jpg" alt />
                  <h4 class="card__title">Хинкали традиционные (6шт)</h4>
                  <div class="card__gramm-bg">
                    <p class="card__gram">350 г</p>
                  </div>
                  <p class="card__structure">
                    Пряные хинкали с начинкой из ароматной баранины со специями.
                  </p>

                  <div class="card__buy">
                    <div class="cost__block">
                      <p class="card__cost-old">620 ₽</p>
                      <p class="card__cost">495 ₽</p>
                    </div>

                    <div class="product__quantity"></div>
                    <button
                      class="inbasket"
                      data-sb-id-or-vendor-code="02"
                      data-sb-product-name="Хинкали традиционные (6шт)"
                      data-sb-product-price="495"
                      data-sb-product-quantity="1"
                      data-sb-product-img="img/card2.jpg">
                      <i class="fa-solid fa-basket-shopping"></i>
                    </button>
                  </div>
                </div>
                <div class="card">
                  <img class="card__img" src="img/card3.jpg" alt />
                  <h4 class="card__title">Хинкали жаренные (6шт)</h4>
                  <div class="card__gramm-bg">
                    <p class="card__gram">350 г</p>
                  </div>
                  <p class="card__structure">
                    Пряные хинкали с начинкой из ароматной баранины со специями.
                  </p>

                  <div class="card__buy">
                    <div class="cost__block">
                      <p class="card__cost-old">650 ₽</p>
                      <p class="card__cost">520 ₽</p>
                    </div>

                    <div class="product__quantity"></div>
                    <button
                      class="inbasket"
                      data-sb-id-or-vendor-code="03"
                      data-sb-product-name="Хинкали жаренные (6шт)"
                      data-sb-product-price="520"
                      data-sb-product-quantity="1"
                      data-sb-product-img="img/card3.jpg">
                      <i class="fa-solid fa-basket-shopping"></i>
                    </button>
                  </div>
                </div>
                <div class="card">
                  <img class="card__img" src="img/card4.jpg" alt />
                  <h4 class="card__title">Ланч низкокалорийный</h4>
                  <div class="card__gramm-bg">
                    <p class="card__gram">450 г</p>
                  </div>
                  <p class="card__structure">
                    Греческий йогурт с ягодами, 3 хинкали традиционных, салат
                    цезарь, пирожки с уткой, морс
                  </p>

                  <div class="card__buy">
                    <div class="cost__block">
                      <p class="card__cost-old">1 435 ₽</p>
                      <p class="card__cost">1 148 ₽</p>
                    </div>

                    <div class="product__quantity"></div>
                    <button
                      class="inbasket"
                      data-sb-id-or-vendor-code="04"
                      data-sb-product-name="Ланч низкокалорийный"
                      data-sb-product-price="1148"
                      data-sb-product-quantity="1"
                      data-sb-product-img="img/card4.jpg">
                      <i class="fa-solid fa-basket-shopping"></i>
                    </button>
                  </div>
                </div>
                <div class="card">
                  <img class="card__img" src="img/card5.jpg" alt />
                  <h4 class="card__title">Хачапури по-мегрельски</h4>
                  <div class="card__gramm-bg">
                    <p class="card__gram">430 г</p>
                  </div>
                  <p class="card__structure">Невероятно ароматная лепёшка с сыром сулугуни внутри и
                    снаружи</p>

                  <div class="card__buy">
                    <div class="cost__block">
                      <p class="card__cost-old"></p>
                      <p class="card__cost">490 ₽</p>
                    </div>

                    <div class="product__quantity"></div>
                    <button
                      class="inbasket"
                      data-sb-id-or-vendor-code="05"
                      data-sb-product-name="Хачапури по-мегрельски"
                      data-sb-product-price="490"
                      data-sb-product-quantity="1"
                      data-sb-product-img="img/card5.jpg">
                      <i class="fa-solid fa-basket-shopping"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

<section class="section cardholder__margin">  
<h2 class="section__title">Меню</h2>
          <div class="menu-restoran">
            <div class="container">
              <ul class="menu-restoran__list">
                <li class="menu-restoran__item menu-restoran__item-stock">
                  <a class="menu-restoran__link" href="stocks.php">
                    <p class="menu-restoran-stock__value">30%</p>
                    <p class="menu-restoran-stock__title fire">Акции</p>
                    <p class="menu-restoran-stock__value">20%</p>
                  </a>
                </li> 
                <li class="menu-restoran__item">
                  <a class="menu-restoran__link" href="hot.php">
                    <img class="menu-restoran__img-top" src="img/card-rest1.1.png" alt/>
                    <p class="menu-restoran__title">Горячие блюда</p>
                    <img class="menu-restoran__img-bottom" src="img/card-rest1.2.png" alt/>
                  </a>
                </li>
                <li class="menu-restoran__item">
                  <a class="menu-restoran__link" href="soups.php">
                    <img
                      class="menu-restoran__img-top" src="img/card-rest2.1.png"alt/>
                    <p class="menu-restoran__title">Супы</p>
                    <img class="menu-restoran__img-bottom" src="img/card-rest2.2.png"alt/>
                  </a>
                </li>
                <li class="menu-restoran__item">
                  <a class="menu-restoran__link" href="coldSnacks.php">
                    <img class="menu-restoran__img-top"src="img/card-rest4.1.png" alt/>
                    <p class="menu-restoran__title">Холодные закуски</p>
                    <img class="menu-restoran__img-bottom" src="img/card-rest4.2.png"alt/>
                  </a>
                </li>
                <li class="menu-restoran__item">
                  <a class="menu-restoran__link" href="salads.php">
                    <img class="menu-restoran__img-top" src="img/card-rest5.1.png" alt/>
                    <p class="menu-restoran__title">Салаты</p>
                    <img class="menu-restoran__img-bottom" src="img/card-rest5.2.png" alt/>
                  </a>
                </li>
              </ul>
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

    <link rel="stylesheet" href="smartbasket/css/smartbasket.min.css" />

    <div class="smart-basket__wrapper"></div>

    <script src="./smartbasket/js/smartbasket.min.js"></script>
    <script src="./js/modalAuth.js"></script>
    <script>
      $(function () {
        $(".smart-basket__wrapper").smbasket({
          productElement: "card",
          buttonAddToBasket: "inbasket",
          productPrice: "product__price-number",
          productSize: "product__size-element",

          productQuantityWrapper: "product__quantity",
          smartBasketMinArea: "basket",
          countryCode: "+7",
          smartBasketCurrency: "₽",
          smartBasketMinIconPath: "./smartbasket/img/shopping-basket-wight.svg",

          agreement: {
            isRequired: true,
            isChecked: true,
            isLink: "https://artstranger.ru/privacy.php",
          },
          nameIsRequired: false,
        });
      });
    </script>
  </body>
</html>
