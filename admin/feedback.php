<head>
    <link type="text/css" rel="stylesheet" href="../css/style.css" />
    <title>Feedback Message</title>
</head>
<div class="admin_menu">
    <?php
    include 'menu.php';
    ?>
</div>
<?php
require_once '../php/connection.php';
$link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));
$query = "SELECT * FROM feedback";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if ($result) {
    $rows = mysqli_num_rows($result); // количество полученных строк
    echo "<div class = \"Table_orders_items\">";
    echo "<table class=\"table_price\">
    <tr>
        <th>IdOrder</th>
        <th>ФИО</th>
        <th>Телефон</th>
        <th>E-mail</th>
        <th>Сообщение</th>
        <th>Дата</th>
    </tr>";
    for ($i = 0; $i < $rows; ++$i) {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
        for ($j = 0; $j < 9; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table></div>";

    // очищаем результат
    mysqli_free_result($result);
}
?>