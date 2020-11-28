<html>

<head>
    <meta charset="utf-8" />

    <link type="text/css" rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css">
</head>

<body>
<div class="top">
        <header class="header">
            <?php include "../header.php" ?>
        </header>
    </div>
    <div class="wrapper">
        <div class="content">
            <?php
            require_once '../../php/connection.php';
            $link = mysqli_connect($host, $user, $password, $database) or die("Error" . mysqli_error($link));
            $query = "SELECT catalog.*, manufacturer.Name as `manufacturer_name`
            FROM catalog INNER JOIN manufacturer ON (catalog.Manufacturer=manufacturer.IDManuf)
            WHERE `Meta-tag`='klippan'";
            $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
            $row = mysqli_fetch_row($result);
            $h1 = $row[1]; //title
            $id = $row[0];
            $name_item = $row[1];
            $image = $row[6];
            $price = $row[3];
            $description = $row[4];
            $manufacturer = $row[8];
            echo "<title>$row[1]</title>"; //title
            mysqli_free_result($result);
            mysqli_close($link);
            ?>
            <h1><?= $h1 ?></h1>
            <div class="product-card">
                <div class="product-item">
                    <a>
                        <img src="../../img/divani/<?= $image ?>" />
                        <h4> <?= $price ?> ₽* </h4>
                        <form method="POST" action="../../php/addtocart.php">
                            <input class="submit-btn" type="submit" value="Купить**">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <input type="hidden" name="name-item" value="<?= $name_item ?>">
                            <input type="hidden" name="price" value="<?= $price ?>">
                            <input type="hidden" name="path" value="divani/<?= $name ?>">
                        </form>
                    </a>
                </div>
                <div class="manufacturer">
                    <h4>
                        Производитель: <?= $manufacturer ?>
                    </h4>
                    <h6>
                        Артикул: <?= $id ?>
                    </h6>
                </div>
            </div>
            <div class="description">
                <h3>
                    Описание
                </h3>
                <?= $description ?>
            </div>
        </div>
    </div>
    <hr>
    <h6>*Цена не окончательная</h6>
    <h6>**Цвет, размеры обговариваются с менеджером после заказа</h6>
    <footer class="footer">
        <?php
        include "../footer.php";
        ?>
    </footer>
</body>

</html>