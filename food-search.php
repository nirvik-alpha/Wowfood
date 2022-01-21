<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
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
                     <a href="main.php">Home</a>
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
                        <a href="blog.php">Blog</a>
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
    <section class="food-search text-center">
        <div class="container">
            
            <h2 class="text-white">Foods on Your Search <a href="#" class="text-white"></a></h2>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <?php
                $search = $_POST['search'];
                $sql = "SELECT * FROM foods WHERE name LIKE '%$search%'";
                
                $res = mysqli_query($conn,$sql);
                $count = mysqli_num_rows($res);

                if($count>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $id = $row['id'];
                        $name = $row['name'];
                        $description = $row['description'];
                        $picture = $row['picture'];
                        $price = $row['price'];
                        ?>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    
                    <img src="images/<?php echo $picture;?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve"> 
                   
                 </div>

                <div class="food-menu-desc">
                    <h4><?php echo $name;?></h4>
                    <p class="food-price"><?php echo $price;?></p>
                    <p class="food-detail">
                         <?php echo $description;?>
                    </p>
                    <br>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>


                        <?php

                    }
                }
                else
                {
                   

                }

            ?>

            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    
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