<?php
include "header.php";

if (isset($_SESSION['user'])) {
    $conn->query($sql);
    session_unset();
    session_destroy();
}
header("Location: http://localhost/foodorder");
