<?php
include('config.php');

if (isset($_POST['submit'])) {
    $email = $_POST["username"];
    $password = $_POST["password"];

    $sql = "INSERT INTO login (Email, Password) VALUES ('$email','$password')";

    
    $con->query($sql);
    $con->close();
}
?>
