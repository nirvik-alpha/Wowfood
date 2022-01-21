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



    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        
        <div class="container">
        
         <h2 class="text-center">Explore Foods</h2>


         
         <?php
        $sql = "SELECT * FROM category";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

        ?>
            <a href="foods.php">
            <div class="box-3 float-container">
                <img src="images/<?php echo $row["picture"] ?>" alt="Pizza" class="img-responsive img-curve">

                <h3 class="float-text text-white"><?php echo $row["name"] ?></h3>
            </div>
            </a>

         <?php
            }
         }
         ?>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->


 
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