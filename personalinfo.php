<?php
// Example lang to you have to create functions for a users
$user = [
    "name" => "John Michael Taguinod",
    "number" => "0732001982",
    "dob" => "July 26, 2004",
    "country" => "Philippines",
    "language" => "Filipino",
];
?>

<!DOCTYPE html>
<head>
    <title>Personal Information</title>
    <link rel="stylesheet" href="personalinfo.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
<div class="container">
    <aside class="sidebar">
        <div class="profile-pic">
            <i class='bx bxs-user-circle'></i>
            <h3><?= $user['name'] ?></h3>
            <p><?= $user['number'] ?></p>
        </div>
        <nav>
            <ul>
                <li class="active">My Accounts</li>
                <li>Security</li>
            </ul>
        </nav>
    </aside>

    <main class="main-content">
        <h2>Personal information</h2>
        <p>Manage your personal information.</p>

        <div class="info-grid">
            <div class="info-box">
                <label>Name</label>
                <div><?= $user['name'] ?></div>
                <i class='bx bx-user'></i>
            </div>
            <div class="info-box">
                <label>Date of Birth</label>
                <div><?= $user['dob'] ?></div>
                <i class='bx bx-calendar'></i>
            </div>
            <div class="info-box">
                <label>Country Region</label>
                <div><?= $user['country'] ?></div>
                <i class='bx bx-world'></i>
            </div>
            <div class="info-box">
                <label>Language</label>
                <div><?= $user['language'] ?></div>
                <i class='bx bx-globe'></i>
            </div>
            <div class="info-box full">
                <label>Account Number</label>
                <div><?= $user['number'] ?></div>
                <i class='bx bx-envelope'></i>
            </div>
        </div>
    </main>
</div>
</body>
</html>
