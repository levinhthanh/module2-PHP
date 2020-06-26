<?php
// Cập nhập dữ liệu mới vào database
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
        $id = $_POST['id'];
        $newCategory = $_POST['newCategory'];

        $connect = mysqli_connect("localhost", "vinhthanhle", "thanh12345", "db_library");
        if ($connect) {
            mysqli_query($connect, "SET NAMES 'utf8'");
            $sql = "UPDATE loai_sach SET Ten_loai = '$newCategory' WHERE Ma_loai = '$id'";
            $result = mysqli_query($connect, $sql);
            if (!$result) {
                die('Lỗi: ' . mysqli_error($connect));
            }
        } else {
            echo "Kết nối thất bại!" . mysqli_connect_error();
        } 
}
if($result){
    header("location: categories_list.php");
}
