<?php
// Thêm dữ liệu mới vào database
try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $newCode = $_POST['newCode'];
        $newCategory = $_POST['newCategory'];
        if ($newCode <= $id) {
            die("Mã sách mới đã tồn tại");
        } else {
            $connect = new PDO('mysql:dbname=db_library;host=localhost', 'vinhthanhle', 'thanh12345');
            $add = $connect->prepare('INSERT INTO loai_sach (Ma_loai, Ten_loai) values (?,?)');
            $data = array("$newCode", "$newCategory");
            $add->execute($data);
        }
    }
} 
catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
finally{
    header("location: list_categories.php");
}

