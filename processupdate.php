<?php
require_once("connect.php");

$pname=$_POST['Productname'];
$pprice=$_POST['Productprice'];
$mdate=$_POST['Manufacturingdate'];
$pdescription=$_POST['Productdescription'];

$query ="UPDATE bakery(Productname,Productprice,Manufacturingdate,Productdescription) VALUES(?,?,?,?)";

$statement=mysqli_prepare($con ,$query);

mysqli_stmt_bind_param($statement,"ssss",$pname,$pprice,$mdate,$pdescription);

mysqli_stmt_execute($statement);
    header("Location: service.php");

echo"data submitted successfully";
?>
<?php
     require_once("connect.php");
            $limit=4;
            $query="SELECT FROM products";
           
               
        ?>




<!DOCTYPE html>
<html lang="en">
    <td head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>Services</title>
    </td head>
    <body class="bg-dark">
        <?php
        include("nav.html");
        ?>
    <div class="container">
        <div class="row st-5">
            <div class="col">
                <div class="card st-5">
                    <div class="card-header">
                        <h2 class="display-6 text center">Product</h2>
                    </div>

                   


                </div>
            </div>
        </div>

    </div>
    </body>
</html>