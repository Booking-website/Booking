<?php
		include_once 'header.php';
?>
		<?php
			if(isset($_POST['Cancel_Ticket']))
			{
				$data_missing=array();
				if(empty($_POST['ticketID']))
				{
					$data_missing[]='Ticket ID';
				}
				else
				{
					$ticketID=trim($_POST['ticketID']);
				}

				if(empty($data_missing))
				{
					require_once('./includes/dbh.inc.php');

					$userID=$_SESSION['userid'];

					$query="SELECT count(*), class, flightID from tickets WHERE ticketID=?";
					$stmt=mysqli_prepare($conn,$query);
					mysqli_stmt_bind_param($stmt,"s",$ticketID);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_bind_result($stmt,$cnt, $class, $flightID);
					mysqli_stmt_fetch($stmt);
					mysqli_stmt_close($stmt);
					if($cnt!=1)
					{
						mysqli_close($conn);
						header("location: cancel.booked.tickets.php?msg=failed");
					}
          else if($class=='economy')
          {
            $query="UPDATE flights SET seats_economy=seats_economy+1 WHERE flightID=?";
            $stmt=mysqli_prepare($conn,$query);
            mysqli_stmt_bind_param($stmt,"s", $flightID);
            mysqli_stmt_execute($stmt);
            $affected_rows=mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
          }
          else if($class=='business')
          {
            $query="UPDATE flights SET seats_business=seats_business+1 WHERE flightID=?";
            $stmt=mysqli_prepare($conn,$query);
            mysqli_stmt_bind_param($stmt,"s", $flightID);
            mysqli_stmt_execute($stmt);
            $affected_rows=mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
          }
					if($affected_rows==1)
						{
              $query="DELETE FROM tickets WHERE ticketID=? and userID=?";
    					$stmt=mysqli_prepare($conn,$query);
    					mysqli_stmt_bind_param($stmt,"ss",$ticketID,$userID);
    					mysqli_stmt_execute($stmt);
    					mysqli_stmt_close($stmt);
              echo "<h3>Cancelled successfully!</h3>";
						}
					else
					{
						echo "Submit Error";
						echo mysqli_error();
						header("location: ../cancel.booked.tickets.php?msg=failed");
					}
					mysqli_close($conn);
        }
				else
				{
					echo "The following data fields were empty! <br>";
					foreach($data_missing as $missing)
					{
						echo $missing ."<br>";
					}
				}
      }
			else
			{
				echo "Cancel request not received";
			}
		?>
<?php
include_once 'footer.php';
 ?>
