<meta http-equiv="refresh" content="5; url=/cart.php">
<?php
require_once 'connection.php';
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
$query = "DELETE FROM `temp_cart_for_user`";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if ($result) {
    $sys_message = "<span style='color:blue;'>Записи удалены</span><br><span style='color:blue;'>Возврат в корзину через 5 секунд</span>";
} else {
    $sys_message = "<span style='color:red;'>Error</span>";
}
mysqli_close($link);
?>
<?= $sys_message; ?>