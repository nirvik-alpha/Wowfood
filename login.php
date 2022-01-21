<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reg.css">
   
    <title>Login</title>

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




    <section class="login">
        <div class="content">
            <h2>Login </h2>

        </div>

        <div class="container">

            <div class="contactForm">
                <form action="" method="POST">
                    <h2> Login Form </h2>
                   
                    <div class="inputBox">
                        <input type="text" name="username" required="required">
                        <span>Username</span>
                    </div>

                    <div class="inputBox">
                        <input type="password" name="password" required="required">
                        <span>Password</span>
                    </div>
                    
                    <div class="inputBox">
                      <input type="submit" name="submit" value="Login">

                    </div>
                </form>
            </div>

    
            <?php
        if (isset($_SESSION['user'])) {
            header("Location: http://localhost/foodorder/main.php");
        }
        if (!empty($_POST)) {
            $username = $_POST['username'];
            $password = ($_POST['password']);

            $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
            $result = $conn->query($sql);
            if ($result->num_rows == 1) {

                if (!isset($_SESSION['user'])) {
                    $_SESSION['user'] = true;
                    $_SESSION['username'] = $username;
                    $_SESSION['password'] = $password;
                    header("Location: http://localhost/foodorder/main.php");
                }
            } else {
                ?><p class="text-white">User Haven't Registered Yet</p><?php
            }
        }
        ?>

    

        </div>

    </section>

</body>
</html>