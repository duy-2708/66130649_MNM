<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Dang Nhap</title>
</head>
<body>
    <?php
    $dayso = $_POST['number'] ?? '';
    $Tich = '';
    if(trim($dayso) !== ''){
        $mang_so = explode(',',$dayso);
        $Tich = 1;
        foreach($mang_so as $so){
            $Tich*=floatval(trim($so));
        }
    }
    ?>
    <h3>KẾT QUẢ TÍNH TOÁN</h3>
<p>Dãy số đã nhập: <strong><?php echo htmlspecialchars($dayso); ?></strong></p>

<!-- 3. Gọi đúng tên biến chữ thường $tich -->
<label>Tích dãy số:</label>
<input type="text" readonly value="<?php echo htmlspecialchars((string)$Tich); ?>" style="background-color: #eee;">

</body>
</html>