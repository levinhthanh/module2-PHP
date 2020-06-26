<?php
// Xuất dữ liệu từ database
$connect = mysqli_connect("localhost", "vinhthanhle", "thanh12345", "db_library");
if ($connect) {
    mysqli_query($connect, "SET NAMES 'utf8'");
    $sql = "SELECT * FROM loai_sach";
    $result = mysqli_query($connect, $sql);
    if (!$result) {
        die('Lỗi: ' . mysqli_error($connect));
    } else {
        $id = 0;
        $show = "<tr>";
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['Ma_loai'];
                $show .= "<td>" . $row['Ma_loai'] . "</td><td>" . $row['Ten_loai'] . "</td><td><a href='update_category.php?id=$id'>Update</a><a href='delete_category.php?id=$id'>Delete</a></td></tr>";
            }
        }
    }
} else {
    echo "Kết nối thất bại!" . mysqli_connect_error();
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
            <a href="categories_list.php">Categories</a>
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