<?php

class User{

public $username;
protected $email;
public $role = "member";

public function __construct($username, $email)
{
    $this->username=$username;
    $this->email=$email;
}

public function __destruct()
{
    echo "the user $this->username was removed <br>";
}

public function __clone()
{
    $this->username = $this->username . '(cloned)<br>';
}

public function addFriend(){
    return " $this->username added a new friend";
}

public function message()
{
    return "$this->email sent a new message";
}

public function getEmail(){
    return $this->email;
}
public function setEmail($email){
    if(strpos($email,"@")>-1){
        $this->email = $email;
    }
}

}

class AdminUser extends User{
    public $level;
    public $role = "admin";
    public function __construct($username, $email, $level)
    {
        $this->level = $level;
        parent::__construct($username,$email);
    }

    public function message()
{
    return "$this->email, an admin,  sent a new message";
}
}

// $userOne = new User("mario","mario@mario.com");
// $userTwo = new User('yoshi', 'yoshi@yoshi@ken.com');
// $userThree = new AdminUser("yoshi","yosho@a.a", 5);
// $userFour = clone $userOne;
// echo $userFour->username;

// unset($userOne);

// echo $userOne->role .'<br>';
// echo $userThree->role .'<br>';
// echo $userOne->message() .'<br>';
// echo $userThree->message() .'<br>';

// echo $userThree->username . '<br>';
// echo $userThree->getEmail() . '<br>';
// echo $userThree->level . '<br>';

// echo $userOne->username . '<br>';
// echo $userOne->email . '<br>';
// $userOne->setEmail("yoshi@re.com");
// echo $userOne->getEmail() . '<br>';
// echo $userTwo->getEmail() . '<br>';
// print_r(get_class_vars('User'));
// print_r(get_class_methods('User'));
// $userTwo->username='Yoshi';
// $userTwo->email = 'yohi@test.com';
// echo $userTwo->username . '<br>';
// echo $userTwo->email . '<br>';
// echo $userTwo->addFriend() . '<br>';
// echo 'the class is ' . get_class($userOne);

class Weather{
    public static $tempConditions = ['cold','mild','warm'];

    public static function celsiusToFarenheit($c)
    {
        # code...
        return $c *9/5+32;
    }
    
    public static function determineTempCondition($f)
    {
        # code...
        if($f<40){
            return self::$tempConditions[0];
        }else if($f<70){
            return self::$tempConditions[1];
        }else{
            return self::$tempConditions[2];
        }
    }
}
// print_r(Weather::$tempConditions);
// echo Weather::celsiusToFarenheit(20);
echo Weather::determineTempCondition(20);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>