<?php

error_reporting(0);
$email = $_POST['email'];
$password = $_POST['password'];
$new = $_POST['new'];
$conf = $_POST['conf'];

$conn = new mysqli("healthmatch-server.mysql.database.azure.com","HEALTHMATCH@healthmatch-server","Hackathon2020","volunteerweb");

  if($conn->connect_error){

    die("Failed to connect :".$con->connect_error);
                          }
else{
    $stmt = $conn->prepare("select * from login where email= ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
       if($stmt_result ->num_rows > 0)
          {$data = $stmt_result->fetch_assoc();
      if($data['pasword'] == $password)
          {if($new == $conf)
           $sql = "UPDATE login SET pasword='$new' WHERE email='$email'";

if (mysqli_query($conn, $sql))
  {  echo '<script>alert("Password Update Successfully!")</script>';

  }
else {
echo '<script>alert("Passwords do not match")</script>';

     }

        mysqli_close($conn);
          }


    else{
      echo '<script>alert("Old Password is incorrect!")</script>';

         }
                                    }

    else{
    echo '<script>alert("Invalid username!")</script>';

        }


 }

?>
