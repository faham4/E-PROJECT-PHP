<?php
session_start();
require("connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role']; // New field to differentiate between User and Admin

    if ($role == 'user') {
        // Example: User authentication (replace with actual DB verification)
        if ($username == 'user' && $password == 'password') {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("Location: index (1).php"); // Redirect to user dashboard
        } else {
            $error = "Invalid user credentials. Please try again.";
        }
    } else if ($role == 'admin') {
        // Admin authentication
        $username = input_filter($username);
        $password = input_filter($password);

        $username = mysqli_real_escape_string($con, $username);
        $password = mysqli_real_escape_string($con, $password);

        $query = "SELECT * FROM `admin_login` WHERE `Admin_Name`=? AND `Admin_Password`=?";
        if ($stmt = mysqli_prepare($con, $query)) {
            mysqli_stmt_bind_param($stmt, "ss", $username, $password);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            if (mysqli_stmt_num_rows($stmt) == 1) {
                $_SESSION['AdminLoginId'] = $username;
                header("Location: Admin Panel.php"); // Redirect to admin panel
            } else {
                $error = "Invalid admin credentials. Please try again.";
            }
            mysqli_stmt_close($stmt);
        } else {
            $error = "SQL Query Cannot be Prepared.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <form action="login.php" method="post">
            <label for="role">Login as:</label>
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
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="register.php">Register here</a>.</p>
    </div>
</body>
</html>
