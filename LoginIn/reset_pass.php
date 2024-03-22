<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qhostelcleaning";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

include 'verify.php';

if (isset($_POST['btn-submit1']) && $_POST['pd'] && $_POST['pd_1']) {

    session_start();
    $email = $_SESSION['email'];

    
    $pass = $_POST['pd'];
    $pass_1 = $_POST['pd_1'];
    if ($pass == $pass_1) {
        $salt = "fhgy45f";
        $pass=md5($pass.$salt);
        mysqli_query($conn, "UPDATE signup SET pd='$pass' WHERE email ='$email'");
        $message = "Password changed succesfully!";
        echo "<script>alert('$message'); window.location.href='signlog.html';</script>";
        exit();
    }
    else{
        $message = "Passwords don't match!";
        echo "<script>alert('$message'); window.location.href='reset_pass.php';</script>";
        exit();
    }

}
?>
