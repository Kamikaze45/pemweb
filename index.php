<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Rental Mobil</title>
</head>
<body>
    <h2>Login - Rental Mobil</h2>
    <form action="process_login.php" method="POST">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="name">Name:</label><br>
        <input type="name" id="name" name="name" required><br><br>
        

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <button type="submit">Login</button>
    </form>
    <p>Belum punya akun? <a href="signup.php">Sign Up</a></p>
</body>
</html>