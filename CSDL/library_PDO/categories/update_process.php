<?php
// Cập nhập dữ liệu mới vào database
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'];
    $newCategory = $_POST['newCategory'];

    try {
        $connect = new PDO('mysql:dbname=db_library;host=localhost', 'vinhthanhle', 'thanh12345');
        $update = $connect->prepare("UPDATE loai_sach SET Ten_loai = '$newCategory' WHERE Ma_loai = '$id'");
        $update->execute();
    } 
    catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    } 
    finally {
        header("location: list_categories.php");
    }
}
