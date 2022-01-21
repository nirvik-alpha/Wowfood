<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

   
    
    <link rel="stylesheet" href="mainh.css">
       
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

</head>

<body>

  
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "food-order";
    $conn = new mysqli($servername, $username, $password, $dbname);
    session_start();
?>


    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo1.jpg" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="foods.php">Foods</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="team.php">Team</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                   

                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>


            <?php

    if (!empty($_GET)) {
          $id = $_GET['id'];
         $sql = "SELECT * FROM foods WHERE id=$id";
         $result = $conn->query($sql);
         while ($row = $result->fetch_assoc()) {
        ?>
          
          <form action="" class="order" method="POST">
                <fieldset>
                    <legend>Selected Food</legend>

                    <div class="food-menu-img">
                        <img src="images/<?php echo $row["picture"] ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                    </div>
    
                    <div class="food-menu-desc">
                        <h3 class="text-white"> <?php echo $row["name"] ?></h3>
                        <input type="hidden" name="food" value="<?php echo $row["name"] ?>">

                        <p class="food-price text-white" ><?php echo $row["price"] ?> Tk</p>
                        <input type="hidden" name="price" value="<?php echo $row["price"] ?>">

                        <div class="order-label text-white">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label text-white">Full Name</div>
                    <input type="text" name="name" placeholder="E.g. Sadid Rafan" class="input-responsive" required>

                    <div class="order-label text-white">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 01715xxxxxx" class="input-responsive" required>

                    <div class="order-label text-white">Email</div>
                    <input type="email" name="email" placeholder="E.g. hi@sadidrafan.com" class="input-responsive" required>

                    <div class="order-label text-white">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. location Area" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>

        <?php
        }
    } else {
      header("Location: http://localhost/foodorder");
    }
    ?>

        <?php
        if (!empty($_POST)) {
            $food = $_POST['food'];
            $price = $_POST['price'];
            $qty = $_POST['qty'];
            $total = $price * $qty;
            $name = $_POST['name'];
            $contact = $_POST['contact'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $sql2 = "INSERT INTO tbl_order(food,price,qty,total,name,contact,email,address) VALUES('$food','$price','$qty','$total','$name','$contact','$email','$address')";
            $result1 = $conn->query($sql2);
            ?>
           
        <?php
        }
        ?>
    


        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    
   

 
    <section class="footer">
    <h4>Copyright @ SadidRafan.All Rights Reserved  2021</h4>
    <p>Follow Us on</p>
    <div class="icons">
        <i class="fab fa-facebook"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-linkedin"></i>
    </div>
    <p>Made with <i class="fas fa-heart"></i> Sadid Rafan Email : sadidrafan094@gmail.com </p>
   
</section>


</body>
</html>