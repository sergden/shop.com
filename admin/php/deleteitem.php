<?php
require_once '../../php/connection.php';
if (isset($_POST['delete-btn'])) {
    $link = mysqli_connect($host, $user, $password, $database) or die("Error" . mysqli_error($link));
    $code = $_POST['delete-btn'];
    $query = "DELETE FROM `catalog` WHERE `catalog`.`ID` = $code";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if ($result) {
        $sys_message = "<span style='color:black;'>Запись удалены</span><br><span style='color:black;'>Возврат назад через 2 секунд</span>";
        echo "<meta http-equiv=\"refresh\" content=\"2;URL=../catalog.php\">";
    }
    mysqli_close($link);
}
