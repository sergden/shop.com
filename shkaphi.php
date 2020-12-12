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
            <?php include "header.php" ?>
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
                    $query = "SELECT catalog.ID, catalog.Title,catalog.Price,catalog.Manufacturer,catalog.Image,catalog.`Meta-tag`, categories.`Meta-tag` as `category_name-tag`
                    FROM catalog INNER JOIN categories ON (catalog.`Category`=categories.`IDCat`)
                    WHERE catalog.Category=4";
                    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                    if ($result) {
                        $rows = mysqli_num_rows($result);
                        for ($i = 0; $i < $rows; ++$i) {
                            $row = mysqli_fetch_row($result);
                            echo "<div class=\"views-row\">";
                            echo "<a href=\"productCard/$row[6]/$row[5].php\">"; //ref
                            echo "<img src=\"img/$row[6]/$row[4]\" />"; //image
                            echo "<h3>$row[1]</h3>"; //Title
                            echo "<h4>$row[2] ₽</h4>"; //price
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