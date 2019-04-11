<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <link type="text/css" rel="stylesheet" href="../../css/navbar.css">
    <link href="../../css/home.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/home.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body style="margin:0;background-image:url('../../html/bodywall.jpg');">
    <?php 
        include("../../html/header.html");
    ?>
    <?php 
        include("../../html/body/home.html");
    ?>  
</body>

</html>