<?php
	include_once 'header.php';
?>

<head>
	<link rel="stylesheet" href="../css/master-bookings.css">
	<title>Submit Payment Details</title>
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

<main class="main">
	<div class="container">
		<?php
			if(isset($_POST['Pay_Now'])) {
				$flightID=$_SESSION['flightID'];
				$departure_date=$_SESSION['departure_date'];
				$class=$_SESSION['class'];
				$ticketID=$_SESSION['ticketID'];
				$paymentID=$_SESSION['paymentID'];
				$payment_amount=$_SESSION['payment_amount'];
				$payment_date=$_SESSION['payment_date'];
				$payment_mode=$_POST['payment_mode'];
        $count = 1;

				require_once('./dbh.inc.php');

				if($class=='economy') {
					$query="UPDATE flights SET seats_economy=seats_economy-? WHERE flightID=? AND departure_date=?";
					$stmt=mysqli_prepare($conn,$query);
					mysqli_stmt_bind_param($stmt,"iss",$count,$flightID,$departure_date);
					mysqli_stmt_execute($stmt);
					$affected_rows_1=mysqli_stmt_affected_rows($stmt);
					echo $affected_rows_1.'<br>';
					mysqli_stmt_close($stmt);
				} else if($class=='business') {
					$query="UPDATE flights SET seats_business=seats_business-? WHERE flightID=? AND departure_date=?";
          $stmt=mysqli_prepare($conn,$query);
					mysqli_stmt_bind_param($stmt,"iss",$count,$flightID,$departure_date);
					mysqli_stmt_execute($stmt);
					$affected_rows_1=mysqli_stmt_affected_rows($stmt);
					echo $affected_rows_1.'<br>';
					mysqli_stmt_close($stmt);
				}
				if($affected_rows_1==1) {
					echo "Successfully Updated Seats<br>";

					$query="INSERT INTO payment (paymentID,ticketID,payment_date,payment_amount,payment_mode) VALUES (?,?,?,?,?)";
					$stmt=mysqli_prepare($conn,$query);
					mysqli_stmt_bind_param($stmt,"sssis",$paymentID,$ticketID,$payment_date,$payment_amount,$payment_mode);
					mysqli_stmt_execute($stmt);
					$affected_rows_2=mysqli_stmt_affected_rows($stmt);
					echo $affected_rows_2.'<br>';
					mysqli_stmt_close($stmt);

					if($affected_rows_2==1) {
						echo "Successfully Updated Payment Details<br>";
						header('location:../php/success.php');
					} else {
						echo "Submit Error";
						echo mysqli_error();
					}
				} else {
					echo "Submit Error";
					echo mysqli_error();
				}
				mysqli_close($conn);
			} else {
				echo "Payment request not received";
			}
		?>
	</div>
</main>

<?php
  include_once 'footer.php';
?>
