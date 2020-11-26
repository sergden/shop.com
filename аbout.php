<html>
<head>
    <title>О магазине</title>
    <meta charset="utf-8" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css">
</head>
<body>
    <div class="top">
        <header class="header">
            <div class="logo">
                <a href="index.php">
                    <img src="img/logo.png" />
                </a>
            </div>
            <nav class="menu">
                <ul class=" topmenu">
                    <li>
                        <a href="catalog.php" class="submenu-link">
                            Каталог
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="submenu">
                            <li><a href="divani.php">Диваны</a></li>
                            <li><a href="kresla.php">Кресла</a></li>
                            <li><a href="krovati.php">Кровати</a></li>
                            <li><a href="for tv.php">Решения для ТВ</a></li>
                            <li><a href="stellagi.php">Стеллажи</a></li>
                            <li><a href="stoli.php">Столы</a></li>
                            <li><a href="styliya.php">Стулья</a></li>
                            <li><a href="shkaphi.php">Шкафы</a></li>
                        </ul>
                    </li>
                    <li><a href="delivery.php">Оплата и доставка</a></li>
                    <li><a href="contacts.php">Контакты</a></li>
                    <li><a href="warranty.php">Гарантия</a></li>
                    <li><a href="аbout.php">О магазине</a></li>
                </ul>
            </nav>
            <div class="search">
                <form name="search-form">
                    <input class="search-on-suite" name="search-place" type="text" placeholder="Искать здесь...">
                    <button name="search-btn" type="submit"></button>
                </form>
            </div>

            <div class="write-cart">
                <div class="write-tel">
                    <address>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <a href="mailto:example@example.com">example@example.com</a>
                    </address>
                    <i class="fa fa-phone-square" aria-hidden="true"></i>
                    +7 (863) XXX-XX-XX
                </div>
                <div class="cart">
                    <a href="cart.php">
                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                        Корзина
                    </a>
                </div>
            </div>
        </header>
    </div>

    <div class="wrapper">
        <div class="content">
            <h1 align="center">О магазине</h1>
            <p style="text-align:justify;">Мы рады приветствовать вас на сайте нашего магазина.</p>
            <p style="text-align:justify;">Наша компания специализируется на производстве мебели для дома. Наличие собственного производства позволяет нам изготавливать и поставлять продукцию в широком ассортименте с различным дизайном.</p>
            <p style="text-align:justify;">Мы имеем свой склад с постоянным наличием необходимого запаса товаров, отдел продаж и службу доставки.</p>
            <p style="text-align:justify;">Мы всегда рады общению с нашими клиентами. Если у вас есть какие-либо пожелания, предложения, замечания, касающиеся работы нашего Интернет-магазина - пишите нам, и мы с благодарностью примем ваше мнение во внимание:</p>
            <p style="text-align:justify;">
                Электронная почта:
                <a href="mailto:example@example.com">example@example.com</a>
            </p>
            <p class="aboutform" style="text-align:justify;">
                <a href="contacts.php">Форма обратной связи</a>
            </p>

        </div>
        <div class="services">
            <div class="content">
                <div class="title">
                    <h3 align="center">Наши услуги</h3>
                </div>
                <div class="our-services">
                    <div class="services-item">
                        <h5>Рассрочка</h5>
                        <p>
                            Предоставляем рассрочку до 12 месяцев на любую коллекцию мебели даже
                            без первоначального взноса. Никакой переплаты и моментальное оформление!
                        </p>
                    </div>
                    <div class="services-item">
                        <h5>Доставка</h5>
                        <p>
                            Транспортировка вашего заказа будет осуществлена оперативно
                            и вы получите свою мебель
                            в отличном состоянии и
                            в оговоренные сроки.
                        </p>
                    </div>
                    <div class="services-item">
                        <h5>Сборка</h5>
                        <p>
                            Стоимость составляет 6% от стоимости мебели.
                            Сборка осуществляется сразу же после доставки и выгрузки.
                            По желанию клиента сборка возможна в другой день.
                        </p>
                    </div>
                    <div class="services-item">
                        <h5>Гарантия</h5>
                        <p>
                            Вы получаете официальную
                            гарантию от производителя
                            и полное гарантийное
                            обслуживание в течение всего
                            предусмотренного срока
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <?php include "footer.php" ?>
    </footer>
</body>
</html>