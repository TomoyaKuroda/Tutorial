<?php 

// $score = 50;
// if($score>40){
//     echo 'high scor!';
// }else{
//     echo 'low score :(';
// }
// echo $score > 40 ? 'high core!' : 'low score :(';

// echo $_SERVER['SERVER_NAME'] . '<br/>';
// echo $_SERVER['REQUEST_METHOD'] . '<br/>';
// echo $_SERVER['SCRIPT_FILENAME'] . '<br/>';
// echo $_SERVER['PHP_SELF'] . '<br/>';
// if(isset($_POST['submit'])){
//     setcookie('gender', $_POST['gender'], time()+86400);
//     session_start();
//     $_SESSION['name'] = $_POST['name'];

//      echo $_SESSION['name'];
    
//     header('Location: index.php');

// }
// $quotes = readfile('README.md');
// echo $quotes;

// $file = 'README.md';
// $handle = fopen($file,'a+');
// // echo fread($handle, filesize($file));
// // echo fread($handle, 1);

// // echo fgets($handle);
// // echo fgetc($handle);
// // fwrite($handle, "\nEverythins popular is wrong");
// fclose($handle);
// // unlink($file);
// if(file_exists($file)){
    // echo readfile($file);
    // copy($file, 'quotes.txt');
    // echo realpath($file) . '<br>';
    // echo filesize($file) . '<br>';
    // rename($file, 'test.txt');
// }else{
//     echo 'file does not exist';
// }

// mkdir('quotes')

class User{
    private $email;
    private $name;

    public function __construct($name, $email)
    {
        // $this->email = 'mario@yahoo.com';
        // $this->name = 'mario';
        $this->email = $email;
        $this->name = $name;
    }

    public function login(){
        // echo 'the user logged in';
        echo $this->name . ' logged in';
    }

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        if(is_string($name) && strlen($name) > 1){
            $this->name=$name;
            return "name has been updated to $name";
        }else{
            return "not a valid name";
        }
    }
}
// $userOne = new User();
// $userOne->login();
// echo $userOne->name;
$userTwo = new User('yoshi', 'yoshi@email.com');
// $userTwo->name = 'mario';
// echo $userTwo->name;
// $userTwo->login();
// echo $userTwo->setName(50);
// echo $userTwo->setName('shaun');

// echo $userTwo->getName();

?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
    <input type="text" name="name">
    <select name="gender" id="">
        <option value="male">male</option>
        <option value="female">female</option>
    </select>
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html> -->