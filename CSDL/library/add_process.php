<?php
// Thêm dữ liệu mới vào database
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $newCode = $_POST['newCode'];
    $newCategory = $_POST['newCategory'];
    if ($newCode <= $id) {
        die("Mã sách mới đã tồn tại");
    } else {
        $connect = mysqli_connect("localhost", "vinhthanhle", "thanh12345", "db_library");
        if ($connect) {
            mysqli_query($connect, "SET NAMES 'utf8'");
            $sql = "INSERT INTO loai_sach(Ma_loai, Ten_loai) VALUE (' $newCode','$newCategory')";
            $result = mysqli_query($connect, $sql);
            if (!$result) {
                die('Lỗi: ' . mysqli_error($connect));
            }
        } else {
            echo "Kết nối thất bại!" . mysqli_connect_error();
        }
    }
}
if ($result) {
    header("location: categories_list.php");
}
