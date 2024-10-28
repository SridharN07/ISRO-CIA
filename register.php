<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <link rel="stylesheet" href="./Styles/register.css">
    <!--    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 20px;
        }
        .container {
            width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #fff;
        }
        .button {
            margin: 10px;
            padding: 10px 20px;
            border: none;
            background-color: #28a745;
            color: white;
            cursor: pointer;
        }
        .button:hover {
            background-color: #218838;
        }
        .edit {
            background-color: #ffc107;
        }
        .edit:hover {
            background-color: #e0a800;
        }
    </style>-->
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