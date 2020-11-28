<!-- <meta http-equiv="refresh" content="3; url=/catalog.php"> -->
<?php
require_once '../php/connection.php';
if (isset($_POST['id'])) {
    $link = mysqli_connect($host, $user, $password, $database) or die("Error" . mysqli_error($link));
    $code = $_POST['id'];
    $name = $_POST['name-item'];
    $price = $_POST['price'];
    $path = $_POST['path'];
    $query = "INSERT INTO `temp_cart_for_user`(`code`, `name`, `price`, `logo`) VALUES ('$code','$name','$price','$path')";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

    if ($result) {
        echo 'Item Add successful<br>';
        echo "Возврат в каталог через 2 секунды";
    } else {
        echo 'Error!';
    }
    mysqli_close($link);
    echo "<meta http-equiv=\"refresh\" content=\"2;URL=../catalog.php\">";
}