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
</head>

<body style="margin:0;">
    <div>
    <?php 
        include("../../html/header.html");
    ?>
    </div>
    <hr style="color:gold;width:100%;size:10px;margin:0" />
    <div>
    <?php 
        include("../../html/body/home.html");
    ?>  
    </div>
</body>

</html>