<?php
//connect to database
$host = "localhost";
$username = "root";
$password = "";
$database = "bank";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $dob = $_POST['date_of_birth'];
    $nationality = $_POST['nationality'];
    $balance = $_POST['balance'];
    $currency_type = $_POST['currency_type'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        echo "<p style='color: red;'>Passwords do not match.</p>";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO user (fname, mname, lname, date_of_birth, nationality, balance, currency_type, password)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssss", $fname, $mname, $lname, $dob, $nationality, $balance, $currency_type, $hashed_password);

        if ($stmt->execute()) {
            echo "<p style='color: green;'>User registered successfully! Your account number is <strong>" . $stmt->insert_id . "</strong>. You may now login with your new account.</p>";
        } else {
            echo "<p style='color: red;'>Error: " . $stmt->error . "</p>";
        }

        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Personal Information</title>
    <link rel="stylesheet" href="personalinfo.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="container">
    <aside class="sidebar">
        <nav>
            <ul>
                <li class="active"><a href="signin.php">Sign in</a></li>
                <li><a href="dashboard.php">Dashboard</a></li>
            </ul>
        </nav>
    </aside>

    <main class="main-content">
        <h2>Create a New Account</h2>
        <p>Fill out the form to create a new user account.</p>

        <form method="POST" action="">
            <label>First Name:</label><br>
            <input type="text" name="fname" required><br>

            <label>Middle Name:</label><br>
            <input type="text" name="mname"><br>

            <label>Last Name:</label><br>
            <input type="text" name="lname" required><br>

            <label>Date of Birth:</label><br>
            <input type="date" name="date_of_birth" required><br>

            <label>Nationality:</label><br>
            <input type="text" name="nationality"><br>

            <label>Balance:</label><br>
            <input type="number" step="0.01" name="balance" value="0.00"><br>

            <label>Currency Type:</label><br>
            <select name="currency_type" required>
                <option value="PHP">PHP</option>
                <option value="USD">USD</option>
                <option value="YEN">YEN</option>
            </select><br>

            <label>Password:</label><br>
            <input type="password" name="password" required><br>

            <label>Confirm Password:</label><br>
            <input type="password" name="confirm_password" required><br><br>

            <input type="submit" value="Register">
        </form>
    </main>
</div>
</body>
</html>
