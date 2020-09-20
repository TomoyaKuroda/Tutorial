<?php 
    require('user_validator.php');
    if(isset($_POST['submit'])){
        // echo "form submitted";
        $validation = new UserValidator($_POST);
        $erros = $validation->validateForm();
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="new-user">
        <h2>Create new user</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <label for="">Username:</label>
            <input type="text" name="username" value="<?php echo htmlspecialchars($_POST['username']) ?? ''?>">
            <div class="error">
                <?php echo $erros['username'] ?? '' ?>
            </div>
            <label for="">Email:</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($_POST['email']) ?? ''?>">
            <div class="error">
                <?php echo $erros['email'] ?? '' ?>
            </div>
            <input type="submit" value="submit" name="submit">
        </form>
    </div>
</body>
</html>