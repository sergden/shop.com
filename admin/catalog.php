<html>

<head>
    <link type="text/css" rel="stylesheet" href="../css/style.css" />
    <title>Catalog</title>
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
    $query = "SELECT * FROM catalog";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if ($result) {
        $rows = mysqli_num_rows($result); // количество полученных строк
        echo "<div class = \"Table_orders_items\"><h2>Каталог</h2>";
        echo "<table class=\"table_price\">
    <tr>
        <th>Id</th>
        <th>Название</th>
        <th>Категория</th>
        <th>Цена</th>
        <th>Описание</th>
        <th>Производитель</th>
        <th>Фото</th>
        <th>MetaTag</th>
    </tr>";
        for ($i = 0; $i < $rows; ++$i) {
            $row = mysqli_fetch_row($result);
            echo "<tr>";
            for ($j = 0; $j < 8; ++$j) echo "<td>$row[$j]</td>";
            echo "<td>
            <form action=\"php/editItem.php\" method=\"POST\">
            <button type=\"submit\" name=\"edit-btn\" value=\"$row[0]\">Edit</button>
            </td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
        // очищаем результат
        mysqli_free_result($result);
    }
    mysqli_close($link);
    ?>
</body>

</html>