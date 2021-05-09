<?php
include_once 'header.php';
?>
<html>
	<head>
		<title>
			Ticket Booking Successful
		</title>
	</head>
	<body>
		</div>
		<h2>BOOKING SUCCESSFUL</h2>
		<h3>Your payment of &#x20b9; <?php echo $_SESSION['payment_amount']; ?> has been received.<br><br> Your PNR is <strong><?php echo $_SESSION['ticketID'];?></strong>. Your tickets have been booked successfully.</h3>
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
		-->
	</body>
</html>
