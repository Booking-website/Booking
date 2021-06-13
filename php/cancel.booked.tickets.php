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
		<form action="cancel.booked.tickets.inc.php" method="post">
			<h2>CANCEL BOOKED TICKETS</h2>
			<?php
				$userID=$_SESSION['userid'];
				require_once('../includes/dbh.inc.php');
				$query="SELECT tickets.ticketID, tickets.date_of_reservation, tickets.flightID, flights.from_city, flights.to_city, flights.departure_date, tickets.class, tickets.booking_status FROM tickets INNER JOIN flights ON tickets.flightID = flights.flightID where userID=? ORDER BY  date_of_reservation";
				$stmt=mysqli_prepare($conn,$query);
				mysqli_stmt_bind_param($stmt,"s",$userID);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_bind_result($stmt,$ticketID,$date_of_reservation,$flightID, $from_city, $to_city, $departure_date, $class, $status);
				mysqli_stmt_store_result($stmt);

				if(mysqli_stmt_num_rows($stmt)==0) {
					echo "<h3><center>No upcoming trips!</center></h3>";
				} else {
					echo "<table class='table' cellpadding=\"10\"";
					echo "<tr><th>TicketID</th>
					<th>Date of Reservation</th>
					<th>FlightID.</th>
					<th>From city</th>
	        <th>To city</th>
	        <th>Departure date</th>
					<th>Class</th>
					<th>Status</th>
					</tr>";

					while(mysqli_stmt_fetch($stmt)) {
      			echo "<tr>
      			<td>".$ticketID."</td>
      			<td>".$date_of_reservation."</td>
						<td>".$flightID."</td>
						<td>".$from_city."</td>
						<td>".$to_city."</td>
	          <td>".$departure_date."</td>
						<td>".$class."</td>
						<td>".$status."</td>
      			</tr>";
	    		}
    			echo "</table> <br>";
				}
				mysqli_stmt_close($stmt);
				mysqli_close($conn);
			?>

			<?php
				if(isset($_GET['msg']) && $_GET['msg']=='failed') {
					echo "
						<strong style='color: red'>
							*Invalid PNR, please enter PNR again
						</strong>
						<br>
						<br>
					";
				}
			?>

			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter the Ticket ID (PNR)</td>
				</tr>
				<tr>
					<td class="fix_table">
						<input type="text" name="ticketID" required>
					</td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Cancel Ticket" name="Cancel_Ticket">
		</form>
	</div>
</main>

<?php
	include_once 'footer.php';
?>
