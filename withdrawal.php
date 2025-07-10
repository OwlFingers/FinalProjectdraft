<?php
// Example lang to you have to create a users
$account = [
    "number" => "10140715",
    "name" => "John Michael Taguinod",
    "balance" => 21500
];
?>

<!DOCTYPE html>
<head>
    <title>Withdraw - Banking System</title>
    <link rel="stylesheet" href="withdrawal.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="container">
    <aside class="sidebar">
        <h2>PiggyBank</h2>
        <ul>
            <li class="active"><i class='bx bx-wallet'></i>Back</li>
        </ul>
    </aside>

    <main class="main-content">
        <h2>Withdraw</h2>
        <p>Enter the details below to process a withdrawal.</p>

        <div class="form-container">
            <form method="post" action="#">
                <div class="row">
                    <div class="column">
                        <label>Account Number</label>
                        <input type="text" value="<?= $account['number'] ?>" readonly>
                    </div>
                    <div class="column">
                        <label>Name</label>
                        <input type="text" value="<?= $account['name'] ?>" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label>Balance</label>
                        <input type="text" value="<?= $account['balance'] ?>" readonly>
                    </div>
                    <div class="column">
                        <label>Withdraw Amount</label>
                        <input type="number" placeholder="₱0.00" min="0" name="amount">
                    </div>
                </div>
                <div class="buttons">
                    <button type="submit">Submit</button>
                    <button type="button" onclick="window.location='withdraw.php'">Cancel</button>
                </div>
            </form>
        </div>
    </main>
</div>
</body>
</html>
