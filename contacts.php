<html>
<head>
    <title>Контакты</title>
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
            <h1 align="center">Контакты</h1>
            <div class="row">
                <div class="contacts">
                    <h3>Адрес:</h3>
                    <p>
                        Адрес нашего офиса для заключения договоров купли-продажи мебели: г. Ростов-на-Дону, ул. 1 Конной армии, 1
                    </p>
                    <p>
                        Режим работы:
                    </p>
                    <span>пн-пт: 10:00 – 19:00</span><br />
                    <span>сб: Выходной</span><br />
                    <span>вс: Выходной</span>
                    <p>
                        Вы всегда сможете связаться в удобное для Вас время и удобным для Вас образом.
                    </p>
                    <p></p>
                    <h4>Реквизиты:</h4>
                    <p>
                        <span>ОГРНИП 000000000000000</span><br />
                        <span>ПАО СБЕРБАНК г.Ростов-на-Дону</span><br />
                        <span>Корр. счет 000-000-000-000-000-000-00</span><br />
                        <span>Расчетный счет 000-000-000-000-000-000-00</span><br />
                        <span>БИК 000000000</span>
                    </p>
                    <p></p>
                    <h4>Контактная информация:</h4>
                    <p>
                        <a href="tel: +78630000000">+7 (863) 000-00-00</a><br />
                        <a href="tel: +78630000001">+7 (863) 000-00-01</a>
                    </p>
                </div>
                <div class="feedback-form">
                    <form class="contacts-form" method="POST">
                        <h4 align="center">Напишите нам</h4>
                        <input class="contacts-name" type="text" required="" name="fio" maxlength="50" value="" placeholder="ФИО" />
                        <input type="tel" name="phone" required="" value="" size="20" pattern="[0-9]{10}" placeholder="Телефон (без 8)" />
                        <input type="email" name="email" value="" placeholder="E-mail" />
                        <textarea name="message" required="" placeholder="Сообщение"></textarea>
                        <input class="submit-btn" type="submit" name="send-btn" value="Отправить" />

                        <?php
                        include 'php/contacts_feedback.php';
                        ?>
                        <?= $sys_message ?>
                    </form>
                </div>
                <div class="map">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3de4926f1d9af725993cb11910fccc0e29a64a83da9d1d260990a60a55c0206e&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <?php include "footer.php" ?>
    </footer>
</body>
</html>