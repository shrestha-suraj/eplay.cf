<?php
    if(isset($_GET["accessErr"])){
        echo "Log";
        if ($_GET["accessErr"]==0){
            echo "Log";
            include("html/body/index.html");
            echo "<script>
                    document.getElementById('warning').innerHTML='Incorrect Email or Password Try Again.';
            </script>";
        }
        else if ($_GET["accessErr"]==1){
            include("html/body/index.html");
            echo "<script>
                    alert('Warning! There already exists an account with this Email or Pubg_Name. Use different credentials.');
            </script>";
        }
    }
    else{
        include("html/body/index.html");
    }
?>