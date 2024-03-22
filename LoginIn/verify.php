<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "qhostelcleaning";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("connection failed");
}

if(isset($_POST['btn-continue']) && $_POST['email'] && $_POST['security_ans']){

    $email=$_POST['email'];
    $security_ans=$_POST['security_ans'];

    session_start();
    $_SESSION['email'] = $email;


    $select=mysqli_query($conn,"SELECT email,security_ans FROM signup WHERE email='$email' and security_ans='$security_ans'");
    if(mysqli_num_rows($select)==1)
    {
            function function_alert($message) { 
            echo "<script>alert('$message');</script>";     }
            function_alert("Verified");
         
        ?>
                <!DOCTYPE html>
                    <html>
                    <head>
                        <title>Reset Password</title>
                        <link rel="icon" type="image/x-icon" href="favi.png">
                        <link rel="stylesheet" type="text/css" href="signlog-style.css">
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                    </head>
                    <body>

                    <div class="for_pass">
                        <div class="forgot-pass-container">
                            <form action="reset_pass.php" class="new-pass-container" method="POST">
                                <left><h1>Reset Password</h1></left><br>
                                <p style="margin-bottom: 5px;"><left>Enter New Password</left></p>
                                <input type="password" name="pd" placeholder="New Password" required="">
                                <input type="password" name="pd_1" placeholder="Confirm Password" required=""><br>
                                <button  type="submit" name="btn-submit1">Submit</button>
                                <div><br><br><br><br></div>
                            </form>
                        </div>
                    </div>
                    </body>
                    </html>


        <?php
    }
    else{
        function function_alert($message) { 
            echo "<script>alert('$message');</script>";     }
            function_alert("Verification Unsuccesful!");
    }
    }
?>



