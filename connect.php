<?php

session_start();
     $date= $_POST['date'];
     $timeZoneId = $_POST['timeZoneId'];
     $slot = $_POST['slot'];
    
     $email = $_POST['email'];


     $conn = new mysqli("healthmatch-server.mysql.database.azure.com","HEALTHMATCH@healthmatch-server","Hackathon2020","slotbooking");
     if($conn->connect_error)
     {
       die('connection failed :' .$conn->connect_error);

     }
     else

     {
       $stmt = $conn->prepare("insert into volunteerweb(date, timeZoneId, slot, email)
       values(?, ?, ?, ?, ?)");

      $b=implode(",",$slot);
      $w=implode(",",$Languages);
       $stmt->bind_param("ssss",$date,$timeZoneId, $b,  $email);
       $stmt->execute();
       echo "slot booked";
      header("Location:submitted.php");
       $stmt->close();
       $conn->close();

     }

 ?>
