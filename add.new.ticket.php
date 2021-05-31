<?php
include_once 'header.php';
?>
<html>

<head>
	<link rel="stylesheet" href="./css/master-bookings.css">
	<title>Add ticket details</title>
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
				if(isset($_POST['Submit']))
				{
					$ticketID=rand(1000000,9999999);
					$date_of_res=date("Y-m-d");
					$flightID=$_SESSION['flightID'];
					$departure_date=$_SESSION['departure_date'];
					$class=$_SESSION['class'];

					$_SESSION['ticketID']=$ticketID;

					$paymentID=NULL;
					$userID=$_SESSION['userid'];

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

					$query="INSERT INTO tickets (ticketID,date_of_reservation,flightID,class,userID) VALUES (?,?,?,?,?)";
					$stmt=mysqli_prepare($conn,$query);
					mysqli_stmt_bind_param($stmt,"sssss",$ticketID,$date_of_res,$flightID,$class,$userID);
					mysqli_stmt_execute($stmt);
					$affected_rows=mysqli_stmt_affected_rows($stmt);
					echo $affected_rows.'<br>';
					// mysqli_stmt_bind_result($stmt,$cnt);
					// mysqli_stmt_fetch($stmt);
					// echo $cnt;
					/*
					$response=@mysqli_query($dbc,$query);
					*/
					if($affected_rows==1)
					{
						echo "Successfully Submitted<br>";
					}
					else
					{
						echo "Submit Error";
						echo mysqli_error();
					}

	        $age = $_POST['pass_age'];
	        $iin = $_POST['pass_iin'];
	        $document = $_POST['pass_document'];

						$query="INSERT INTO passengers (userID,age,IIN,documentNumber,ticketID) VALUES (?,?,?,?,?)";
						$stmt=mysqli_prepare($conn,$query);
						mysqli_stmt_bind_param($stmt,"sssss",$userID,$age,$iin,$document, $ticketID);
						mysqli_stmt_execute($stmt);
						$affected_rows=mysqli_stmt_affected_rows($stmt);
						echo 'Passenger added '.$affected_rows.'<br>';
	          if($affected_rows==1)
	  				{
	  					echo "Successfully added<br>";
	  				}
	  				else
	  				{
	  					echo "Submit Error";
	  					echo mysqli_error();
	  				}
					mysqli_stmt_close($stmt);
					mysqli_close($conn);

					header("location: payment.details.php");
				}
				else
				{
					echo "Submit request not received";
				}
			?>
		</div>
	</main>




		<?php
					include_once 'footer.php';
			?>
