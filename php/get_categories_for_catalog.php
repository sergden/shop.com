<?php

//////////////////////////////NEW/////////////////////////////////////

require_once 'connection.php';
$link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));
$query = "SELECT * FROM categories";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if ($result) {
    $rows = mysqli_num_rows($result); // количество полученных строк                    
    for ($i = 0; $i < $rows; ++$i) {
        $row = mysqli_fetch_row($result);
        echo "<div class=\"views-row\"><a href=\"$row[3].php\">"; //ref
        echo "<img src=\"img/categories/$row[2]\" />"; //image
        echo "<h3>$row[1]</h3></a></div>"; //Title
    }
    mysqli_free_result($result); // очистка результата
}
mysqli_close($link); //закрвает соединение



//////////////////////////////OLD/////////////////////////////////////


// require_once 'connection.php';
// $link = mysqli_connect($host, $user, $password, $database)
//     or die("Ошибка " . mysqli_error($link));
// $query = "SELECT * FROM catalogimg";
// $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
// if ($result) {
//     $rows = mysqli_num_rows($result); // количество полученных строк                    
//     for ($i = 0; $i < $rows; ++$i) {
//         $row = mysqli_fetch_row($result);
//         echo "<div class=\"views-row\"><a href=\"$row[1].php\">"; //ref
//         echo "<img src=\"img/categories/$row[1]$row[2]\" />"; //image
//         echo "<h3>$row[3]</h3></a></div>"; //name
//     }
//     mysqli_free_result($result); // очистка результата
// }
// mysqli_close($link); //закрвает соединение