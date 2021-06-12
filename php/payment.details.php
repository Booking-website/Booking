<?php
	include_once './header.php';
?>

<head>
	<link rel="stylesheet" href="../css/master-bookings.css">
	<title>Enter Payment Details</title>
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
		<form action="../includes/payment.details.inc.php" method="post">
			<h2>ENTER THE PAYMENT DETAILS</h2>
			<h3>
				<u>Payment Summary</u>
			</h3>
			<?php
				$flightID=$_SESSION['flightID'];
				$departure_date=$_SESSION['departure_date'];
				$paymentID=rand(100000000,999999999);
				$ticketID=$_SESSION['ticketID'];
				$_SESSION['paymentID']=$paymentID;
				$payment_date=date('Y-m-d');
				$_SESSION['payment_date']=$payment_date;

				require_once('../includes/dbh.inc.php');
				if($_SESSION['class']=='economy') {
					$query="SELECT price_economy FROM flights where flightID=? and departure_date=?";
					$stmt=mysqli_prepare($conn,$query);
					mysqli_stmt_bind_param($stmt,"ss",$flightID,$departure_date);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_bind_result($stmt,$ticket_price);
					mysqli_stmt_fetch($stmt);
				} else if($_SESSION['class']=='business') {
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

				echo "
					<hr>
					<table cellpadding=\"5\">
						<tr>
							<td class=\"fix_table\">
								<strong>Total:</strong>
							</td>
							<td class=\"fix_table\">&#x20b9; ".$ticket_price."</td>
						</tr>
					</table>
					<hr>
					<br>
					<p>
						Your Payment/Transaction ID is <strong>".$paymentID.".</strong> Please note it down for future reference.
					</p>
					<br>
				";
			?>
			<table cellpadding="5" class="table payment_table">
				<th>
					<td class="fix_table"><strong>Enter the Payment Mode:</strong></td>
				</th>
				<tr>
					<td class="fix_table">
						<i aria-hidden="true"></i> Credit Card
						<input type="radio" name="payment_mode" value="credit card" id="bank_card"/>
					</td>
					<td class="fix_table">
						<i aria-hidden="true"></i> Debit Card
						<input type="radio" name="payment_mode" value="debit card" id="debit_card"/>
					</td>
					<td class="fix_table">
						<i aria-hidden="true"></i> Net Banking
						<input type="radio" name="payment_mode" value="net banking" id="net_banking"/>
					</td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Pay Now" name="Pay_Now">
		</form>
		<div class="main__bank-card">
			<div class="main__bank-card-dropdown">
				<h3>My bank card</h3>
				<div class="wrap">
					<div class="card">
						<div class="front">
							<h3 class="bankName"><i class="fa fa-university"></i>BestBank</h3>
							<form class="bank-card" action="" method="post">
								<div class="card-number">
									<input type="number" id="card-number1" class="card-number card-number1" name="card-number1" value="" maxlength="4" min="1000" max="9999" placeholder="XXXX" required>
									<input type="number" id="card-number2" class="card-number card-number2"  name="card-number2" value="" maxlength="4" min="1000" max="9999" placeholder="XXXX" required>
									<input type="number" id="card-number3" class="card-number card-number3"  name="card-number3" value="" maxlength="4" min="1000" max="9999" placeholder="XXXX" required>
									<input type="number" id="card-number4" class="card-number card-number4"  name="card-number4" value="" maxlength="4" min="1000" max="9999" placeholder="XXXX" required>
								</div>
								<div class="card-date">
									<span class="valid">Valid thru</span>
									<input type="number" class="card-date card-date1" name="card-date1" maxlength="2" min="01" max="12" value="" placeholder="MM" required>
									<i class="fa fa-slash"></i>
									<input type="number" class="card-date card-date2" name="card-date2" maxlength="2" min="10" value="" placeholder="YY" required>
								</div>
								<div class="name-surname">
									<input type="text" name="name" value="" placeholder="Name" maxlength="15" required>
									<input type="text" name="surname" value="" placeholder="Surname" maxlength="15" required>
								</div>
							</form>
							<i class="fa fa-angle-double-right flipToBack"></i>
						</div>
						<div class="back">
							<form class="bank-card" action="" method="post">
								<div class="card-cvv">
									<input type="number" class="card-cvv" name="card-cvv" value="" placeholder="CVV" required>
								</div>
							</form>
							<i class="fa fa-angle-double-right flipToFront"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>


<?php
  include_once 'footer.php';
?>

<!-- Own JS -->
<script src="../js/creditCard.js"></script>
