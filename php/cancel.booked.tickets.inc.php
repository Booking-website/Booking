<?php
	include_once 'header.php';
?>

<head>
  <!--  Style -->
  <link rel="stylesheet" href="../css/master-bookings.css">
  <title>Available Flights</title>
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
			if(isset($_POST['Cancel_Ticket'])) {
				$data_missing=array();
				if(empty($_POST['ticketID'])) {
					$data_missing[]='Ticket ID';
				} else {
					$ticketID=trim($_POST['ticketID']);
				}

				if(empty($data_missing)) {
					require_once('../includes/dbh.inc.php');

					$userID=$_SESSION['userid'];

					$query="SELECT count(*), class, flightID from tickets WHERE ticketID=?";
					$stmt=mysqli_prepare($conn,$query);
					mysqli_stmt_bind_param($stmt,"s",$ticketID);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_bind_result($stmt,$cnt, $class, $flightID);
					mysqli_stmt_fetch($stmt);
					mysqli_stmt_close($stmt);

					if($cnt!=1) {
						mysqli_close($conn);
						header("location: cancel.booked.tickets.php?msg=failed");
					}
					$query="UPDATE tickets SET booking_status='CANCELED' WHERE ticketID=? and userID=?";
					$stmt=mysqli_prepare($conn,$query);
					mysqli_stmt_bind_param($stmt,"ss",$ticketID,$userID);
					mysqli_stmt_execute($stmt);
					$affected_rows=mysqli_stmt_affected_rows($stmt);
					mysqli_stmt_close($stmt);
					if($affected_rows==1)
					{
					 if($class=='economy') {
            $query="UPDATE flights SET seats_economy=seats_economy+1 WHERE flightID=?";
            $stmt=mysqli_prepare($conn,$query);
            mysqli_stmt_bind_param($stmt,"s", $flightID);
            mysqli_stmt_execute($stmt);
            $affected_rows_1=mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
          } else if($class=='business') {
            $query="UPDATE flights SET seats_business=seats_business+1 WHERE flightID=?";
            $stmt=mysqli_prepare($conn,$query);
            mysqli_stmt_bind_param($stmt,"s", $flightID);
            mysqli_stmt_execute($stmt);
            $affected_rows_1=mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
          }
					if($affected_rows_1==1) {
            echo "
							<h3>Cancelled successfully!</h3>
							<p>
								<a href=\"./index.php\">
									<i class=\"fa fa-home\"></i> Go Home
								</a>
							</p>
						";
					}
				} else {
						echo "Submit Error";
						echo mysqli_error();
						header("location: ./cancel.booked.tickets.php?msg=failed");
					}
					mysqli_close($conn);
      	} else {
					echo "The following data fields were empty! <br>";
					foreach($data_missing as $missing) {
						echo $missing ."<br>";
					}
				}
      } else {
				echo "Cancel request not received";
			}
			?>
		</div>
	</main>

<?php
	include_once 'footer.php';
?>
