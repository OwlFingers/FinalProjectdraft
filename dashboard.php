<!DOCTYPE html
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- My CSS -->
	<link rel="stylesheet" href="dashboard.css">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

	<title> PiggyBank </title>
</head>
<body>


<!----------------------------------------- SIDEBAR ---------------------------------------------------->
	<section id="sidebar">
		<a href="#" class="brand">
    		<img src="piggylogo.png" alt="PiggyBank Logo" class="logo-img">
   			<span class="text">PiggyBank</span>
		</a>

		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<form action="personalinfo.php" method="POST">
				<a href="#">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Personal Information</span>
				</a>
			</li>

			<li>
				<form action="withdraw.php" method="POST">
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Withdraw</span>
				</a>
			</li>

			<li>
				<form action="deposite.php" method="POST">
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Deposite</span>
				</a>
			</li>

			<li>
				<form action="balance.php" method="POST">
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Balance</span>
				</a>
			</li>

            <li>
				<form action="transaction.php" method="POST">
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Transaction</span>
				</a>
			</li>
		</ul>

		<ul class="side-menu">

			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<form action="logout.php" method="POST">
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
<!----------------------------------------- SIDEBAR ---------------------------------------------------->


<!----------------------------------------- CONTENT ---------------------------------------------------->
	<section id="content">
<!----------------------------------------- NAVBAR ----------------------------------------------------->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
		</nav>
<!----------------------------------------- NAVBAR ------------------------------------------------------>

<!----------------------------------------- MAIN -------------------------------------------------------->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h2>
						<?php
    						$today = date("F j, Y");
    						echo "<span style='color: white;'>$today</span>";
						?>
						</h2>
						<p>calendar</p>
					</span>
				</li>
			
				<li>
    				<i class='bx bxs-cloud'></i>
   					<span class="text">
    			    <?php include 'weather.php'; ?>
    			</span>
				</li>

				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>current balance</h3>
						<p></p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>History</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>User</th>
								<th>Date Order</th>
								<th>Status</th>
							</tr>
						</thead>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Notifications</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="noti-list">
						<li class="completed">
							<p>Notif</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>notif</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div>
			</div>
		</main>
<!----------------------------------------- MAIN ---------------------------------------------------------->
	</section>
<!---------------------------------------- CONTENT -------------------------------------------------------->
</body>
</html>