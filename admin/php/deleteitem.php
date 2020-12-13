<?php
require_once '../../php/connection.php';
if (isset($_POST['delete-btn'])) {
    $link = mysqli_connect($host, $user, $password, $database) or die("Error" . mysqli_error($link));
    $code = $_POST['delete-btn'];
    $query = "DELETE FROM `catalog` WHERE `catalog`.`ID` = $code";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if ($result) {
        echo "<span style='color:black;'>Item Delete</span><br><span style='color:black;'>Return for 2 sec</span>";
        echo "<meta http-equiv=\"refresh\" content=\"2;URL=../catalog.php\">";
    }
    mysqli_close($link);
}
