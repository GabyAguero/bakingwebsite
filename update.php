<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Index Page</title>
        <!-- <link rel="stylesheet" href="css/main.css"> -->
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Link the jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <script src="js/bootstrap.min.js"></script>

        <style>
              .custom-jumbotron {
                    background-color: #007bff; /* Change to the desired background color */
                    color: #fff; /* Change to the desired text color */
                    padding: 30px; /* Adjust padding as needed */
                }

                .custom-jumbotron h2 {
                    font-size: 36px; /* Change to the desired font size for the heading */
                }

                .custom-jumbotron p {
                    font-size: 18px; /* Change to the desired font size for the paragraphs */
                }
            /* Ensure all carousel images have equal width and height */
            .carousel-item img {
                width: 100%;
                height: 100%;
                object-fit: cover; /* This ensures the image fills the container while maintaining aspect ratio */
            }

            /* Overlay styles */
            .carousel-item .overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5); /* Change the alpha value to adjust the overlay opacity */
            }

            /* Content styles */
            .carousel-content {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                color: #fff; /* Set the color of the content */
            }
        </style>
    </head>
    <body style="background-color:black; color:white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-lg-2 mt-2" style="border-left:2px solid white;">
                    <?php
                        include 'includes/partials/nav.php';
                    ?>
                </div>
                <div class="col-lg-8 col-md-6 mt-5">
                <div class="container">
                    <?php
                        // Check if the ID parameter is provided in the URL
                        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                            $id = $_GET['id'];
                                // Make sure you have included the database connection code
                                require_once "includes/dbconnect.php";

                                // Fetch data from the database table 'registration' for the provided ID
                                $query = "SELECT * FROM registration WHERE id = ?";
                                $stmt = mysqli_prepare($connect, $query);
                                mysqli_stmt_bind_param($stmt, "i", $id);
                                mysqli_stmt_execute($stmt);
                                $result = mysqli_stmt_get_result($stmt);
                                $data = mysqli_fetch_assoc($result);

                                // Check if the data exists for the provided ID
                                if ($data) {
                                    // Display the update form with pre-filled data
                                    ?>
                                    <form action="includes/process_update.php" method="post">

                                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

                                        <div class="form-group mb-3">
                                            <input type="text" name="firstName" class="form-control"
                                            placeholder="First Name" value="<?php echo $data['firstName']; ?>">
                                        </div>

                                        <div class="form-group mb-3">
                                            <input type="text" name="secondName" class="form-control"
                                            placeholder="Second Name" value="<?php echo $data['secondName']; ?>">
                                        </div>

                                        <div class="form-group mb-3">
                                            <input type="text" name="course" class="form-control"
                                            placeholder="Course you want" value="<?php echo $data['course']; ?>">
                                        </div>

                                        <div class="form-group mb-3">
                                            <input type="text" name="telephone" class="form-control"
                                            placeholder="Your Telephone Number"
                                            value="<?php echo $data['telephone']; ?>">
                                        </div>

                                        <div class="form-group mb-3">
                                            <input type="text" name="email" class="form-control"
                                            placeholder="E-mail" value="<?php echo $data['email']; ?>">
                                        </div>

                                        <button type="submit" class="btn btn-warning">Update</button>
                                    </form>
                                    <?php
                                }
                                else{
                                    echo "<p>No data found for the provided ID.</p>";
                                }
                            }
                            
                        else {
                            echo "<p>Invalid ID provided.</p>";
                        }
                     ?>
                    </div>

                </div>


                <div class="col-lg-2 mt-10">
                    <h3 class="my-4">Register Now</h3>
                    <form action="includes/process_form.php" method="post">
                        <div class="form-group mb-3">
                            <input type="text" name="firstName" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="secondName" class="form-control" placeholder="Second Name">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="course" class="form-control" placeholder="Course you want">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="telephone" class="form-control"
                            placeholder="Your Telephone Number">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="email" class="form-control" placeholder="E-mail">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                        <?php
                            if (isset($_GET["success"]) && $_GET["success"] == "true") {
                                echo "<p style=\"color:green\">Your details have been sent successfully.</p>";
                            }
                        ?>
                    <hr/>
                   
                </div>

            </div>
        </div>
            <footer class="bg-dark text-white py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h4>About Us</h4>
                            <p>This is Baking Divas, a rising baking company. </p>
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
    </body>
</html>