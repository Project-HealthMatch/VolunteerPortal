<?php
session_start();


$con = new mysqli("healthmatch-server.mysql.database.azure.com","HEALTHMATCH@healthmatch-server","Hackathon2020","volunteerweb");
if (isset($_POST['submit'])){

  $email = $_POST['email'];
  $password = $_POST['password'];
  $new= $_POST['new'];
  $conf = $_POST['conf'];

  if($new == $conf){
    echo "Passwords match.";
  }
  else {
    die('password dont match');
  }



  $email_search = " select * from login where email= '$email'";
  $query = mysqli_query($con,$email_search);

  $email_count = mysqli_num_rows($query);




      if($email_count){

        $email_pass = mysqli_fetch_assoc($query);
        $db_pass = $email_pass['pasword'];



 $sql = "UPDATE login SET pasword ='$new' WHERE email='$email'";
if(mysqli_query($con, $sql)){
   echo '<script>alert("Password Update Successfully!")</script>'; 

} else {
    echo "ERROR: new passwords dont match $sql. " . mysqli_error($con);
}

// Close connection
mysqli_close($con);



         }
     else{
       echo '<script>alert("Old Password is incorrect!")</script>'; 
            }}
    else{
  echo '<script>alert("Invalid username!")</script>'; 
    }



?>
