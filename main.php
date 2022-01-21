<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="mainh.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <title>Document</title>
</head>
<body>
    
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
            
            <form action="food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

   <!-- CAtegories Section Starts Here -->
   <section class="categories">
    <div class="container">
        <h2 class="text-center">OUR FOOD GALLERY</h2>

        <a href="category-foods.php">
        <div class="box-3 float-container">
            <img src="images/Wings2.jpg" alt="Pizza" class="img-responsive img-curve">

            <h3 class="float-text text-white">Chicken </h3>
        </div>
        </a>

        <a href="#">
        <div class="box-3 float-container">
            <img src="images/Tpasta.jpg" alt="Burger" class="img-responsive img-curve">

            <h3 class="float-text text-white">Pasta</h3>
        </div>
        </a>

        <a href="#">
        <div class="box-3 float-container">
            <img src="images/stek.jpg" alt="Momo" class="img-responsive img-curve">

            <h3 class="float-text text-white">Steak</h3>
        </div>
        </a>

        <div class="clearfix"></div>
    </div>
</section>
<!-- Categories Section Ends Here -->
    
 <!-- fOOD MEnu Section Starts Here -->
 <section class="food-menu">
    <div class="container">
        <h2 class="text-center">OUR FOOD MENU</h2>

        <div class="food-menu-box">
            <div class="food-menu-img">
                <img src="images/tunapasta.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
            </div>

            <div class="food-menu-desc">
                <h4>Pasta</h4>
                <p class="food-price">100 Tk</p>
                <p class="food-detail">
                    Made with Italian Sauce, Chicken, and organice vegetables.
                </p>
                <br>

                <a href="order.html" class="btn btn-primary">Order Now</a>
            </div>
        </div>

        <div class="food-menu-box">
            <div class="food-menu-img">
                <img src="images/cake.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
            </div>

            <div class="food-menu-desc">
                <h4>Cake</h4>
                <p class="food-price">120 Tk</p>
                <p class="food-detail">
                    Made with Chocolate , Milk, and organice flour.
                </p>
                <br>

                <a href="#" class="btn btn-primary">Order Now</a>
            </div>
        </div>

        <div class="food-menu-box">
            <div class="food-menu-img">
                <img src="images/menu-burger.jpg" alt="Chicke Hawain Burger" class="img-responsive img-curve">
            </div>

            <div class="food-menu-desc">
                <h4> Burger</h4>
                <p class="food-price">200 Tk</p>
                <p class="food-detail">
                    Made with Italian Sauce, Chicken, and organice vegetables.
                </p>
                <br>

                <a href="#" class="btn btn-primary">Order Now</a>
            </div>
        </div>

        <div class="food-menu-box">
            <div class="food-menu-img">
                <img src="images/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
            </div>

            <div class="food-menu-desc">
                <h4>Cheese Pizza</h4>
                <p class="food-price">300 Tk</p>
                <p class="food-detail">
                    Made with Italian Sauce, Chicken, and organice Cheese.
                </p>
                <br>

                <a href="#" class="btn btn-primary">Order Now</a>
            </div>
        </div>

        <div class="food-menu-box">
            <div class="food-menu-img">
                <img src="images/meatball.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
            </div>

            <div class="food-menu-desc">
                <h4>Meat Ball</h4>
                <p class="food-price">240 Tk</p>
                <p class="food-detail">
                    Made with Italian Sauce, Beef, and organice ginger.
                </p>
                <br>

                <a href="#" class="btn btn-primary">Order Now</a>
            </div>
        </div>

        <div class="food-menu-box">
            <div class="food-menu-img">
                <img src="images/menu-momo.jpg" alt="Chicke Hawain Momo" class="img-responsive img-curve">
            </div>

            <div class="food-menu-desc">
                <h4>Chicken Steam Momo</h4>
                <p class="food-price">250 Tk</p>
                <p class="food-detail">
                    Made with Italian Sauce, Chicken, and organice vegetables.
                </p>
                <br>

                <a href="#" class="btn btn-primary">Order Now</a>
            </div>
        </div>


        <div class="clearfix"></div>

    </div>

    <p class="text-center">
        <a href="#">See  Foods</a>
    </p>
</section>
<!-- fOOD Menu Section Ends Here -->

<!--     Our  Services section start here  -->
<section class="service">

    <h1>OUR SERVICES</h1>
    

    <div class="row">
    <div class="service-col">
        <h3>Quality Food</h3>
        <p> We Provide Quality foods. Our foods are made by experienced chef. We always care for our customers . We want to 
            ensure that our customer gets the best service . 
        </p>
    </div>
    <div class="service-col">
        <h3>Free & Fast Delivery</h3>
        <p> We not only ensure that customer gets the best food but also the 
            customer gets the food on time . Our Delivery man will be on their doorstep
            within time 

        </p>
    </div>
    <div class="service-col">
        <h3>Easy Order Method</h3>
        <p> We try to ensure that the customer doesnt face any problem in ordering food.
            Our order system is user freidly.  
        </p>
    </div>

    </div>
    </section>

<!--     Our  Services section Ends here  -->

<!--Our Best Foods  Starts Here -->
<section class="best">
    <h1>OUR BEST FOODS</h1>
    
    <div class="row">

        <div class="best-col">
            <img src="images/steak.jpg" alt="">
            <h3>Hot Rump Steak </h3>
            <p>Made with beef. Its juicy and tender</p>
        </div>
        <div class="best-col">
            <img src="images/chickenwings.jpg" alt="">
            <h3>Hot Chicken Drums</h3>
            <p>Made with Italian Spice and sauce</p>
        </div>
        <div class="best-col">
            <img src="images/W.jpg" alt="">
            <h3>Petuk Platter</h3>
            <p> Rice,Chicken,Beef,Dessert in One </p>
        </div>

    </div>


</section>

<!--Our Best Foods  Ends Here -->

<!--  See our Customers starts here -->
<section class="testimonial">
    <h1>Our Customer Review</h1>
   

    <div class="row">
        <div class="testimonial-col">
            <img src="images/messi.jpg" alt="">
            <div>
                <p>I have ordered from them.Their Service 
                    is really really good . I got my order 
                    on time . Besides their Food quality 
                    is also good . I would Recommend this 
                    website to order quality food.
                </p>
                <h3>mehedi hasan</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
        </div>
        <div class="testimonial-col">
            <img src="images/ron1.jpg" alt="">
            <div>
                <p> I have tried their pasta and it is 
                    so yummy . They really serve quality 
                    food . Besides their service is also 
                    good. Got my delivery on time . 
                </p>
                <h3>siam ahmed</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
        </div>
    </div>

</section>

<!--  TEstimonial ends here-->

<!--CTA Starts here-->
<section class="cta">
    <h1>Order our foods now!</h1>
    <a href="" class="hero-btn">Contact Us</a>
</section>

<!--   Footer  -->

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