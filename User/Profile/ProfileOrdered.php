<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Magic mat - ресторан</title>
    <link rel="stylesheet" href="../../css/User/Profile/Porifle.css" />
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <nav class="navigation">
          <p>
            Привет, <br />
            {user}!
          </p>
          <ul class="mainLinks">
            <li class="active">Заказы</li>
            <a href="./PorfileAddress.php"><li>Адреса</li></a>
            <a href="./ProfileSettings.php"><li>Настройки</li></a>
            <a href="./ProfilePayment.php"><li>Способы оплаты</li></a>
          </ul>
          <ul class="additionalLinks">
            <li>Связаться с нами</li>
            <li class="logout">Выйти</li>
          </ul>
        </nav>
        <div class="contentContainer">
          <div class="contentHeader">
            <img src="../../img/Mark.svg" width="32" alt="">
            <p>Доставили. Привезли за 40  минут</p>
            <div style="display: flex; gap: 12px; justify-content: center">
              <div style="display: flex; flex-direction: column; align-items: center">
                <img src="../../img/callback.svg" width="32" alt="">
                <p>
                  Связваться с <br> нами
                </p>
              </div>
              <div style="display: flex; flex-direction: column; align-items: center">
                <img src="../../img/retry.svg" width="32" alt="">
                <p>Повторить <br> заказ</p>
              </div>
            </div>
          </div>
          <div class="contentBody">
            <div class="contentBodyTitle">
              <b>Адрес доставки</b>
              <p>Омск, Химиков, 34</p>
            </div>
            <div class="contentElements" style="min-width: 100%;">
            <div class="contentElement" style="width: 100%;">
                        <img
                            src="../../img/l.png"
                            width="54"
                            height="54"
                            alt=""
                        />
                        <div class="contentElementText">
                            
                                <div class="contentElementTextTitle">
                                    <p>Ланч низкокалорийный</p>
                                    <p>450г</p>
                                </div>

                            <div class="contentElementTextInfo">
                                <p>1 шт</p>
                                <p>1 148₽</p>
                            </div>
                        </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
