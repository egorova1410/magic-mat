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
            <a href="./Profile.php"><li>Заказы</li></a>
            <a href="./PorfileAddress.php"><li>Адреса</li></a>
            <a href="./ProfileSettings.php"><li>Настройки</li></a>
            <a href=""><li class="active">Способы оплаты</li></a>
          </ul>
          <ul class="additionalLinks">
            <li>Связаться с нами</li>
            <li class="logout">Выйти</li>
          </ul>
        </nav>

        <div class="contentContainer">
          <h1>Настройки</h1>
          <div class="contentElements">
            <div class="contentElementPayment">
              <p>SberPay 0000</p>
              <input type="radio""/>
            </div>
            <div class="contentElementPayment">
              <p>MIR *** 0000</p>
              <input type="radio""/>
            </div>
            <div class="contentElementPayment">
              <p>MasterCard *** 000</p>
              <input type="radio""/>
            </div>
            <button class="btnSecondary">Добавить карту</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
