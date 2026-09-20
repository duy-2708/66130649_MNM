<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checklogin</title>
</head>
<body>
    <?php
    $username = $_POST['user'];
    $password = $_POST['pass'];
    if($username == "addmin" && $password =="12345"){
        echo "<font color = red>Welcome to ".$username."</font>" ;
    }else{
        echo "<font color =red>User hoac password khong chinh xac.Vui long nhap lai </font>";
    }
    ?>
</body>
</html>