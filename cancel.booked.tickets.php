<?php
	include_once 'header.php';
?>


<head>
	<link rel="stylesheet" href="./css/master-bookings.css">
	<title>Success</title>
</head>


<header class="header" id="header">
	<div class="container">
		<h1>What a good day to start travel!</h1>
		<h3>Isn't it?</h3>
		<p>We are always happy to see you again. We will service you in high level everytime and everywhere!</p>
	</div>
</header>

<main class="main" id="main">
	<div class="container">
		<form action="cancel.booked.tickets.inc.php" method="post">
			<h2>CANCEL BOOKED TICKETS</h2>
			<?php
				if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<strong style='color: red'>*Invalid PNR, please enter PNR again</strong>
						<br>
						<br>";
				}
			?>
			<table cellpadding="5" style="padding-left: 30px;">
				<tr>
					<td class="fix_table">Enter the PNR</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="ticketID" required></td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Cancel Ticket" name="Cancel_Ticket">
		</form>
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
			PREDEFINED LOCATION WHEN BOOKING TICKETS
		-->
	</div>
</main>



	<?php
				include_once 'footer.php';
		?>
