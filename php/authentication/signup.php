<?php
    $user_name=$_POST['signup_name'];
    $pubg_id=$_POST['signup_id'];
    $signup_email=$_POST['signup_email'];
    $signup_password=$_POST['signup_password'];
    $country_name=$_POST['signup_country'];
    $db=mysqli_connect("localhost","shresthasuraj62","ilovepubg99$","pubg");
    $query1="SELECT * FROM players WHERE Email='$signup_email' OR Pubg_Name='$pubg_id'";
    $result=mysqli_query($db,$query1);
    if(mysqli_num_rows($result)==0){ 
        $query2="INSERT INTO players(Pubg_Name,Name,Email,Password,Country) VALUES('$pubg_id','$user_name','$signup_email','$signup_password','$country_name')";
        $result=mysqli_query($db,$query2);
        header('Location: ../tabs/home.php');
    }
    else{
        header('Location: ../../index.php?accessErr=1');
    }
?>