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
            <a href="./Profile.php"> <li>Заказы</li></a>
            <li class="active">Адреса</li>
            <a href="./ProfileSettings.php"><li>Настройки</li></a>
            <a href="./ProfilePayment.php"><li>Способы оплаты</li></a>
          </ul>
          <ul class="additionalLinks">
            <li>Связаться с нами</li>
            <li class="logout">Выйти</li>
          </ul>
        </nav>
        <div class="contentContainer">
          <h1>Адреса</h1>
          <div class="contentElements">
            <div class="contentElementAddress">
              <p>Тверская 9ст 5, Отель Шато Волого</p>
              <div class="contentElementAddressFunctional">
                <img src="../../img/edit.svg" alt="" />
                <img src="../../img/trash.svg" id="delete" alt="" />
              </div>
            </div>
            <div class="contentElementAddress">
              <p>Избушка на курьих ножках</p>
              <div class="contentElementAddressFunctional">
                <img src="../../img/edit.svg" alt="" />
                <img src="../../img/trash.svg" id="delete" alt="" />
              </div>
            </div>
            <button class="btnSecondary">Добавить адрес</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
