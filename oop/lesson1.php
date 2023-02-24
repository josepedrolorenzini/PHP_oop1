<?php


class lesson1{
public $username;
public $email;
public function __construct(){
    echo "hello world" . "<br>";
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ola = new lesson1();
    var_dump($ola);
    echo "<br>";
    echo "this class is " . get_class($ola);  

    ?>
</body>
</html>