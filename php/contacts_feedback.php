<?php
require_once 'connection.php';

if (isset($_POST['fio']) && isset($_POST['phone']) && isset($_POST['message'])) {
    $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));

    $fio = htmlentities(mysqli_real_escape_string($link, trim($_POST['fio'])));
    $phone = htmlentities(mysqli_real_escape_string($link, trim($_POST['phone'])));
    $email = htmlentities(mysqli_real_escape_string($link, trim($_POST['email'])));
    $message = htmlentities(mysqli_real_escape_string($link, trim($_POST['message'])));
    $date_time = date('Y-m-d H:i:s');

    $query = "INSERT INTO `feedback` (`id`, `fio`, `phone`, `email`, `message`, `time`) VALUES (NULL, '$fio', '$phone', '$email', '$message', '$date_time') ";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

    if ($result) {
        $sys_message = "<span style='color:blue;'>Ваше сообщение отправлено. Мы рассмотрим его в ближайшее время</span>";
    } else {
        $sys_message = "<span style='color:red;'>Error</span>";
    }
    mysqli_close($link);
}
