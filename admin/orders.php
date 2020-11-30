<html>

<head>
    <link type="text/css" rel="stylesheet" href="../css/style.css" />
    <title>Orders</title>
</head>

<body>
    <div class="admin_menu">
        <?php
        include 'menu.php';
        ?>
    </div>
    <?php
    require_once '../php/connection.php';
    $link = mysqli_connect($host, $user, $password, $database)
        or die("Ошибка " . mysqli_error($link));

    //Table Orders
    $query = "SELECT * FROM orders";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if ($result) {
        $rows = mysqli_num_rows($result); // количество полученных строк
        echo "<div class = \"Table_orders_items\"><h2>Список заказов</h2>";
        echo "<table class=\"table_price\">
    <tr>
        <th>IdOrder</th>
        <th>ФИО</th>
        <th>Телефон</th>
        <th>E-mail</th>
        <th>Адрес</th>
        <th>Сумма</th>
        <th>Дата</th>
        <th>Статус</th>
    </tr>";
        for ($i = 0; $i < $rows; ++$i) {
            $row = mysqli_fetch_row($result);
            echo "<tr>";
            for ($j = 0; $j < 8; ++$j) echo "<td>$row[$j]</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
        // очищаем результат
        mysqli_free_result($result);

        //Table OrderItems
        $query = "SELECT * FROM OrderItems";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
        if ($result) {
            $rows = mysqli_num_rows($result); // количество полученных строк
            echo "<div class = \"Table_orders_items\"><h2>Товары в заказах</h2>";
            echo "<table class=\"table_price\">
            <tr>
                <th>IdOrder</th>
                <th>IDProduct</th>
                <th>Title</th>
            </tr>";
            for ($i = 0; $i < $rows; ++$i) {
                $row = mysqli_fetch_row($result);
                echo "<tr>";
                for ($j = 0; $j < 3; ++$j) echo "<td>$row[$j]</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "</div>";
            // очищаем результат
            mysqli_free_result($result);
        }
    }
    mysqli_close($link);
    ?>
</body>

</html>