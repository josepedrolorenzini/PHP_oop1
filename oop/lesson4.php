<?php
//https://www.phptutorial.net/php-oop/php-override-method/
///in lesson 9
class User{
    
    //properties methods
    public $username;
    protected $email;
    public $role = "member";

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

    public function message(){
        return "$this->email sent a new message";
    }

    public function __toString(){
        return $this->username . " ". $this->email . " " . $this->role . " <br>";
    }

}

///child class AdminUser
class AdminUser extends User{

    public $level;
    public $role = "admin";
    public function __construct($username,$email,$level){
        
        $this->level = $level;
        parent::__construct($username,$email);
    }
    
    public function __toString(){
        // return $this->username . " <br>". $this->email . " " . $this->level;
        return parent::__toString() . " " . $this->level . " " ;
    }

    public function message(){
        return "$this->email ,  an admin sent a new message";
    }


}

$userone = new User('user 1' , 'user1@mail.com');
$usertwo = new User('user 2' , 'user2@mail.com');
$adminUser = new AdminUser("admin User" , "admin@usermail.com", 1981);
echo $adminUser;
echo "<br>";
echo $adminUser->getEmail();
echo "<br>";
echo $usertwo;
echo "<br>";
echo $userone->getEmail()  . "<br>";
echo "<br>";
echo $userone->message()  . "<br>";
echo "<br>";
echo $adminUser->message()  . "<br>";
echo "<br>";
$userone->setEmail('pepepe@mail.com.au');
echo $userone->getEmail() . "<br>";
echo $userone->username;


echo $usertwo->script;
?>
