<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Rental Mobil</title>
</head>
<body>
    <h2>Sign Up - Rental Mobil</h2>
    <form action="process_signup.php" method="POST">
        <label for="name">Nama Lengkap:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <button type="submit">Sign Up</button>
    </form>
    <p>Sudah punya akun? <a href="index.php">Login</a></p>
</body>
</html>
