<?php
	include_once 'header.php';
?>

<head>
	<!-- Style -->
	<link rel="stylesheet" href="../css/master-bookings.css">
	<title>Success</title>
</head>

<header class="header" id="header">
	<div class="container">
		<h1>What a good day to start travel!</h1>
		<h3>Isn't it?</h3>
		<p>
			We are always happy to see you again. We will service you in high level everytime and everywhere!
		</p>
	</div>
</header>

<main class="main" id="main">
	<div class="container">
		<h2>BOOKING SUCCESSFUL</h2>
		<h3>
			Your payment of &#x20b9;
				<?php echo $_SESSION['payment_amount']; ?>
			has been received.
			<br><br>
			Your PNR is <strong><?php echo $_SESSION['ticketID'];?></strong>.
			Your tickets have been booked successfully.
		</h3>
		<p>
			<a href="./index.php">
				<i class="fa fa-home"></i> Go Home
			</a>
		</p>
	</div>
</main>

<?php
  include_once 'footer.php';
?>
