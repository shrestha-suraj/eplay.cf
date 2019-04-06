<?php
    session_start();
    $login_email=$_POST['login_email'];
    $_SESSION["user_email"]='$login_email';
    $login_password=$_POST['login_password'];
    $db=mysqli_connect("localhost","shresthasuraj62","ilovepubg99$","pubg");
    $query="SELECT * FROM users WHERE email='$login_email' AND passowrd='$login_password'";
    $result=mysqli_query($db,$query);
    if(mysqli_num_rows($result)==0){ 
        header('Location: ../../index.php');
    }
    else{
        header('Location: ../tabs/home.php');
    }

?>