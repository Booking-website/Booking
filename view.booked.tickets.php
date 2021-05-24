<?php
include_once 'header.php';
?>
	<body>
		<h2>VIEW BOOKED FLIGHT TICKETS</h2>
		<?php

			$userID=$_SESSION['userid'];
			require_once('./includes/dbh.inc.php');
			$query="SELECT tickets.ticketID, tickets.date_of_reservation, tickets.flightID, flights.from_city, flights.to_city, flights.departure_date, tickets.class FROM tickets INNER JOIN flights
ON tickets.flightID = flights.flightID where userID=? ORDER BY  date_of_reservation";
			$stmt=mysqli_prepare($conn,$query);
			mysqli_stmt_bind_param($stmt,"s",$userID);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt,$ticketID,$date_of_reservation,$flightID, $from_city, $to_city, $departure_date, $class);
			mysqli_stmt_store_result($stmt);
			if(mysqli_stmt_num_rows($stmt)==0)
			{
				echo "<h3><center>No upcoming trips!</center></h3>";
			}
			else
			{
				echo "<table class='table' cellpadding=\"10\"";
				echo "<tr><th>TicketID</th>
				<th>Date of Reservation</th>
				<th>FlightID.</th>
				<th>From city</th>
        <th>To city</th>
        <th>Departure date</th>
				<th>Class</th>
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
        			</tr>";
    			}
    			echo "</table> <br>";
			}
			mysqli_stmt_close($stmt);
			mysqli_close($conn);
		?>
	</body>
</html>
