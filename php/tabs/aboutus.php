<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>About Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,">
    <link type="text/css" rel="stylesheet" href="../../css/navbar.css">
    <style type="text/css">
        #about_field {
            font-family: 'Arial';
        }

        ::placeholder {
            font-family: 'Arial';
            font-size: 15px;
            color: black;
        }
    </style>
</head>

<body style="margin:0">
        <div>
        <?php 
            include("../../html/header.html");
        ?>
        </div>
    <div>
    <?php 
        include("../../html/body/aboutus.html");
    ?>
    </div>
</body>

</html>