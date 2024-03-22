<?php
 require_once 'config.php';

   
 if ($_SERVER['REQUEST_METHOD'] == "POST"){


  $Room_Number =( $_POST['Room']);
 
  $Start_time = ($_POST['Start_time']);
  $End_time = ($_POST['End_time']);
   $feed =( $_POST['Feedback']);
//   $curr_date=date('j');
  $current_date = date('j'); // get the current day of the month as an integer

  // determine if the room is odd or even
  $is_odd_room = ($Room_Number % 2) == 1;
  $is_even_room = !$is_odd_room;
  
  // determine if the current date is odd or even
  $is_odd_date = ($current_date % 2) == 1;
  $is_even_date = !$is_odd_date;
  
  // insert record into the table if the conditions are met
  if (($is_even_room && $is_even_date) || ($is_odd_room && $is_odd_date)) {
      // prepare SQL statement
      $sql = $conn->prepare("INSERT INTO feedback(Room,Feedback, Start_time, End_time) VALUES ('$Room_Number','$feed', '$Start_time', '$End_time')");
    //   $stmt->bind_param("i", $room_number);
    
  $message="Feedback sent successfully";
  
      // execute SQL statement
      if ($sql->execute() === TRUE) {
        echo "<script>alert('$message');window.location.href = '../html/index.html';</script>";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->$error;
      }
  } else {
    echo "<script>alert('you cant add room today');window.location.href = '../html/index.html';</script>";
  }
  
  // close the database connection
//   $stmt->close();
//   $conn->close();

 }

 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Requests</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Tokyo+Zoo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="status-style.css">
    
</head>
<header>
      <a href="#" class="brand">QQUEST</a>
      <div class="menu-btn"></div>
      <div class="navigation">
        <div class="navigation-items">
          <ul>  
            <li><a href="../html/index.html" class="nav-bar">Home</a></li>
            <li><a href="../calender_d/index.php" class="nav-bar">Make Request</a></li>
            <li><a href="../status/stat.php" class="nav-bar">Status</a></li>
            <li><a href="#" class="nav-bar">Profile</a>
                    <ul class="submenu-1">
                        <li><a href="../LoginIn/forgotpass.html">Forgot Password</a></li>
                        <li><a href="../LoginIn/logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
      </div>
</header>
<body>
	<div class="box"><div class="panel-container" id="panel">
		<h1>STATUS</h1>
		<img src="download.jpeg">
		<br>
		<span>
		<a class="NotCleaned" href="#divOne">Not Cleaned</a>
		<a class="Cleaned" href="../html/index.html">Cleaned</a>
		</span>
		</div>
	</div>
	<div class="overlay" id="divOne">
		<div class="wrapper">
			<h2>Please Give Details</h2><a class="close" href="#">&times;</a>
			<div class="content">
				<div class="container">
					<form action="" method="post" enctype="multipart/form-data">
                       
						<label>Room Number</label><br>
						<input name="Room" placeholder="Room" type="number" required=""><br><br>
						<label>Starting Time Slot</label><br>
						<input name="Start_time" placeholder="starttimeslot" type="time" required=""><br><br>
						<label>Ending Time Slot</label><br> 
						<input name="End_time" placeholder="endtimeslot" type="time" required=""><br><br>
						<label>Feedback</label><br>
						<textarea name="Feedback" rows="4" cols="50" required=""></textarea><br><br>
						<center><input type="submit" value="Submit"></center>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>