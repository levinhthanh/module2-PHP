<?php
// vị trí cần update:
$id = $_GET['id'];

try {
    $connect = new PDO('mysql:dbname=db_library;host=localhost', 'vinhthanhle', 'thanh12345');
    $update = $connect->prepare("SELECT * FROM loai_sach WHERE Ma_loai = $id ");
    $update->execute();
    $row = $update->fetch();
} catch (PDOException $e) {
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
            <a href="categories_list.php">Categories</a>
        </div>
        <div id="form">
            <h1 id="h1-2">Edit category</h1>
            <form action="update_process.php" method="post">
                <input type="hidden" name="id" value="<?= $id ?>">
                <table>
                    <tr>
                        <td id="ma_loai_moi">Category Name:</td>
                        <td id="ten_loai_moi"><input type="text" name="newCategory" value="<?php echo $row['Ten_loai']; ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="ten_loai_moi"><input type="submit" value="Update"></td>
                    </tr>
                </table>
            </form>
            <br><br>
        </div>
        <div id="footer">
            <label>2020 Library Inc</label>
        </div>
    </div>
</body>

</html>