<?php

session_start();

require 'database.php';

$message = '';

if (isset($_SESSION['user_id'])){
    header('Location : /time-entry.php');
}

if (isset($_POST['email']) && isset($_POST['pwd'])){
    $records = $conn->prepare('SELECT id,email,password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetchAll(PDO::FETCH_ASSOC); 
    
    if (count($results) > 0){
        print_r($results[0]);
            if (password_verify($_POST['pwd'],$results[0]['password'])){
                $_SESSION['user_id'] = $results[0]['id'];
                $_SESSION['email'] = $_POST['email'];
                echo $_SESSION['user_id'];
                header("Location: /time-entry.php");
        }
    }
    else{
        $message='Credentials do not match';
    }
}


?>

<html>
    <h1> Login User!</h1>
    <body>
        <form action="" method="POST">
            Username : <input type="text" name="email" placeholder="Type your email" value=<?= $_POST['email'] ;?>><br>
            Password: <input type = "text" name="pwd" value=<?= $_POST['pwd'] ;?>><br>
            <input type="submit" name="Login">
        </form>
        <?php if ($message == 'Credentials do not match') { ?>
        <p> <?= $message; ?>Please try again</a>
    <?php } ?>
    </body>
</html>