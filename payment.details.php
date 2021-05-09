<?php
include_once 'header.php';
?>
<html>
	<head>
		<title>
			Enter Payment Details
		</title>
	</head>
	<body>
		<form action="./includes/payment.details.inc.php" method="post">
			<h2>ENTER THE PAYMENT DETAILS</h2>
			<h3 style="margin-left: 30px"><u>Payment Summary</u></h3>
			<?php
				$flightID=$_SESSION['flightID'];
				$departure_date=$_SESSION['departure_date'];
				$paymentID=rand(100000000,999999999);
				$ticketID=$_SESSION['ticketID'];
				$_SESSION['paymentID']=$paymentID;
				$payment_date=date('Y-m-d');
				$_SESSION['payment_date']=$payment_date;


				require_once('./includes/dbh.inc.php');
				if($_SESSION['class']=='economy')
				{
					$query="SELECT price_economy FROM flights where flightID=? and departure_date=?";
					$stmt=mysqli_prepare($conn,$query);
					mysqli_stmt_bind_param($stmt,"ss",$flightID,$departure_date);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_bind_result($stmt,$ticket_price);
					mysqli_stmt_fetch($stmt);
				}
				else if($_SESSION['class']=='business')
				{
					$query="SELECT price_business FROM flights where flightID=? and departure_date=?";
					$stmt=mysqli_prepare($conn,$query);
					mysqli_stmt_bind_param($stmt,"ss",$flightID,$departure_date);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_bind_result($stmt,$ticket_price);
					mysqli_stmt_fetch($stmt);
				}
				mysqli_stmt_close($stmt);
				mysqli_close($conn);

				$_SESSION['payment_amount']=$ticket_price;


				echo "<hr style='margin-right:900px; margin-left: 50px'>";
				echo "<table cellpadding=\"5\" style='margin-left: 50px'>";
				echo "<tr>";
				echo "<td class=\"fix_table\"><strong>Total:</strong></td>";
				echo "<td class=\"fix_table\">&#x20b9; ".$ticket_price."</td>";
				echo "</tr>";
				echo "</table>";
				echo "<hr style='margin-right:900px; margin-left: 50px'>";
				echo "<br>";
				echo "<p style=\"margin-left:50px\">Your Payment/Transaction ID is <strong>".$paymentID.".</strong> Please note it down for future reference.</p>";
				echo "<br>";
			?>
			<table cellpadding="5" style='margin-left: 50px'>
				<tr>
					<td class="fix_table"><strong>Enter the Payment Mode:-</strong></td>
				</tr>
				<tr>
					<td class="fix_table"><i aria-hidden="true"></i> Credit Card <input type="radio" name="payment_mode" value="credit card" checked></td>
					<td class="fix_table"><i aria-hidden="true"></i> Debit Card <input type="radio" name="payment_mode" value="debit card"></td>
					<td class="fix_table"><i aria-hidden="true"></i> Net Banking <input type="radio" name="payment_mode" value="net banking"></td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Pay Now" name="Pay_Now">
		</form>

	</body>
</html>
