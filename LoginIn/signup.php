<?php  

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "qhostelcleaning";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed"  .$conn->$connection_error);
}
if(isset($_POST['btn-submit'])){
$username = $_POST["username"];
$rollno = $_POST["rollno"];
$roomno = $_POST["roomno"];
$email = $_POST["email"];
$pd = $_POST["pd"];
$security_ans=$_POST["security_ans"];
$salt = "fhgy45f";
$password_encrypted = md5($pd.$salt);

$sql = "INSERT INTO signup(username, rollno, roomno, email, pd,security_ans) 
VALUES ('$username','$rollno','$roomno', '$email', '$password_encrypted','$security_ans')";
if($conn->query($sql) === TRUE)  {
    $message="Your details have been saved!!!";
    echo"<script>alert('$message');window.location.href = 'signlog.html';</script>" ;    
   
} 
  else{
    function function_alert($message) { 
    echo "<script>alert('$message');</script>";     }
    function_alert("Sorry !!! you details are not saved");
}
}
?>




















