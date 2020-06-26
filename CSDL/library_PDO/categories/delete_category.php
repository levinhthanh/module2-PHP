<?php
// vị trí cần xóa:
$id = $_GET['id'];

try {
    $connect = new PDO('mysql:dbname=db_library;host=localhost', 'vinhthanhle', 'thanh12345');
    $delete_pre = $connect->prepare("DELETE FROM sach WHERE loai_sach_Ma_loai = $id ");
    $delete_pre->execute();
    $delete = $connect->prepare("DELETE FROM loai_sach WHERE Ma_loai = $id ");
    $delete->execute();  
} 
catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
finally{
    header("location: list_categories.php");
}
?>
