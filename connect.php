<?php

session_start();
     $date= $_POST['date'];
     $timeZoneId = $_POST['timeZoneId'];
     $slot = $_POST['slot'];
     $Languages = $_POST['Languages'];
     $email = $_POST['email'];


     $conn = new mysqli("healthmatch-server.mysql.database.azure.com","HEALTHMATCH@healthmatch-server","Hackathon2020","volunteerweb");
     if($conn->connect_error)
     {
       die('connection failed :' .$conn->connect_error);

     }
     else

     {
       $stmt = $conn->prepare("insert into volunteerweb(date, timeZoneId, slot, Languages, email)
       values(?, ?, ?, ?, ?)");

      $b=implode(",",$slot);
      $w=implode(",",$Languages);
       $stmt->bind_param("sssss",$date,$timeZoneId, $b, $w, $email);
       $stmt->execute();
       echo "slot booked";
      header("Location:submitted.php");
       $stmt->close();
       $conn->close();

     }

 ?>
