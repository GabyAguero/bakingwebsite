<!DOCTYPE html>
<html lang="en">
    <td head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>Services</title>
    </td head>
    <body class="bg-dark">
        <div class="container">
        <?php
        include("nav.html");
        ?>
   
            <div class="row">
            <h1 class="display-6 text-center" >These are the products that we deal in;</h1>
            <li>Bread(different varieties)</li>
            <li>cakes(both for parties and casual occassions)</li>
            <li>snacks(for example;samosas,doughnuts, cookies,among others.)</li>
            
            <ol>Bread(different varieties)</ol>
            <ol>cakes(both for parties and casual occassions)</ol>
            <ol>snacks(for example;samosas,doughnuts, cookies,among others.)</ol>

            <h1 class="display-6 text-center" >These are some of my latest creations.</h1>
            <div class="col-lg-2">
            <img src="cinn.jpg" alt="GFG" width="800" height="500" class="d-block w-50" alt="...">
            <p>This is a cinnamon nut cake. Although most people say that cinnamon has a very strong flavor,<br/> I found a way to utilise that flavor in the right quantity with the nuts, not too much and not to little.</p>
            </div>

            <div class="col-lg-4">
            <img src="cookies.jpg" alt="GFG" width="700" height="500" class="d-block w-50" alt="...">
            </div>

            <div class="col-lg-4">
            <img src="unicorncake.jpg" alt="GFG" width="600" height="500" class="d-block w-50" alt="...">
            </div>
                      
            <h2 class="display-6 text center" style="background-color: white;">Product</h2> 
            <table>
                                    <td>ID</td>
                                    <td>Productname</td>
                                    <td>Productprice</td>
                                    <td>Manufacturingdate</td>
                                    <td>Productdescription</td>
                                    <td>Action</td>
                        <?php
                        require_once("connect.php");
                        $query= "SELECT* FROM bakery";
                        $result=mysqli_query($con,$query);
                        while ($row = mysqli_fetch_assoc($result));                        
                        {
                        ?>
                <div class="col-md-4 sb-4">
                    
                    <div class="card" style="background-color: aqua;">
                        <table class="table table-border text-center">
                             <tr class="bg-dark text-white">
                        <div class="card-header" style="background-color: pink;">
                            <?php echo $row?>
                        <div class="card-body">
                           <p class="card-text"><?php echo $row["ID"]?>;</p>
                        </div>

                        <div class="card-body">
                           <p class="card-text"><?php echo $row["Productname"]?>;</p>
                        </div>

                        <div class="card-body">
                           <p class="card-text"><?php echo $row["Productprice"]?>;</p>
                        </div>

                        <div class="card-body">
                           <p class="card-text"><?php echo $row["Manufacturingdate"]?>;</p>
                        </div>

                        <div class="card-body">
                           <p class="card-text"><?php echo $row["Productdescription"]?>;</p>
                        </div>
                                   
                                
                               
                                    echo '<a href="updateform.php?id=' . $row['id'] .'"
                                    >Update data</a>';

                                    <td><a href="updateform.php?'<?php $row['ID'];?>'">Update Info</a></td>
                                    
                                
                                <?php
                                    }
                                ?>
            </table>                        
                                 
                        </div>


                    </div>
                </div>
            </div>

    </div>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>


