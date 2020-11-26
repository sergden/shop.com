<html>
<head>
    <title>Корзина</title>
    <meta charset="utf-8" />

    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css">
</head>
<body>
    <div class="top">
        <header class="header">
            <?php include "header.php"?>
        </header>
    </div>

    <div class="wrapper">
        <div class="content">
            <!-- <h1 align="center">Корзина</h1> -->
            <div class="row">
                <form method="POST">
                    <?php
                    require_once 'php/connection.php';
                    $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
                    $query = "SELECT * FROM temp_cart_for_user";
                    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                    getData($result, $link);
                    function getData($result, $link)
                    {
                        if ($result) {
                            $rows = mysqli_num_rows($result); // количество полученных строк
                            echo "<table class=\"table_price\">
                        <caption>Cart</caption>
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>Артикул</th>
                                <th>Название</th>
                                <th>Цена</th>
                            </tr>";
                            for ($i = 0; $i < $rows; ++$i) {
                                $i = ++$i;
                                $row = mysqli_fetch_row($result);
                                $temp_row = $row[0];
                                $change_query = "UPDATE `temp_cart_for_user` SET `id` = '$i' WHERE `temp_cart_for_user`.`id` = $temp_row ";
                                mysqli_query($link, $change_query);
                                echo "<tr>";

                                echo "<td>$i</td>";
                                for ($j = 1; $j < 4; ++$j) echo "<td>$row[$j]</td>";
                                echo "<td>
                                    <button  class=\"del_btn\" type=\"submit\" name=\"delete-btn\" value=\"$i\">Удалить</button>
                             </td>";
                                echo "</tr>";
                                $i = --$i;
                            }
                            echo "</table>";
                        }
                    }

                    if (isset($_POST['delete-btn'])) {
                        $id = htmlentities(mysqli_real_escape_string($link, $_POST['delete-btn']));
                        $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
                        deleteItem($link, $id);
                    }

                    function deleteItem($link, $id)
                    {
                        $query_delete = "DELETE FROM `temp_cart_for_user` WHERE id = $id";
                        $result_delete = mysqli_query($link, $query_delete) or die("Ошибка " . mysqli_error($link));
                    }
                    // очищаем результат
                    mysqli_free_result($result);

                    mysqli_close($link);
                    ?>
                </form>
                <form class="delete_all" action="php/delete_all.php" method="POST">
                    <input class="delete_all_btn" type="submit" value="Удалить все">
                </form>
            </div>
            <div class="order">
                <h3 align="center">Оформление заказа</h3>
                <div class="form_order" align="center">
                    <form method="POST">
                        <input type="text" required="" name="fio" maxlength="50" value="" placeholder="ФИО" />
                        <input type="tel" name="phone" required="" value="" size="20" pattern="[0-9]{10}" placeholder="Телефон (без 8)" />
                        <input type="email" name="email" value="" placeholder="E-mail" />
                        <input type="text" name="address" required="" value="" placeholder="Адрес" />
                        <input class="order-btn" type="submit" name="send-btn" value="Оформить заказ" />

                        <?php
                        include 'php/sent_order.php';
                        ?>
                        <?= $sys_message ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <?php include "footer.php" ?>
    </footer>
</body>
</html>