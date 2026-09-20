<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fullname = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirmpassword'];
    if($password != $confirm ){
        echo "<font color =purple> Incorect confirm password </font>";
    }else{
        echo "Thank ".$fullname."! please confirm registration in <br>"."your email:".$email;

    }
    ?>
</body>
</html>