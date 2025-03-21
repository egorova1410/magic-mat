

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
                    {user}
                </p>
                <ul class="mainLinks">
                    <li class="active">Заказы</li>
                    <a href="./PorfileAddress.php"><li>Адреса</li></a>
                    <a href="./ProfileSettings.php"><li>Настройки</li></a>
                    <a href="./ProfilePayment.php"><li>Способы оплаты</li></a>
                </ul>
                <ul class="additionalLinks">
                    <li>Связаться с нами</li>
                    <li class="logout">
                        <form method="POST"  action="../../vendor/Auth/Logout.php" style="text-align: center;">
                          <button type="submit" style="border: none; background: transparent; color: #fff; font-size: 18px;">Выйти</button>
                        </form>
                    </li>
                </ul>
            </nav>
            <div class="contentContainer">
                <h1>Октябрь 2025</h1>
                <div class="contentElements">
                    <div class="contentElement">
                        <img
                            src="../../img/orderedItem.png"
                            width="54"
                            height="54"
                            alt=""
                        />
                        <div class="contentElementText">
                            <a href="./ProfileOrdered.php">
                                <div class="contentElementTextTitle">
                                    <img src="../../img/Mark.svg" alt="" />
                                    <p>Доставили за 40 минут</p>
                                </div>
                            </a>
                            <div class="contentElementTextInfo">
                                <p>2368 ₽</p>
                                <p>26 сентября 2025 в 22:10</p>
                            </div>
                        </div>
                    </div>
                    <div class="contentElement">
                        <img
                            src="../../img/orderedItem.png"
                            width="54"
                            height="54"
                            alt=""
                        />
                        <div class="contentElementText">
                            <div class="contentElementTextTitle">
                                <img src="../../img/Mark.svg" alt="" />
                                <p>Доставили за 40 минут</p>
                            </div>
                            <div class="contentElementTextInfo">
                                <p>2368 ₽</p>
                                <p>26 сентября 2025 в 22:10</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
