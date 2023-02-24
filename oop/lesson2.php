<?php

class user2{
    
    //properties methods
    public $user2name = 'Ryu';
    public $email = "jose@marbleceramiccorp.com.au";

    public function addFriend($newFriend){
        $this->user2name = $newFriend;
        return "added a new friend name $this->user2name";
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

    $user2one = new user2();
    $user2two = new user2();

    //method to know the name of the class
    // echo "this class is " . get_class($user2one);
    echo "<br>";
    echo $user2one->user2name;
    echo "<br>";
    echo $user2one->addFriend("user2one");
    echo "<br>";
    echo $user2one->user2name;
    $user2one->email = "pepe@mail.com";
    echo "<br>";
    echo  $user2one->email  ."<br>";
    echo $user2one->user2name = "net ninja";
    echo "<br>";
    echo $user2two->user2name;
    echo "<br>";
    echo $user2two->addFriend("user2two");
    echo "<br>";
    echo $user2two->user2name;
    //return all the propierties from the class
//    print_r(get_class_vars('user2'))  ;
//    echo "<br>";
//    print_r(get_class_methods('user2'));
    ?>
</body>
</html>