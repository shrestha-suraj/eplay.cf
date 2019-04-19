<?php
    $user_name=$_POST['signup_name'];
    $pubg_id=$_POST['signup_id'];
    $signup_email=$_POST['signup_email'];
    $signup_password=$_POST['signup_password'];
    $db=mysqli_connect("localhost","shresthasuraj62","ilovepubg99$","pubg");
    $query1="SELECT * FROM players WHERE email='$signup_email'";
    $result=mysqli_query($db,$query1);
    if(mysqli_num_rows($result)==0){ 
        $query2="INSERT INTO players(name,user_name,email,passowrd) VALUES('$user_name','$pubg_id','$signup_email','$signup_password')";
        $result=mysqli_query($db,$query2);
        header('Location: ../tabs/home.php');
    }
    else{
        header('Location: ../../index.php');
    }
?>