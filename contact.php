<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <title>Contact Us</title>
    <script src="https://kit.fontawesome.com/0a82be3e8d.js" crossorigin="anonymous"></script>
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

    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            
        </div>
        <div class="container">
            <div class="contactInfo">

                <div class="box">
                    <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>4671 Love Road,<br>AUST </p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>42547334266 </p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>sadidrafan94@gmail.com  </p>
                    </div>
                </div>
            </div>

            <div class="contactForm">
                <form action=""  method="POST">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="name" required="required">
                        <span>Full Name</span>
                    </div>

                    <div class="inputBox">
                        <input type="text" name="gmail" required="required">
                        <span>Email</span>
                    </div>

                    <div class="inputBox">
                        <textarea id="message" name="message" required="required"></textarea>
                        <span>Type Your Message..</span>
                    </div>

                    <div class="inputBox">
                      <input type="submit" name="" value="Send">

                    </div>
                </form>
            </div>
        
            <?php
        if (!empty($_POST)) {
            $name = $_POST['name'];
            $gmail = $_POST['gmail'];
            $message = $_POST['message'];
            $sql = "INSERT INTO contact (name,gmail,message) VALUES('$name','$gmail','$message')";
            $result = $conn->query($sql);
            ?>
           
        <?php
        }
        ?>

        </div>
    </section>
</body>
</html>