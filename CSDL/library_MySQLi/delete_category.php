<?php
// vị trí cần update:
$id = $_GET['id'];

// Kết nối để lấy dữ liệu từ database
$connect = mysqli_connect("localhost", "vinhthanhle", "thanh12345", "db_library");
if ($connect) {
    mysqli_query($connect, "SET NAMES 'utf8'");
    $sql_pre = "DELETE FROM sach WHERE loai_sach_Ma_loai = $id ";
    $result = mysqli_query($connect, $sql_pre);
    $sql = "DELETE FROM loai_sach WHERE Ma_loai = $id ";
    $result = mysqli_query($connect, $sql);
    if (!$result) {
        die('Lỗi: ' . mysqli_error($connect));
    }
    else{
        header("location: categories_list.php");
    }
} else {
    echo "Kết nối thất bại!" . mysqli_connect_error();
}
?>
