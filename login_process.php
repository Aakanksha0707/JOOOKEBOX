<?php
session_start();

$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['login'])) {
    $Email = $_POST['email']; 
    $Password = $_POST['password'];

    $sql = "SELECT * FROM `user`;";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['Email'] = $Email;
        
        echo '<script>alert("LogIn Success ");</script>'; // Display pop-up message
    } else {
        echo '<script>alert("Invalid");</script>'; // Display pop-up message
    }

    
}

$con->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="logo.css">

</head>
<body>
    <h2>User Login</h2>
    <form action="" method="post">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit" name="login">Login</button>
    </form>
    <form action="register.php" method="post">
        <h3>New User</h3>
        <button type="submit">Register</button>
    </form>
</body>
</html>
