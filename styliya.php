<html>

<head>
    <title>Стулья</title>
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
            <h1 align="center">Стулья</h1>
            <div class="row">
                <div class="row-items">
                    <?php
                    //////////////////////////////NEW/////////////////////////////////////
                    //include "php/get_item_from_DB.php"

                    //////////////////////////////OLD/////////////////////////////////////
                    require_once 'php/connection.php';
                    $link = mysqli_connect($host, $user, $password, $database) or die("Error" . mysqli_error($link));
                    $query = "SELECT * FROM catalogstyliya";
                    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                    if ($result) {
                        $rows = mysqli_num_rows($result);
                        for ($i = 0; $i < $rows; ++$i) {
                            $row = mysqli_fetch_row($result);
                            echo "<div class=\"views-row\">";
                            echo "<a href=\"productCard/styliya/$row[1].php\">";
                            echo "<img src=\"img/styliya/$row[1]$row[5]\" />"; //image
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
        <span style='color:white;'>2020</span>
    </footer>
</body>

</html>