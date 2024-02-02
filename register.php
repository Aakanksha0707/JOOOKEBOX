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
