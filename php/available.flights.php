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

<main class="main" id="main">
  <div class="container">
    <?php
      if(isset($_POST['search'])) {
        $data_missing=array();
        if(empty($_POST['from_city'])) {
          $data_missing[]='From city';
        } else {
          $from_city=$_POST['from_city'];
        }

        if(empty($_POST['to_city'])) {
          $data_missing[]='To city';
        } else {
          $to_city=$_POST['to_city'];
        }

        if(empty($_POST['from_date'])) {
          $data_missing[]='Departure Date';
        } else {
          $from_date=trim($_POST['from_date']);
        }

        if(empty($_POST['class'])) {
          $data_missing[]='Class';
        } else {
          $class=trim($_POST['class']);
        }

        if(empty($data_missing)) {
          $_SESSION['class']=$class;
          $_SESSION['departure_date']=$from_date;
          $count = 1;
          require_once('../includes/dbh.inc.php');

          if($class=="economy") {
            $query="SELECT flightID,from_city,to_city,departure_date,departure_time,arrival_date,arrival_time,price_economy FROM flights where from_city=? and to_city=? and departure_date=? and seats_economy>=? ORDER BY  departure_time";
            $stmt=mysqli_prepare($conn,$query);
            mysqli_stmt_bind_param($stmt,"sssi",$from_city,$to_city,$from_date,$count);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt,$flightID,$from_city,$to_city,$departure_date,$departure_time,$arrival_date,$arrival_time,$price_economy);
            mysqli_stmt_store_result($stmt);

            if(mysqli_stmt_num_rows($stmt)==0) {
              echo "<h3><i class=\"fa fa-times\"></i> Sorry, no flights are available!</h3>
              <p>
        				<a href=\"./index.php\"><i class=\"fa fa-home\"></i> Go Home</a>
        			</p>";
            } else {
              echo "<form class=\"availableFlightsForm\" action=\"passenger.details.php\" method=\"post\">";
              echo "<table class = \"table\" cellpadding=\"10\">";
              echo "<tr><th>Flight No.</th>
              <th>Origin</th>
              <th>Destination</th>
              <th>Departure Date</th>
              <th>Departure Time</th>
              <th>Arrival Date</th>
              <th>Arrival Time</th>
              <th>Price (Economy)</th>
              <th>Select</th>
              </tr>";

              while(mysqli_stmt_fetch($stmt)) {
                    echo "<tr>
                    <td>".$flightID."</td>
                    <td>".$from_city."</td>
                <td>".$to_city."</td>
                <td>".$departure_date."</td>
                <td>".$departure_time."</td>
                <td>".$arrival_date."</td>
                <td>".$arrival_time."</td>
                <td>&#x20b9; ".$price_economy."</td>
                <td><input type=\"radio\" name=\"select_flight\" value=\"".$flightID."\"></td>
                    </tr>";
              }

              echo "</table> <br>";
              echo "<input type=\"submit\" value=\"Select Flight\" name=\"Select\">";
              echo "</form>";
            }
          } else if($class="business") {
            $query="SELECT flightID,from_city,to_city,departure_date,departure_time,arrival_date,arrival_time,price_business FROM flights where from_city=? and to_city=? and departure_date=? and seats_business>=? ORDER BY departure_time";
            $stmt=mysqli_prepare($conn,$query);
            mysqli_stmt_bind_param($stmt,"sssi",$from_city,$to_city,$from_date,$count);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt,$flightID,$from_city,$to_city,$departure_date,$departure_time,$arrival_date,$arrival_time,$price_business);
            mysqli_stmt_store_result($stmt);

            if(mysqli_stmt_num_rows($stmt)==0) {
              echo "<h3>No flights are available !</h3>";
            } else {
              echo "<form action=\"passenger.details.php\" method=\"post\">";
              echo "<table class = 'table availableFlights' cellpadding=\"10\">";
              echo "<tr><th>Flight No.</th>
              <th>Origin</th>
              <th>Destination</th>
              <th>Departure Date</th>
              <th>Departure Time</th>
              <th>Arrival Date</th>
              <th>Arrival Time</th>
              <th>Price (Business)</th>
              <th>Select</th>
              </tr>";

              while(mysqli_stmt_fetch($stmt)) {
                echo "<tr>
                <td>".$flightID."</td>
                <td>".$from_city."</td>
                <td>".$to_city."</td>
                <td>".$departure_date."</td>
                <td>".$departure_time."</td>
                <td>".$arrival_date."</td>
                <td>".$arrival_time."</td>
                <td>&#x20b9; ".$price_business."</td>
                <td><input type=\"radio\" name=\"select_flight\" value=".$flightID."></td>
                </tr>";
              }

              echo "</table> <br>";
              echo "<input type=\"submit\" value=\"Select Flight\" name=\"Select\">";
              echo "</form>";
            }
          }

          mysqli_stmt_close($stmt);
          mysqli_close($conn);
        } else {
          echo "The following data fields were empty! <br>";

          foreach($data_missing as $missing) {
            echo $missing ."<br>";
          }
        }
      } else {
        echo "Search request not received";
      }
    ?>
  </div>
</main>

<?php
  include_once 'footer.php';
?>
