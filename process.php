<?php
$date = filter_input(INPUT_POST, 'date');
$timezoneid = filter_input(INPUT_POST, 'timezoneid');
$slot = filter_input(INPUT_POST, 'slot');
$FirstName = filter_input(INPUT_POST, 'FirstName');
$LastName = filter_input(INPUT_POST, 'LastName');
$Email = filter_input(INPUT_POST, 'Email');
$Languages = filter_input(INPUT_POST, 'Languages');
$countryCode = filter_input(INPUT_POST, 'countryCode');
$Phone = filter_input(INPUT_POST, 'Phone');
$age = filter_input(INPUT_POST, 'age');
$Gender = filter_input(INPUT_POST, 'Gender');
$optional = filter_input(INPUT_POST, 'optional');
$opt = filter_input(INPUT_POST, 'opt');
if (!empty($date) || !empty($timezoneid) || !empty($slot) || empty($FirstName) || !empty($Email)|| !empty($Languages)){

$host = "healthmatch-server.mysql.database.azure.com";
$dbusername = "HEALTHMATCH@healthmatch-server";
$dbpassword = "Hackathon2020";
$dbname = "volunteerweb";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO uservolunteer (date, timezoneid, slot, FirstName, LastName, Email,Languages, countryCode,Phone, age,Gender,optional, opt )
values ('$date','$timezoneid','$slot','$FirstName','$LastName','$Email','$Languages' ,'$countryCode', '$Phone', '$age', '$Gender', '$optional', '$opt')";
if ($conn->query($sql)){
header("Location: confirm.php");
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "please enter your name , email, date and timeslot with timezone";
die();
}
