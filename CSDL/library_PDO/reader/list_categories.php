<?php

try {
    $connect = new PDO('mysql:dbname=db_library;host=localhost', 'vinhthanhle', 'thanh12345');
    $result = $connect->prepare('SELECT * from loai_sach');
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $result->execute();

    $id = 0;
    $show = "<tr>";
    while ($row = $result->fetch()) {
        $id = $row['Ma_loai'];
        $show .= "<td>" . $row['Ma_loai'] . "</td><td>" . $row['Ten_loai'] . "</td><td><a href='update_category.php?id=$id'>Update</a><a href='delete_category.php?id=$id'>Delete</a></td></tr>";
    }
} 
catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thư viện</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div id="title">
            <h1>Library Manager</h1>
        </div>
        <div id="tools" style="display: flex;">
            <a href="">Home</a>
            <a href="">Book</a>
            <a href="">Reader</a>
            <a href="">Borrow books</a>
            <a href="">Author</a>
            <a href="list_categories.php">Categories</a>
        </div>
        <div id="form">
            <h1 id="h1-2">Categories List</h1>
            <table>
                <tr>
                    <th id="ma_loai">Code</th>
                    <th id="ten_loai">Categories Name</th>
                    <th id="them_xoa_loai"></th>
                </tr>
                <?php
                echo $show;
                ?>

            </table>
            <br>
            <a href="add_category.php?id=<?= $id ?>">Add new categories</a>
            <br><br>
        </div>
        <div id="footer">
            <label>2020 Library Inc</label>
        </div>
    </div>
</body>

</html>