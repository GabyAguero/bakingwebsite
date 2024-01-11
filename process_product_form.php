<?php
require_once("connect.php");

$pname=$_POST['Productname'];
$pprice=$_POST['Productprice'];
$mdate=$_POST['Manufacturingdate'];
$pdescription=$_POST['Productdescription'];

$query ="INSERT INTO bakery(Productname,Productprice,Manufacturingdate,Productdescription) VALUES(?,?,?,?)";

$statement=mysqli_prepare($con ,$query);

mysqli_stmt_bind_param($statement,"ssss",$pname,$pprice,$mdate,$pdescription);

mysqli_stmt_execute($statement);
    header("Location: service.php");

echo"data submitted successfully";
?>