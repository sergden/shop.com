<html>

<head>
    <title>Каталог товаров</title>
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
            <h1 align="center">Каталог</h1>
            <div class="row">
                <div class="row-items">
                    <?php
                    include "php/get_categories_for_catalog.php";
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