<?php
require_once '../../php/connection.php';
?>
<html>

<head>
    <link type="text/css" rel="stylesheet" href="../../css/style.css" />
    <title>Add</title>
</head>

<body>
    <div class="admin_menu">
        <a class="adminform_a" href="../main.php">
            <h1>Admin Panel</h1>
        </a>
        <h3>Add Mode</h3>
        <form method="POST" id="updateForm">
            <div class="container_input">
                <label>
                    <p>Название</p>
                    <input type="text" name="title" value="<?= $title ?>" form="updateForm" pattern="^[a-zA-Z-А-Яа-яЁё\s]+$" />
                </label>
                <label>
                    <p>Категория</p>
                    <input type="text" name="category" value="<?= $Category ?>" form="updateForm" size="5" />
                </label>
                <label>
                    <p>Цена</p>
                    <input type="text" name="price" value="<?= $Price ?>" form="updateForm" />
                </label>
                <label>
                    <p>Описание</p>
                    <textarea name="description" form="updateForm"><?= $Description ?></textarea>
                </label>
                <label>
                    <p>Производитель</p>
                    <input type="text" name="manufacturer" value="<?= $Manufacturer ?>" form="updateForm" size="5" />
                </label>
                <label>
                    <p>Фото</p>
                    <input type="text" name="image" value="<?= $Image ?>" form="updateForm" pattern="^[a-zA-z\.]+$" />
                </label>
                <label>
                    <p>Meta-tag</p>
                    <input type="text" name="metatag" value="<?= $Meta_tag ?>" form="updateForm" pattern="^[A-Za-z]+$" />
                </label>
            </div>
        </form>
        <div class="container_input">
            <label>
                <button name="save-btn" form="updateForm">Save</button>
                <?php
                if (isset($_POST['save-btn'])) {
                    $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
                    if (isset($_POST['title'])) {
                        $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
                        $title_chng = htmlentities(mysqli_real_escape_string($link, trim($_POST['title'])));
                        $Category_chng = htmlentities(mysqli_real_escape_string($link, trim($_POST['category'])));
                        $Price_chng = htmlentities(mysqli_real_escape_string($link, trim($_POST['price'])));
                        $Description_chng = htmlentities(mysqli_real_escape_string($link, trim($_POST['description'])));
                        $Manufacturer_chng = htmlentities(mysqli_real_escape_string($link, trim($_POST['manufacturer'])));
                        $Image_chng = htmlentities(mysqli_real_escape_string($link, trim($_POST['image'])));
                        $Meta_tag_chng = htmlentities(mysqli_real_escape_string($link, trim($_POST['metatag'])));
                        $query = "INSERT INTO `catalog` (`ID`, `Title`, `Category`, `Price`, `Description`, `Manufacturer`, `Image`, `Meta-tag`) VALUES (NULL, '$title_chng', '$Category_chng', '$Price_chng', '$Description_chng', '$Manufacturer_chng', '$Image_chng', '$Meta_tag_chng') ";
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
            </label>
            <label>
                <form action="../catalog.php" id="CancelForm">
                    <button form="CancelForm">Cancel</button>
                </form>
            </label>
        </div>
    </div>

</body>

</html>