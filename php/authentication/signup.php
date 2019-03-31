<?php
    session_start();
    $user_name=$_POST['signup_name'];
    $pubg_id=$_POST['signup_id'];
    $signup_email=$_POST['signup_email'];
    $_SESSION["user_email"]='$signup_email';
    $signup_password=$_POST['signup_password'];
    $db=mysqli_connect("localhost","shresthasuraj62","ilovepubg99$","pubg");
    $query1="SELECT * FROM users WHERE email='$signup_email'";
    $result=mysqli_query($db,$query1);
    if(mysqli_num_rows($result)==0){ 
        $query2="INSERT INTO users(name,user_name,email,passowrd) VALUES('$user_name','$pubg_id','$signup_email','$signup_password')";
        $result=mysqli_query($db,$query2);
        header('Location: ../../html/home.html');
    }
    else{
        echo "Sorry, this email has already been used.";
    }
?>