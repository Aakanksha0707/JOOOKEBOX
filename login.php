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
    <form action="login_process.php" method="post">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
        
    </form>
    <form action="register.php" method="post">
        <h3>New User</h3>
        <button type="submit">Register</button>
    </form>

    
</body>
   
</html>
