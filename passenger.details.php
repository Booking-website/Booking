<?php
include_once 'header.php';
?>


<head>
  <!--  Style -->
  <link rel="stylesheet" href="./css/master-bookings.css">
	<title>Passenger details</title>
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
						echo "<input type=\"submit\" value=\"Submit Travel/Ticket Details\" name=\"Submit\">";
						echo "</form>";
				?>
	</div>
</main>



<?php
      include_once 'footer.php';
  ?>
