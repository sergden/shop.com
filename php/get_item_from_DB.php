<?php
require_once 'php/connection.php';
$link = mysqli_connect($host, $user, $password, $database) or die("Error" . mysqli_error($link));
$query = "SELECT * FROM catalog";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if ($result) {
    $rows = mysqli_num_rows($result);
    for ($i = 0; $i < $rows; ++$i) {
        $row = mysqli_fetch_row($result);
        echo "<div class=\"views-row\">";
        echo "<a href=\"productCard/$row[2]/$row[7].php\">"; //ref
        echo "<img src=\"img/$row[2]/$row[6]\" />"; //image
        echo "<h3>$row[1]</h3>"; //Title
        echo "<h4>$row[3] ₽</h4>"; //price
        echo "</a></div>";
    }
    mysqli_free_result($result);
}
mysqli_close($link);
