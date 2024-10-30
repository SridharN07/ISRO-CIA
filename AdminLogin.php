<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="./Styles/admin.css">
</head>
<body>
    <div class="container">
    
        <form method="post" action="" autocomplete="off">
            <img id="logo" class="logo" src="./Styles/Images/Logos/ISRO.png">
            <h3>Login</h3>
            <label for="email">Username:</label>
            <input type="email" placeholder="User ID" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" placeholder="Password" id="password" name="password" required>
            <button type="submit" name="login" class="button">Login</button>
            <?php if(isset($error)) { echo $error; } ?>
        </form>
    </div>
</body>
</html>

<?php
include('config.php');
session_start();
$error = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $error = "";
        $username = $_POST["email"];
        $password = $_POST["password"];
        $sql = "SELECT * FROM Admins WHERE AdminUsername = '$username'";

        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            $user = mysqli_fetch_assoc($result);
            if ($user && ($password === $user['AdminPassword'])) {
                $_SESSION['username'] = $user['AdminName'];
                echo "Login successful!";
                header("Location: detail.php");
                exit();
            } else {
                $error = "Invalid username or password.";
            }
        } else {
            $error = "Invalid username or password.";
        }
    } else {
        $error = "Please fill in all fields.";
    }
}
$con->close();
?>
