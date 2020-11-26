<html>
<head>
    <title>Доставка</title>
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
            <h1 align="center">Оплата и доставка</h1>
            <h3 align="center">Оплата</h3>
            <p style="text-align:justify;">
                Оплата производится водителю-экспедитору до сборки мебели,
                после подъёма-разгрузки в помещение и визуального осмотра упаковок на наличие механических повреждений.
                Упаковки мебели со стеклом/зеркалом проверяются личным осмотром покупателем/представителем со вскрытием
                упаковки под роспись о целостности и общем количеством передаваемых мест.
            </p>
            <p style="text-align:justify;">
                Оплата возможна как наличным расчетом, так и безналичным (картой).
            </p>
            <p></p>
            <h3 align="center">Рассрочка</h3>
            <p style="text-align:justify;">
                В нашем фирменном салоне Вы всегда сможете оформить рассрочку
                на срок до 24 месяцев БЕЗ ПЕРЕПЛАТЫ по партнерской программе от Зеленого Банка.
            </p>
            <p></p>
            <h3 align="center">Доставка</h3>
            <p style="text-align:justify;">
                Доставка осуществляется по городу Ростов-на-Дону и Ростовской области в течение 1 – 3 рабочих дней.
            </p>
            <p style="text-align:justify;">Доставка в рабочие дни совершается с 8:00 до 19:00.</p>
            <p style="text-align:justify;">Цены:</p>
            <ul>
                <li>Малогабаритные – </li>
                <li>Среднегабаритные –</li>
                <li>Крупногабаритные –</li>
            </ul>
            <p style="text-align:justify;">Стоимость доставки по области (кроме Ростова и Аксай) 20 руб/км.</p>
            <p style="text-align:justify;">
                При покупке товара свыше 50000 рублей доставка осуществляется бесплатно.
            </p>
            <p></p>
            <h3 align="center">Сборка мебели</h3>
            <p style="text-align:justify;">
                Стоимость данной услуги составляет 6% от стоимости мебели. Сборка осуществляется сразу же после доставки и выгрузки.
            </p>
            <p style="text-align:justify;">
                По Вашему желанию сборка возможна в другой день.
            </p>

        </div>
    </div>
    <footer class="footer">
        <?php include "footer.php" ?>
    </footer>
</body>
</html>