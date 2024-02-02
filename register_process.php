<?php
if (isset($_POST['Name'])) {

    $server = "localhost";

    $username = "root";

    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Address = $_POST['Address'];
    $Phone = $_POST['Phone'];

    $sql = "INSERT INTO `user.user` (`Name`, `Email`, `Password`, `Address`, `Phone`, `Date`) VALUES ('$Name', '$Email', '$Password', '$Address', '$Phone', current_timestamp())";

    if ($con->query($sql) === TRUE) {
        echo '<script>alert("LogIn Success ");</script>';
    } else {
        echo '<script>alert("Invalid");</script>';
    }

    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h2>User Registration</h2>
    <form action="register_process.php" method="post">
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="text" name="address" placeholder="Address" required><br>
        <input type="text" name="phone" placeholder="Phone Number" required><br>
        <button type="submit">Register</button>
    </form>
    <form action="login.php" method="post">
        <h3>Already a User</h3>
        <button type="submit">LogIn</button>
    </form>
</body>
</html>

