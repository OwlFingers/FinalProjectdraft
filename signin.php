<?php
session_start();

//conect to database
$host = "localhost";
$username = "root";
$password = "";
$database = "bank";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $account_number = $_POST['account_number'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $account_number);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Incorrect password.";
        }
    } else {
        $error = "Account not found.";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
    <link rel="stylesheet" href="personalinfo.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="container">
    <aside class="sidebar">
        <nav>
            <ul>
                <li class="active"><a href="register.php">Register</a></li>
                <li><a href="dashboard.php">Dashboard</a></li>
            </ul>
        </nav>
    </aside>

    <main class="main-content">
        <h2>Sign In</h2>
        <p>Enter your account number and password to log in.</p>

        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

        <form method="POST" action="">
            <label>Account Number:</label><br>
            <input type="number" name="account_number" required><br>

            <label>Password:</label><br>
            <input type="password" name="password" required><br><br>

            <input type="submit" value="Sign In">
        </form>
    </main>
</div>
</body>
</html>
