<html>

<head>
    <title>Шкафы</title>
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
            <h1 align="center">Шкафы</h1>
            <div class="row">
                <div class="row-items">
                    <?php
                    require_once 'php/connection.php';
                    $link = mysqli_connect($host, $user, $password, $database) or die("Error" . mysqli_error($link));
                    $query = "SELECT * FROM catalogshkaphi";
                    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                    if ($result) {
                        $rows = mysqli_num_rows($result);
                        for ($i = 0; $i < $rows; ++$i) {
                            $row = mysqli_fetch_row($result);
                            echo "<div class=\"views-row\">";
                            echo "<a href=\"productCard/shkaphi/$row[1].php\">";
                            echo "<img src=\"img/shkaphi/$row[1]$row[5]\" />"; //image
                            echo "<h3>$row[2]</h3>"; // name item
                            echo "<h4>$row[4] ₽</h4>"; //price
                            echo "</a></div>";
                        }
                        mysqli_free_result($result);
                    }
                    mysqli_close($link);
                    ?>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <?php include "footer.php" ?>
    </footer>
</body>

</html>