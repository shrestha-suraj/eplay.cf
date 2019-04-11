<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <link type="text/css" rel="stylesheet" href="../../css/navbar.css">
    <script type="text/javascript" src="../js/page_handlerer.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="margin:0;background-image:url('../../images/players/winnertakesitall.png')">
    <?php 
        include("../../html/header.html")
    ?>
    <?php 
        include("../../html/body/players.html");
    ?> 
</body>

</html>