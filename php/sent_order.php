<?php
require_once 'connection.php';
if (isset($_POST['fio']) && isset($_POST['phone']) && isset($_POST['address'])) {
    $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
    $fio = htmlentities(mysqli_real_escape_string($link, trim($_POST['fio'])));
    $phone = htmlentities(mysqli_real_escape_string($link, trim($_POST['phone'])));
    $email = htmlentities(mysqli_real_escape_string($link, trim($_POST['email'])));
    $address = htmlentities(mysqli_real_escape_string($link, trim($_POST['address'])));
    $date_time = date('Y-m-d H:i:s');
    $query_items = "SELECT `code`, `name`, `price` FROM `temp_cart_for_user` ";
    $query_items_result = mysqli_query($link, $query_items) or die("Ошибка " . mysqli_error($link));
    $IDi = rand(1, 10000000);
    if ($query_items_result) {
        $rows = mysqli_num_rows($query_items_result); // количество полученных строк
        for ($i = 0; $i < $rows; ++$i) {
            $row = mysqli_fetch_row($query_items_result);
            $query_order = "INSERT INTO `orders`(`idOrder`, `fio`, `phone`, `email`, `address`, `ItemID`, `name`, `price`, `date`) VALUES ($IDi, '$fio', '$phone', '$email', '$address', '$row[0]', '$row[1]', '$row[2]', '$date_time')";
            $result = mysqli_query($link, $query_order) or die("Ошибка " . mysqli_error($link));
        }
        mysqli_free_result($query_items_result); // очистка результата
    }
    $query_clear = "DELETE FROM `temp_cart_for_user`";
    mysqli_query($link, $query_clear) or die("Ошибка " . mysqli_error($link));
    if ($result) {
        $sys_message = "<span style='color:blue;'>Ваш заказ оформлен</span>";
    } else {
        $sys_message = "<span style='color:red;'>Error</span>";
    }
    mysqli_close($link);
}