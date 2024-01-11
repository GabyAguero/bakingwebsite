<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    
    <div class="container-fluid">
        <div class="row">

            <?php
            include("nav.html");
            ?>

        <form action="processupdate.php">
            </div>
            <div class="row">
                    <div class="col-lg-6">
                        <h3>Services</h3>
                        <form action="process_product_form.php" method="post" style="text-align:center;">
                            
        
                            <div class="form-group">
                                <label>First name</label><br/>
        
                                <input type="text" name="Firstname" class="form-control" placeholder="First name">
                            </div>
        
                            <div class="form-group">
                                <label>Mobile number</label><br/>
        
                                <input type="text" name="Mobilenumber" class="form-control" placeholder="Mobile number">
                            </div>

                            <div class="form-group">
                                <label></label><br/>
        
                                <input type="date" name="Manufacturingdate" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Product description</label><br/>
        
                                <input type="text" name="Productdescription" class="form-control" placeholder="Product description">
                            </div>
                            <button type="submit" class="btn btn-primary">Add Product</button>

            </div>

            <footer class="bg-dark text-white py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h4>About Us</h4>
                            <p>This is Baking Divas, a rising baking company.</p>
                        </div>
                        <div class="col-md-4">
                            <h4>Contact</h4>
                            <p>Email:bakingdivas.com</p>
                            <p>Phone: +256 758 007353</p>
                        </div>
                        <div class="col-md-4">
                            <h4>Follow Us</h4>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-Tiktok"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bg-dark text-center border-top py-2">
                    <p style="font-size: 14px; margin-bottom: 0;">&copy; 2024 BakingDivas All rights reserved.</p>
                </div>
            </footer>
        </form>

        
        
    </div>
</body>
</html>