<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Register User</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nhập tên:</td>
                <td><input type="text" name="name"><br><br></td>
            </tr>
            <tr>
                <td>Nhập email:</td>
                <td><input type="text" name="email"><br><br></td>
            </tr>
            <tr>
                <td> Nhập số điện thoại:</td>
                <td><input type="text" name="phone"><br><br></td>
            </tr>
        </table>
        <div id="submit"><input type="submit"></div>
    </form>

    <?php
    $name = NULL;
    $email = NULL;
    $phone = NULL;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $error = false;
    }
    if(empty( $name)){
        $error = true;
        echo '<br> Tên không được để trống ';
    }
    if(empty( $email)){
        $error = true;
        echo '<br> Email không được để trống ';
    }
    if(empty( $phone)){
        $error = true;
        echo '<br> Điện thoại không được để trống ';
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = true;
        echo 'Email sai định dạng xxx@xxx.xxx.xxx <br>';
    }
    if(!$error){
        $result = saveDataJSON('users.json', $name, $email, $phone);
    }
    

    function saveDataJSON($filename, $name, $email, $phone){
        try{
            $jsonData = file_get_contents($filename);
            $arrData = json_decode($jsonData);
            $contact = [$name, $email, $phone ];
            array_push($arrData, $contact);
            $jsonData = json_encode($arrData);
            file_put_contents($filename,$jsonData);
            echo '<br> Lưu dữ liệu vào users.json thành công ';
            return true;
        }
        catch(Exception $e) {
            echo 'Lỗi: ', $e->getMessage(), "\n";
            return false;
        }
    }
    ?>
</body>

</html>