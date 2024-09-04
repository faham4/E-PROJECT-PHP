<?php
session_start();
require("connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role']; // New field to differentiate between User and Admin

    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password);
    $password = password_hash($password, PASSWORD_BCRYPT); // Hash the password for security

    if ($role == 'user') {
        // Insert user details into the users table
        $query = "INSERT INTO users (username, password) VALUES (?, ?)";
    } else if ($role == 'admin') {
        // Insert admin details into the admin_login table
        $query = "INSERT INTO admin_login (Admin_Name, Admin_Password) VALUES (?, ?)";
    }

    if ($stmt = mysqli_prepare($con, $query)) {
        mysqli_stmt_bind_param($stmt, "ss", $username, $password);
        mysqli_stmt_execute($stmt);
        
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        
        if ($role == 'user') {
            header("Location: index (1).php"); // Redirect to user dashboard
        } else if ($role == 'admin') {
            $_SESSION['AdminLoginId'] = $username;
            header("Location: Admin Panel.php"); // Redirect to admin panel
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error: Could not prepare SQL statement.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/login.css">
    <title>Register</title>
    
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form action="register.php" method="post">
            <label for="role">Register as:</label>
            <select name="role" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <br>
            <label for="username">Username:</label>
            <input type="text" name="username" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <br>
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="login.php">Login here</a>.</p>
    </div>
</body>
</html>
