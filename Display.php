
<?php
require_once("connect.php");
$query="SELECT FROM products";
$result=mysqli_query($con,$query);

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

                    <div class="card-body">
                        <table class="table table-border text-center">
                            <tr class="bg-dark text-white">
                                <td>ID</td>
                                <td>Productname</td>
                                <td>Productprice</td>
                                <td>Manufacturingdate</td>
                                <td>Productdescription</td>
                                <td>Action</td>
                            </tr>
                            <tr>
                                <?php
                                
                                while($row=mysqli_fetch_assoc ($result));
                                {
                                ?>
                                <td><?php echo $row["ID"];?></td>
                                <td><?php echo $row["Productname"];?></td>
                                <td><?php echo $row["Productprice"];?></td>
                                <td><?php echo $row["Manufacturingdate"];?></td>
                                <td><?php echo $row["Productdescription"];?></td>
                                <td><?php echo $row["Action"];?></td>
                                
                                echo '<a href="update.php?id=' . $row['id'] .'"
                                >Update data</a>';

                                <td><a href="updateform.php?'<?php $row['ID'];?>'">Update Info</a></td>
                                
                            </tr>
                            <?php
                                }
                            ?>
                            </table>

                    </div>


                </div>
            </div>
        </div>

    </div>

    <a href="services.php">Services</a>
    </body>
</html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Display page</title>

</head>

<body>
    <div class="container">
        <div class="row">

            <?php
            include("nav.html");
            ?>

        </div>

        <div class="row">
            <h1>These are some of my latest creations.</h1>
            <div class="col-lg-2">
            <img src="cinn.jpg" alt="GFG" width="600" height="500" class="d-block w-50" alt="...">
            </div>

            <div class="col-lg-4">
            <img src="cookies.jpg" alt="GFG" width="600" height="500" class="d-block w-50" alt="...">
            </div>

            <div class="col-lg-4">
            <img src="unicorncake.jpg" alt="GFG" width="600" height="500" class="d-block w-50" alt="...">
            </div>

        </div>

</body>

</html>

</body>

</html>