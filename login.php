<?php
session_start();

  $email = $_POST['email'];
  $password = $_POST['password'];



  $con = new mysqli("localhost","root","root","volunteerweb");
  if($con->connect_error){

    die("Failed to connect :".$con->connect_error);
  }
  else{
    $stmt = $con->prepare("SELECT * FROM login WHERE email= ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result ->num_rows > 0){
      $data = $stmt_result->fetch_assoc();
      if($data['pasword'] === $password)
    {   $_SESSION["user"]=$email;
        echo "<h2>LOGIN SUCCESSS</h2>";
        header('Location:dashboard.php');
      }
     else{
     echo "<script>alert('Invalid Email or Password!');</script>";
    }}
    else{
   echo "<script>alert('Invalid Email or Password!');</script>";
    }

  }

?>
