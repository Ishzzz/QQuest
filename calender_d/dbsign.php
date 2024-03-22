<?php
$host="localhost";
$uname="root";
$pwd="";
$dbname = "task";
$conn=new mysqli($host, $uname, $pwd, $dbname);
if($conn -> connect_error){
    die("connection failed:" .$conn->connect_error);
}
echo "connected succesfully";
$sql="CREATE TABLE added(
   Room_NUmber INT(3), 
	Start_time TIME,
	End_time TIME
)";
if($conn->query($sql) === TRUE){
    echo"TABLE feedback CREATED SUCCESSFULLY ";
}
else{
    echo"Error creating TABLE" .$conn->error;
}
$conn->close();
?>