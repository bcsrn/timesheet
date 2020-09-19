<?php

require 'database.php';

$message = '';

if (isset($_POST['email'])){
    $check_user = $conn->prepare('SELECT * FROM users WHERE email = :email');
    $check_user->bindParam(':email',$_POST['email']);
    $check_user->execute();
    $user_results = $check_user->fetchAll(PDO::FETCH_ASSOC);
    
    if (count($user_results) == 0){
        $records = $conn->prepare('INSERT INTO users (email, password) VALUES (:email, :password)');
        $records->bindParam(':email',$_POST['email']);
        $records->bindParam(':password',password_hash($_POST['pwd'], PASSWORD_BCRYPT));
        
        if ($records->execute()){
            $message = 'Successfully registered user';
        }
        else {
            $message = 'Oops, something went wrong. Try again';
        }
    }
    else{
        $message = 'User exists. Please login';
    }
}


?>

<html>
    <h1>Register yourself</h1>
    <form action="" method="post">
        Username : <input type="text" name="email" placeholder="Type your email" value=<?php echo $_POST['email']; ?>><br>
        Password: <input type = "text" name="pwd" value=<?= $_POST['pwd']; ?>><br>
        <input type="submit" name="Register">
    </form>
    <?php if ($message != '') { ?>
        <p><?= $message; ?></p>
        <a href = "login.php"> Go to Login</a>
    <?php } ?>
</html>