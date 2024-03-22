<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "qhostelcleaning";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$email = $_POST["email"];
$pd = $_POST["pd"];
$salt = "fhgy45f";
$password_encrypted = md5($pd.$salt);


$sql = mysqli_query($conn, "SELECT count(*) as total from signup WHERE email = '".$email."' and 
	pd = '".$password_encrypted."'");

$row = mysqli_fetch_array($sql);

if($row["total"] > 0){
	if($email=="admin@thapar.edu" && $pd=="sup@12345"){
		?>
		<script>
			 
			  alert('Login Succesful, Supervisor!');window.location.href ='../table/sup-homepage.html';
		</script>
		
		<?php
		}
		else{
			?>
		<script>
			 
			  alert('Login Succesful');window.location.href = '../html/index.html';
		</script>
		
		<?php
		}
}
else{
	?>
	<script>
		alert('Login failed');window.location.href = 'signlog.html';
	</script>
	<?php
}


?>
