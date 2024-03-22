<html >
<head>
        <title>FeedBack|QQUEST</title>
<link rel="stylesheet" type="text/css" href="Style_tab.css">
<link rel="icon" type="image/x-icon" href="../html/favi.png">
    </head>
<body>
    <header>
      <a href="#" class="brand">QQUEST</a>
      <div class="menu-btn"></div>
      <div class="navigation">
        <div class="navigation-items">
        <ul>  
            <li><a href="sup-homepage.html" class="nav-bar">Home</a></li>
            <li><a href="view_requests.php" class="nav-bar">View Request</a></li>
            <li><a href="feed.php" class="nav-bar">View Feedback</a></li>
            <li><a href="#" class="nav-bar">Profile</a>
                    <ul class="submenu-1">
                        <!-- <li><a href="../LoginIn/forgotpass.html">Forgot Password</a></li> -->
                        <li><a href="../LoginIn/logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        
        </div>
      </div>
    </header>

  <br><br><br> <br>
   
    <script>
    function fun(){
        location.replace("delete1.php");
    }
    </script>
  <bR><br>	<bR><br>
   
        <div>
            <head>
        <style>
          
        #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse:collapse;
  margin-left: auto;
  margin-right: auto;
  width: 70%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
  
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: midnightblue;
  color: white;
  text-align: center;
}

</style>
</head>
<body>



<table id="customers">
<thead class="tablehead" >
            <tr style= "background-color: white;">
              
            <th>ID</th>
            <th >Room Number</th>
            <th>FeedBack</th>
                <th>Start Time</th>
             <th>End Time</th>
             <th>Delete Request</th>
            </tr>
        </thead>
        <tbody> 
</div>
       
      

   <?php
	require_once "config.php";
    error_reporting(0);

    // <center><img  src='bin.gif'  alt='Delete' width='30' height='30'/></center>

	$sql = "SELECT * FROM feedback order by Start_time asc";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
                $ID= $ID + 1;
			$ques=$id;
        echo" <tr>
        
        <td>". $row["ID"] . "</td>
        <td>" .  $row['Room'] . "</td>
        <td>" .  $row['Feedback'] . "</td>
        <td>" .  $row["Start_time"] . "</td>
        <td>" .  $row["End_time"] . "</td>
    <td> 
     <a href='delete1.php?ID=$row[ID] ' >
     

     <center><img  src='bin.gif'  alt='Delete' width='30' height='30'/></center>
   
</a>
     
       </td>
    </tr>";

}}

?> 
</table><br>
<style>
    body{
        background-color: #4b71d0;
    }
table {
    border-collapse: collapse;
    width: 100%;
    /* border: 1; */
  }
  
  th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    color: black;
     /* background-color: aqua; */
  } 

  tr {
    background-color: #fff;
  }
  
  tr:hover {background-color:azure;}</style>
</div>
<!-- <button class="btn"><a bgcolor="white" href="../calender_d/rating.html" class="BACK">FEEDBACK</a></button> -->

</body>
</html>