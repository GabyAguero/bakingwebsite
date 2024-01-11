<?php
        $mysql_host="localhost";
        $mysql_user="root";
        $mysql_password="SergioKunAguero@143";
        $database="baking";

$con= mysqli_connect($mysql_host,$mysql_user,$mysql_password,$database);

        if($con){
                echo"connected successfully";
        }
?>