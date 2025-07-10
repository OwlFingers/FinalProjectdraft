<?php
// Sample account details (static)
$account = [
    "number" => "10140715",
    "name" => "JOhn Michael Taguinod",
    "balance" => 21500
];
?>

<!DOCTYPE html>
<head>
    <title>Deposit</title>
    <link rel="stylesheet" href="deposit.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="container">
    <aside class="sidebar">
        <h2>PiggyBank</h2>
        <ul>
            <li class="active"><i class='bx bx-money'></i> Deposit</li>
        </ul>
    </aside>

    <main class="main-content">
        <h2>Deposit</h2>
        <p>Fill out the form below to make a deposit.</p>

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
                        <label>Current Balance</label>
                        <input type="text" value="<?= $account['balance'] ?>" readonly>
                    </div>
                    <div class="column">
                        <label>Deposit Amount</label>
                        <input type="number" placeholder="₱0.00" min="0" name="amount">
                    </div>
                </div>
                <div class="buttons">
                    <button type="submit">Submit</button>
                    <button type="button" onclick="window.location='deposit.php'">Cancel</button>
                </div>
            </form>
        </div>
    </main>
</div>
</body>
</html>
