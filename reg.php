<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reg.css">
    <title>Register</title>

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



    <section class="register">
        <div class="content">
           

        </div>

        <div class="container">

            <div class="contactForm">
                <form action="" method="POST">
                    <h2>Register Form </h2>
                    <div class="inputBox">
                        <input type="text" name="firstname" required="required">
                        <span>First Name</span>
                    </div>

                    <div class="inputBox">
                        <input type="text" name="lastname" required="required">
                        <span>Last Name</span>
                    </div>

                    <div class="inputBox">
                        <input type="text" name="username" required="required">
                        <span>Username</span>
                    </div>

                    <div class="inputBox">
                        <input type="password" name="password" required="required">
                        <span>Password</span>
                    </div>
                    
                    <div class="inputBox">
                        <input type="text" name="email" required="required">
                        <span>Email</span>
                    </div>

                    <div class="inputBox">
                      <input type="submit" name="" value="Register">

                    </div>
                   
                </form>
            </div>

          
            <?php
        if (!empty($_POST)) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            $sql = "INSERT INTO user (firstname,lastname,username,password,email) VALUES('$firstname','$lastname','$username','$password','$email')";
            $result = $conn->query($sql);
            ?>
           
        <?php
        }
        ?>

            



        </div>

    </section>


</body>
</html>