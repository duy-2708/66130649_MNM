<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
    $superheroes = array(
    "spider-man" => array(
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com"
    ),
    "super-man" => array(
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com"
    ),
    "iron-man" => array(
        "name" => "Tony Stark",
        "email" => "tonystark@mail.com"
    )
);
    foreach($superheroes as $hero => $info){
        echo "<strong>".$hero."</strong>";
        echo "<ul>";
        foreach($info as $tt =>$value){
            echo "<li>".$tt.":".$value."</li>" ;
        }
        echo "</ul>";
    }
    ?>
</body>
</html>