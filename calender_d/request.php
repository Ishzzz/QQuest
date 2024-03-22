<?php
 require_once 'config.php';

   
 if ($_SERVER['REQUEST_METHOD'] == "POST"){


  $Room_Number =( $_POST['Room_Number']);
  $Start_time = ($_POST['Start_time']);
  $End_time = ($_POST['End_time']);
//   $curr_date=date('j');
  $current_date = date('j'); // get the current day of the month as an integer

  // determine if the room is odd or even
  $is_odd_room = ($Room_Number % 2) == 0;
  $is_even_room = !$is_odd_room;
  
  // determine if the current date is odd or even
  $is_odd_date = ($current_date % 2) == 0;
  $is_even_date = !$is_odd_date;
  
  // insert record into the table if the conditions are met
  if (($is_even_room && $is_even_date) || ($is_odd_room && $is_odd_date)) {
      // prepare SQL statement
      $sql = $conn->prepare("INSERT INTO request(Room_Number, Start_time, End_time) VALUES ('$Room_Number', '$Start_time', '$End_time')");
    //   $stmt->bind_param("i", $room_number);
    
  $message="Request Made Successfully";
  
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


<html > 

     
  <body>
  <head>
    <title>REQUEST FORM | QQUEST</title>
  <link rel="icon" type="image/x-icon" href="favi.png">
  <link rel="stylesheet"  href="style_form.css">
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
  <div class="container">
     
  <div class="right">
        
        <div class="events"></div>
        <div class="add-event-wrapper">
          <!-- <div class="add-event-header">
            <div class="title">Add Event</div>
            <i class="fas fa-times close"></i>
          </div> -->
          <div class="add-event-body"> 
    <form action="" method="post" enctype="multipart/form-data"> 
   
	<!-- Create Form -->
	<form  >
    <!-- <div  class="container">                                class for making the box -->
        
    <img  src="../html/tiny.png" width=200px height=150px > 
    <BR>
    
    <div class="add-event-input">
    
    <label class="para"> <b>Room Number</b> </label>
                <input type="number" name="Room_Number" placeholder="Room Number" class="event-name" required />
              </div>
              <label class="para"> <b>Start Time</b> </label>
              <div class="add-event-input">
                <input type="time" name="Start_time" placeholder="Start Time" class="event-time-from" required />
              </div>
              <label class="para"> <b>End Time</b> </label>
              <div class="add-event-input">
                <input type="time" name="End_time" placeholder="End Time" class="event-time-to" required />
              </div>
	
          
		</div>
    <br><br>
<!-- HTML !-->
<!-- <button class="" role="button">Button 54</button> -->

<!-- HTML !-->
<!-- <button class="button-89" role="button">Button 89</button> -->
	<center><button class="button-50" type="submit" name="submit"><a href="index.php"><b>ADD EVENT </b></a></button></center>
	
    <!-- <div class="add-event-footer">
            <button class="add-event-btn">Add Event</button>
          </div>
        </div>
      </div> -->
   
    </div>
    <script src="script.js"></script></form>
  </body>
  </html>

