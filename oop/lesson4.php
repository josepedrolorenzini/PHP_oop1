<?php

class User{
    
    //properties methods
    public $username;
    private $email;

    public $script ;

    public function __construct($username , $email ){
        $this->username = $username;
        $this->email   = $email ;
        $this->script  = "<script>console.log('mensaje de paz')</script>";
    }

    public function addFriend($newFriend){
        $this->username = $newFriend;
        return "added a new friend name $this->username";
    }

    ///getters
    public function getEmail(){
        return $this->email;
    }
    public function getUsername(){
        return $this->username;
    }
    ///setters

    public function setEmail($email){
        if(strpos($email, '@') > -1){
            $this->email = $email;
        }
       
    }

    public function __toString(){
        return $this->username . " <br>". $this->email;
    }

}


class AdminUser extends User{

}

$userone = new User('user 1' , 'user1@mail.com');
$usertwo = new User('user 2' , 'user2@mail.com');
$adminUser = new AdminUser("admin User" , "admin@usermail.com");
echo "<br>";
echo $adminUser->getEmail();
echo "<br>";
echo $userone->getEmail()  . "<br>";

$userone->setEmail('pepepe@mail.com.au');
echo $userone->getEmail() . "<br>";
echo $userone->username;


echo $usertwo->script;
?>
