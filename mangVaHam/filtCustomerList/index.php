<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer List Filter</title>
    <style>
        form {
            border: solid 1px black;
            height: 50px;
            width: 900px;
            padding: 20px;
        }

        input {
            height: 40px;
            width: 250px;
            border: 2px solid darkgrey;
            border-radius: 5px;
            margin-right: 10px;
            padding: 5px;
            font-weight: bold;
        }

        #submit {
            width: 250px;
            height: 40px;
            color: black;
            border: solid 2px darkgrey;
            border-radius: 0px;
        }

        #stt {
            width: 50px;        
            text-align: center;
        }

        #name {
            width: 300px;         
            text-align: center;
        }

        #birthday {
            width: 200px;     
            text-align: center;
        }

        #address {
            width: 200px;        
            text-align: center;
        }

        #image {
            width: 200px;        
            text-align: center;
        }
    </style>
    <?php
    $customer_list = array(
        "0" => array("name" => "Mai Văn Hoàn", "day_of_birth" => "1983/08/20", "address" => "Hà Nội", "image" => "images/img1.jpg"),
        "1" => array("name" => "Nguyễn Văn Nam", "day_of_birth" => "1983/08/21", "address" => "Bắc Giang", "image" => "images/img2.jpg"),
        "2" => array("name" => "Nguyễn Thái Hòa", "day_of_birth" => "1983/08/22", "address" => "Nam Định", "image" => "images/img3.jpg"),
        "3" => array("name" => "Trần Đăng Khoa", "day_of_birth" => "1983/08/17", "address" => "Hà Tây", "image" => "images/img4.jpg"),
        "4" => array("name" => "Nguyễn Đình Thi", "day_of_birth" => "1983/08/19", "address" => "Hà Nội", "image" => "images/img5.jpg")
    );
    ?>
</head>

<body>


    <table border="0">
        <caption>
            <h2>Danh sách khách hàng</h2>
        </caption>
        <tr>
            <th id='stt'>STT</th>
            <th id='name'>Tên</th>
            <th id='birthday'>Ngày sinh</th>
            <th id='address'>Địa chỉ</th>
            <th id='image'>Ảnh</th>
        </tr>
        <?php
        foreach ($customer_list as $key => $values) {
            echo "<tr>";
            echo "<td id='stt'>" . $key . "</td>";
            echo "<td id='name'>" . $values['name'] . "</td>";
            echo "<td id='birthday'>" . $values['day_of_birth'] . "</td>";
            echo "<td id='address'>" . $values['address'] . "</td>";
            echo "<td id='image'><image src ='" . $values['image'] . "' width = '20px' height ='20px'/></td>";
            echo "</tr>";
        }
        ?>

    </table>
    <form method="post">
        Từ: <input id="from" type="text" name="from" placeholder="yyyyy/mm/dd" />
        Đến: <input id="to" type="text" name="to" placeholder="yyyy/mm/dd" />
        <input type="submit" id="submit" value="Lọc" />
    </form>
    <?php
    function searchByDate($customers, $from_date, $to_date)
    {
        if (empty($from_date) && empty($to_date)) {
            return $customers;
        }
        $filtered_customers = [];
        foreach ($customers as $customer) {
            if (!empty($from_date) && (strtotime($customer['day_of_birth']) < strtotime($from_date)))
                continue;
            if (!empty($to_date) && (strtotime($customer['day_of_birth']) > strtotime($to_date)))
                continue;
            $filtered_customers[] = $customer;
        }
        return $filtered_customers;
    }


    $from_date = NULL;
    $to_date = NULL;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $from_date = $_POST["from"];
        $to_date = $_POST["to"];
    }
    $filtered_customers =
        searchByDate($customer_list, $from_date, $to_date);
    ?>


    <table border="0">
        <caption>
            <h2>Danh sách khách hàng lọc được:</h2>
        </caption>
        <tr>
            <th id='stt'>STT</th>
            <th id='name'>Tên</th>
            <th id='birthday'>Ngày sinh</th>
            <th id='address'>Địa chỉ</th>
            <th id='image'>Ảnh</th>
        </tr>
        <?php if (count($filtered_customers) === 0) : ?>
            <tr>
                <td colspan="5" class="message">Không tìm thấy khách hàng nào</td>
            </tr>
        <?php endif; ?>

        <?php foreach ($filtered_customers as $index => $customer) : ?>
            <tr>
                <td id='stt'><?php echo $index + 1; ?></td>
                <td id='name'><?php echo $customer['name']; ?></td>
                <td id='birthday'><?php echo $customer['day_of_birth']; ?></td>
                <td id='address'><?php echo $customer['address']; ?></td>
                <td id='image'>
                    <div class="profile"><img src="<?php echo $customer['profile']; ?>" /></div>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>