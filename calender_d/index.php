<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve events from database
$sql = "SELECT * FROM request";
$result = $conn->query($sql);

// Prepare events for display in calendar
$events = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $event = array(
            "Room_Number" => $row["Room_Number"],
            "Start_time" => $row["Start_time"],
            "End_time" => $row["End_time"],
           
        );
        array_push($events, $event);
    }
}

// Display calendar
echo "<div id='calendar'></div>";
?>

<script>
$(document).ready(function() {
    // Initialize calendar
    $('#calendar').fullCalendar({
        events: <?php echo json_encode($events); ?>
    });
});
</script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD EVENT | QQUEST </title>
    <link rel="icon" type="image/ico" href="favi.png">
    <link rel="stylesheet" href="style_calendar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  </head>
 
    <header>
    <a href="#" class="brand">QQUEST</a>
      <!-- <div class="menu-btn"></div> -->
      <div class="navigation">
        <div class="navigation-items">
          <ul>  
            <li><a href="../html/index.html" class="nav-bar">Home</a></li>
            <li><a href="../calender_d/index.php" class="nav-bar">Make Request</a></li>
            <li><a href="../status/stat.php" class="nav-bar">Status</a></li>
            <li><a href="../SignUp/SignUp/editprofile.php" class="nav-bar">Profile</a>
                    <ul class="submenu-1">
                        <li><a href="../LoginIn/forgotpass.html">Forgot Password</a></li>
                        <li><a href="../LoginIn/logout.php">Logout</a></li>
                    </ul>
                </li>
          </ul>
        </div>
    </div>
    </header>
      
    

      
      <div class="slider-navigation">
        <div class="nav-btn active"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
      </div>
    </section>

    <script type="text/javascript">
    //Javacript for responsive navigation menu
    const menuBtn = document.querySelector(".menu-btn");
    const navigation = document.querySelector(".navigation");

    // menuBtn.addEventListener("click", () => {
    //   menuBtn.classList.toggle("active");
    //   navigation.classList.toggle("active");
    // });

    //Javacript for video slider navigation
    const btns = document.querySelectorAll(".nav-btn");
    const slides = document.querySelectorAll(".video-slide");
    const contents = document.querySelectorAll(".content");

    var sliderNav = function(manual){
      btns.forEach((btn) => {
        btn.classList.remove("active");
      });

      slides.forEach((slide) => {
        slide.classList.remove("active");
      });

      contents.forEach((content) => {
        content.classList.remove("active");
      });

      btns[manual].classList.add("active");
      slides[manual].classList.add("active");
      contents[manual].classList.add("active");
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        sliderNav(i);
      });
    });
    </script>

  </body>
</html>
      
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Stay organized with our user-friendly Calendar featuring events, reminders, and a customizable interface. Built with HTML, CSS, and JavaScript. Start scheduling today!"
    />
    <meta
      name="keywords"
      content="calendar, events, reminders, javascript, html, css, open source coding"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Calendar with Events</title>
  </head>
  <body>
    <div class="container">
      <div class="left">
        <div class="calendar">
          <div class="month">
            <i class="fas fa-angle-left prev"></i>
            <div class="date">december 2015</div>
            <i class="fas fa-angle-right next"></i>
          </div>
          <div class="weekdays">
            <div>Sun</div>
            <div>Mon</div>
            <div>Tue</div>
            <div>Wed</div>
            <div>Thu</div>
            <div>Fri</div>
            <div>Sat</div>
          </div>
          <div class="days"></div>
          <div class="goto-today">
            <div class="goto">
              <input type="text" placeholder="mm/yyyy" class="date-input" />
              <button class="goto-btn">Go</button>
            </div>
            <button class="today-btn">Today</button>
          </div>
        </div>
      </div>
      <div class="right">
        <div class="today-date">
          <div class="event-day">wed</div>
          <div class="event-date">12th december 2022</div>
        </div>
        <div class="events"></div>
        <div class="add-event-wrapper">
       
        </div>
      </div>
      <a href="request.php">
      <button class="add-event" >
        <i class="fas fa-plus" ></i>
        
      </button>
  </a>
    </div>

    <script src="script.js"></script>
  </body>
</html>
