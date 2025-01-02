<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="styles/style.css"> 
</head>
<body>
    <h1>Register</h1>
    <form action="../../Process/Users/ProcessRegister.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>

        <input type="hidden" name="role" value="user">

        <button type="submit">Register</button>
    </form>
</body>
</html>
