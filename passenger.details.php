<<?php
include_once 'header.php';
?>
<?php
			$class=$_SESSION['class'];
			$flightID=$_POST['select_flight'];
			$_SESSION['flightID']=$flightID;
			//$pass_name=array();
			echo "<h2>ADD PASSENGERS DETAILS</h2>";
			echo "<form action=\"add.new.ticket.php\" method=\"post\">";
					echo "<p><strong>PASSENGER<strong></p>";
					echo "<table class = 'table' cellpadding=\"0\">";
					echo "<tr>";
					echo "<td class=\"fix_table_short\">Passenger's Name</td>";
					echo "<td class=\"fix_table_short\">Passenger's Age</td>";
					echo "<td class=\"fix_table_short\">Passenger's IIN</td>";
					echo "<td class=\"fix_table_short\">Passenger's Document Number</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td class=\"fix_table_short\"><input type=\"text\" name=\"pass_name\" required></td>";
					echo "<td class=\"fix_table_short\"><input type=\"number\" name=\"pass_age\" required></td>";
					echo "<td class=\"fix_table_short\"><input type=\"number\" name=\"pass_iin\" required></td>";
          echo "<td class=\"fix_table_short\"><input type=\"number\" name=\"pass_document\" required></td>";
					echo "</table>";
					echo "<br><hr>";
				echo "<input type=\"submit\" value=\"Submit Travel/Ticket Details\" name=\"Submit\">";
				echo "</form>";
		?>
