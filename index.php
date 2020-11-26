<html>

<head>
    <title>Home</title>
    <meta charset="utf-8" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css">
</head>

<body>
    <div class="top">
        <header class="header">
            <?php include "header.php" ?>
        </header>
    </div>
    <div class="wrapper">
        <div class="content">
            <div class="row">
                <?php
                require_once 'php/connection.php';
                $link = mysqli_connect($host, $user, $password, $database)
                    or die("Ошибка " . mysqli_error($link));
                $query = "SELECT * FROM promo WHERE id=(SELECT max(id) FROM promo) ";
                $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                if ($result) {
                    $rows = mysqli_num_rows($result); // количество полученных строк
                    $row = mysqli_fetch_row($result);
                    $name = $row[1] . $row[2];
                }
                ?>
                <img src="img/promo/<?= $name ?>">
            </div>
            <h1 align="center">Наш ассортимент</h1>
            <div class="row">
                <?php
                include "php/get_categories_for_catalog.php";
                ?>
            </div>
        </div>
    </div>
    <footer class="footer">
        <?php include "footer.php" ?>
    </footer>
</body>

</html>