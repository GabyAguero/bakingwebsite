<DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add product</title>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>Add page</title>
        
    </head>

    <body>
        
         <div class="container-fluid">
                <div class="row">

                    <?php
                        include("nav.html");
                    ?>
                    
                    <div class="col-lg-6">
                        <h3>Registration Form</h3>
                        <form>
                            <div class="form-group">
                                <label>First Name: </label><br/>
        
                                <input type="First name" name="First name" placeholder="Your first name">
                            </div>
        
                            <div class="form-group">
                                <label>Second name: </label><br/>
        
                                <input type="Second name" name="Second name" placeholder="Your second name">
                            </div>
        
                            <div class="form-group">
                                <label>Telephone number: </label><br/>
        
                                <input type="tel" name="Telephone" placeholder="Your telephone number">
                            </div>

                            <div class="form-group">
                                <label>Email: </label><br/>
        
                                <input type="email" name="Email" placeholder="Your Email Address">
                            </div>

                            <div class="form-group">
                                <label>Registration number: </label><br/>
        
                                <input type="" name="Registration No." placeholder="Your Registration number">
                            </div>

                            <div class="form-group">
                                <label>Gender:</label>
                                Male<input type="radio" name="gender">
                                Female<input type="radio" name="gender"><br><br> 
        
                            <div class="form-group">
                                <label for="courses">Courses:</label>
                                <select class="form-control" name="Movies[]">Use Control and the mouse to select movies>
                                    <option value="Web">Web Design</option>
                                    <option value="Graphics">Graphics Design</option>
                                    <option value="Java">Java Programming</option>
                                    <option value="M.A.D">Mobile App Development</option>
                                </select>
                            </div>
                            <hr/>
                            <div>
                                <label for="">Python</label>
                                <input type="checkbox" name="Python"><br/>
        
                                <label for="">Ruby</label>
                                <input type="checkbox" name="Ruby"><br/>
        
                                <label for="">C++</label>
                                <input type="checkbox" name="C++"><br/>
        
                                <label for="">Bash</label>
                                <input type="checkbox" name="Bash"><br/>
                            </div>
                            <br/>
        
                            <button type="submit" class="btn btn-sucess" style="color: blue;" solid >Submit</button>
                        </form>
                    </div>    
                </div>
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

    </body>
</html>
</DOCTYPE>