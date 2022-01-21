<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" >

    <link rel="stylesheet" href="css/about.css">
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



    
    <div class="section">
        <div class="container">
           
         <?php
        $sql = "SELECT * FROM about";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

        ?>
            
            <div class="content-section">
               
               <div class="title">
                   <h1>ABOUT US</h1>
               </div>

               <div class="content">
                   <h3><?php echo $row["title"] ?></h3>

                   <p>
                   <?php echo $row["description"] ?>
                   </p>
                   <div class="button">
                       <a href="">Read More</a>
                   </div>
               </div>

               <div class="social">
                   <a href=""><i class="fab fa-facebook-f"></i></a>
                   <a href=""><i class="fab fa-twitter"></i></a>
                   <a href=""><i class="fab fa-instagram"></i></a>
               </div>

           </div>

               <div class="image-section">
                   <img src="images/<?php echo $row["image"] ?>" alt="">
                </div>

         <?php
            }
         }
         ?>
        </div>


    </div>


</body>
</html>