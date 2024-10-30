<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <link rel="stylesheet" href="./Styles/register.css">
</head>
<body>
    <div class="container">
        
       <form method="post" action="">
        <h3>Registration</h3>
                <label for="name">Name:</label>
                <input type="text" placeholder="Enter Your Name" id="name" name="name">
                <label for="email">Email:</label>
                <input type="email" placeholder="Enter your Email ID" id="email" name="email">
                <label for="name">Password:</label>
                <input type="password" placeholder="Enter Password" id="password" name="password">
            <button type="submit" name="submit" class="button">Register</button>
        </form>
    </div>
</body>
</html>

<?php
include('config.php');

if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO users (Name, Email, Password) VALUES ('$name','$email','$password')";
    
    if($con->query($sql)) {
        header("Location: thanks.html");
        exit();
    }
    $con->close();
}
?>