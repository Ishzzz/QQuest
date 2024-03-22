<?php
$host="localhost";
$uname="root";
$pwd="";
$dbname = "qhostelcleaning";
$conn=new mysqli($host, $uname, $pwd, $dbname);
if($conn -> connect_error){
    die("connection failed:" .$conn->connect_error);
}
echo "connected succesfully";
$sql="CREATE TABLE signup(
    username VARCHAR(50) NOT NULL, 
	rollno INT(30) UNSIGNED PRIMARY KEY,
	roomno INT(3) NOT NULL,
	email VARCHAR(70)NOT NULL,
	pd VARCHAR(255) NOT NULL,
    security_ans VARCHAR(255) NOT NULL
)";
if($conn->query($sql) === TRUE){
    echo"TABLE feedback CREATED SUCCESSFULLY ";
}
else{
    echo"Error crreating TABLE" .$conn->error;
}
$conn->close();
?>