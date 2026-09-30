<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dieu tra</title>
</head>
<body>
    <?php
    $fullname = $_POST['user'];
    $sex = $_POST['gender'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    
    echo "<strong>Thong Tin Ca Nhan</strong>"."<br>";
    echo "Ho Ten:".$fullname."<br>";
    echo "Email:".$email."<br>";
    echo "Gioi Tinh:".$sex."<br>";
    echo "Do Tuoi:".$age."<br>";
    if(!empty($_POST['like'])){
        $sothich = $_POST['like'];
        echo "So thich: ".implode(", ",$sothich);
    }else{
        echo "Ban khong co so thich nao" ;
    }
    ?>
</body>
</html>