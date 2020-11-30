<?php
require_once '../../php/connection.php';
if (isset($_POST['edit-btn'])) {
    $link = mysqli_connect($host, $user, $password, $database) or die("Error" . mysqli_error($link));
    $code = $_POST['edit-btn'];
    $query = "SELECT * FROM catalog WHERE ID=$code";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if ($result) {
        $row = mysqli_fetch_row($result);
        $title = $row[1];
        $Category = $row[2];
        $Price = $row[3];
        $Description = $row[4];
        $Manufacturer = $row[5];
        $Image = $row[6];
        $Meta_tag = $row[7];
    }
    mysqli_close($link);
}
?>
<html>

<head>
    <link type="text/css" rel="stylesheet" href="../../css/style.css" />
    <title>Edit</title>
</head>

<body>
    <div class="admin_menu">
        <a class="adminform_a" href="../main.php">
            <h1>Admin Panel</h1>
        </a>
        <h3>Edit Mode</h3>
        <form method="POST" id="updateForm">
            <table class="Table_orders_items">
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Категория</th>
                    <th>Цена</th>
                    <th>Описание</th>
                    <th>Производитель</th>
                    <th>Фото</th>
                    <th>Meta-tag</th>
                </tr>
                <tr>
                    <td><input type="text" name="ID" value="<?= $code ?>" form="updateForm" size="5" readonly /></td>
                    <td><input type="text" name="title" value="<?= $title ?>" form="updateForm" /></td>
                    <td><input type="text" name="category" value="<?= $Category ?>" form="updateForm" size="5" /></td>
                    <td><input type="text" name="price" value="<?= $Price ?>" form="updateForm" /></td>
                    <td><textarea name="description" form="updateForm"><?= $Description ?></textarea></td>
                    <td><input type="text" name="manufacturer" value="<?= $Manufacturer ?>" form="updateForm" size="5" /></td>
                    <td><input type="text" name="image" value="<?= $Image ?>" form="updateForm" /></td>
                    <td><input type="text" name="metatag" value="<?= $Meta_tag ?>" form="updateForm" /></td>
                    <td>
                        <button name="save-btn" form="updateForm">Save</button>
                        <?php
                        if (isset($_POST['save-btn'])) {
                            $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
                            if (isset($_POST['title'])) {
                                $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
                                $ID = htmlentities(mysqli_real_escape_string($link, trim($_POST['ID'])));
                                $title_chng = htmlentities(mysqli_real_escape_string($link, trim($_POST['title'])));
                                $Category_chng = htmlentities(mysqli_real_escape_string($link, trim($_POST['category'])));
                                $Price_chng = htmlentities(mysqli_real_escape_string($link, trim($_POST['price'])));
                                $Description_chng = htmlentities(mysqli_real_escape_string($link, trim($_POST['description'])));
                                $Manufacturer_chng = htmlentities(mysqli_real_escape_string($link, trim($_POST['manufacturer'])));
                                $Image_chng = htmlentities(mysqli_real_escape_string($link, trim($_POST['image'])));
                                $Meta_tag_chng = htmlentities(mysqli_real_escape_string($link, trim($_POST['metatag'])));
                                $query = "UPDATE `catalog` SET `Title`='$title_chng',`Category`=$Category_chng,`Price`=$Price_chng,`Description`='$Description_chng',`Manufacturer`=$Manufacturer_chng,`Image`='$Image_chng',`Meta-tag`='$Meta_tag_chng' WHERE ID=$ID";
                                $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                                if ($result) {
                                    $sys_message = "<span style='color:blue;'>Successful</span>";
                                    mysqli_close($link);
                                    echo "<meta http-equiv=\"refresh\" content=\"0;URL=../catalog.php\">";
                                } else {
                                    $sys_message = "<span style='color:red;'>Error</span>";
                                    mysqli_close($link);
                                }
                            }
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </form>
        <form action="../catalog.php" id="CancelForm">
            <button form="CancelForm">Cancel</button>
        </form>
    </div>
</body>

</html>