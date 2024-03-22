<?php
 require_once 'config.php';

   
 if ($_SERVER['REQUEST_METHOD'] == "POST"){
// 	$name = ($_POST['name']); 
// 	$mobileno = ($_POST['mobileno']);
// 	$email = ($_POST['email']);
//   $address = ($_POST['address']);
//   $date = ($_POST['date']);
//   $message= ($_POST['message']);
//   $choose = ($_POST['choose']);

  $Room_Number =( $_POST['Room_Number']);
  $Start_time = ($_POST['Start_time']);
  $End_time = ($_POST['End_time']);
  $sql = "INSERT INTO request(Room_Number, Start_time, End_time) VALUES ('$Room_Number', '$Start_time', '$End_time')";


	// $sql = "INSERT INTO info(name, mobileno, email, address,date,message, choose) VALUES( '$name','$mobileno','$email','$address','$date','$message','$choose')"; 
  
	$result=mysqli_query($conn,$sql);
    if ($result) {
        echo "New event added successfully";
    } 
}
?>