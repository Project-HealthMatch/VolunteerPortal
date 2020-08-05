<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="signupvolunteer.css" />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      type="text/javascript"
      src="https://cdn.weglot.com/weglot.min.js"
	></script>

	 <script>
        Weglot.initialize({
          api_key: "wg_6595b397394b082513ae5269c8992a3d7",
        });
      </script>
      <style>

.topnav {
  background-color: rgb(142, 196, 221);
  overflow: hidden;
  margin-bottom: 1rem;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #000000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #032b5a;
  color: white;
}


.head{
 height:20%;
 width:100%;
 background-color: #bc94dc;
 color: white;
 padding: 0.5rem;
 text-align: center;
 font-size: 1.5rem;
}

.grid{
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-template-rows: 1fr;
}
.card {
  width:650px;
  margin-bottom: 1rem;
  border-radius: 5px;
}

form{
  padding-left: 2rem;
  padding-right: 2rem;
  width:99%;
  font-weight:600;
}

@media(min-width:900px){
  form{
    padding-left: 2rem;
    padding-right: 2rem;
    width:50%;
    font-weight:600;
  }
}

label{
  font-size: 1.2rem;
}

input{
  color: grey;
  background-color: white;
  font-size: 1rem;
}

.back{
  width: 99%;
  padding: 5rem;
  height: 700px;
  text-align:center;

  background-image: linear-gradient( rgb(255, 255, 255) 10%, rgb(204, 190, 240)100%);

  border-radius: 5px;
}

body {
    background-image: linear-gradient(-225deg, #e3fdf5 0%, #ffe6fa 100%);
  background-image: linear-gradient(to top, #d2bde4 0%, #a325dd 100%);
      background-attachment: fixed;
      background-repeat: no-repeat;

      font-family: "Vibur", cursive;
      /*   the main font */
      font-family: "Abel", sans-serif;

        background-attachment: fixed;
        background-repeat: no-repeat;

        font-family: "Vibur", cursive;
        /*   the main font */
        font-family: "Abel", sans-serif;
        margin-bottom: 1rem;
        /* background-image: linear-gradient(to top, #d9afd9 0%, #97d9e1 100%); */
      }
      .title{
        color: white;
        font-size: 2rem;
        font-weight: 600;
      }
      .cardtitle{
        font-size: 1.3rem;

      }
      .viewbtn{
        display: block;
        width: 100px;
        height: 35px;
        border-radius: 25px;
        outline: none;
        border: none;
        background-image: linear-gradient(to right, #45a29e, #5bcadd, #3292be);
        background-size: 200%;
        font-size: 1.2rem;
        color: #fff;
        font-family: "Poppins", sans-serif;
        text-transform: uppercase;
        margin: 1rem 0;
        cursor: pointer;
        transition: 0.5s;
      }
      .viewbtn:hover {
        background-position: right;
      }

      .acceptbtn{
        display: block;
        width: 150px;
        height: 35px;
        border-radius: 25px;
        outline: none;
        border: none;
       background-image: linear-gradient(to right, #745ed8, #bcb2df);
        background-size: 200%;
        font-size: 1.2rem;
        color: #fff;
        font-family: "Poppins", sans-serif;
        text-transform: uppercase;
        margin-top: 1rem;
        margin-left: 32%;
        cursor: pointer;
        transition: 0.5s;
      }
      .acceptbtn:hover {
        background-position: right;
        color:black;
      }


      i{
        margin-right:0.3rem;
      }

      form{
 margin-top:2rem;
      }

      @media(min-width:900px)
      {
     form{

       margin-left:25%;
       margin-top:5%;
     }

     .acceptbtn{
       display: block;
       width: 150px;
       height: 35px;
       border-radius: 25px;
       outline: none;
       border: none;
      background-image: linear-gradient(to right, #5ac5e6, #bcb2df);
       background-size: 200%;
       font-size: 1.2rem;
       color: #fff;
       font-family: "Poppins", sans-serif;
       text-transform: uppercase;
       margin-top: 1rem;
       margin-left: 39%;
       cursor: pointer;
       transition: 0.5s;
     }

      }

       #initiallyHiddenBlock {
          display: none;
      }
      .homebtn {
        border: 1px solid white;
        background-color: rgb(105, 223, 197);
        margin: 0.5rem;
        width: 90%;
        height: 5rem;
        font-size: 20px;
        font-family: "montserrat";
        font-weight: 600;
        cursor: pointer;
        border-radius: 5px;
        transition: 0.8s;
        position: relative;
        overflow: hidden;
        color: black;
        margin-left:1rem;
      }

      @media (min-width: 600px) {
        .homebtn {
          border: 1px solid white;
          border-radius: 5px;
          margin: 1rem;
          width: 80%;
          height: 5rem;
          font-size: 20px;
          font-family: "montserrat";
          font-weight: 600;
          cursor: pointer;
          color: black;
          background-color: rgb(105, 223, 197);
          transition: 0.8s;
          position: relative;
          overflow: hidden;
        }
      }

      .homebtn:hover {
        color: white;
        background: #51a09b;
      }


 .margin{
       margin-top: 15%;
      }
      @media(min-width:900px)
     {

       .buttongrid{

        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows: 1fr;
        margin-left: 17%;

      }
      .margin{
       margin-top: 17%;
      }
      }


</style>
<?php

session_start();
     $FirstName = $_POST['FirstName'];
     $LastName= $_POST['LastName'];
     $Timezone =  $_POST['Timezone'];
     $countryCode= $_POST['countryCode'];
     $Phone = $_POST['Phone'];
     $Email = $_POST['Email'];
     $Gender = $_POST['Gender'];
     $Languages = $_POST['Languages'];
     $PreferredContactMethod =  $_POST['PreferredContactMethod'];


     $conn = new mysqli("localhost","root","root","volunteerweb");
     if($conn->connect_error)
     {
       die('connection failed :' .$conn->connect_error);

     }
     else

     {
       $stmt = $conn->prepare("insert into uservolunteer(FirstName, LastName, Timezone, countryCode, Phone, Email, Gender, Languages, PreferredContactMethod)
       values(?, ?, ?, ?, ?, ?, ?, ?, ?)");

       $stmt->bind_param("sssssssss",$FirstName, $LastName, $Timezone, $countryCode, $Phone, $Email, $Gender, $Languages, $PreferredContactMethod);
       $stmt->execute();

              $stmt->close();
              $conn->close();


       ?> <form action=""  method="post" name="google-sheet" id="HideBlock">

      <input type="text" class="form-control"
    name = "FirstName" value = "<?php echo $_POST['FirstName'];?>" readonly>
    <br>
     <input type="text" class="form-control"
    name = "LastName" value = "<?php echo $_POST['LastName'];?>" readonly>
    <br>
     <input type="email" class="form-control"
    name = "Email" value = "<?php echo $_POST['Email'];?>" readonly>
    <br>
    <input type="text" class="form-control"
    name = "countryCode" value = "<?php echo $_POST['countryCode'];?>" readonly>
    <br>
      <input type="text" class="form-control"
    name = "Phone" value = "<?php echo $_POST['Phone'];?>" readonly>
    <br>
 <input type="text" class="form-control"
    name = "PreferredContactMethod'" value = "<?php echo $_POST['PreferredContactMethod'];?>" readonly>
<div style="text-align:center">
    <h2>Available Volunteers:</h2>
    </div>
<input type="text" class="form-control" name="Volunteers" value=
       "<?php

$conn = mysqli_connect("localhost","root","root", "volunteerweb");


       $sql = "SELECT * FROM login where Timezone = '$Timezone' ";
       if($result = mysqli_query($conn, $sql)){
           if(mysqli_num_rows($result) > 0){




               while($row = mysqli_fetch_array($result)){

                    $str =(explode(",",$row['language']));
                    foreach($str as  $sr){
                      if($Languages == $sr)
                      {

                       echo $row['email'];


                      }

                    }

 echo "<br>";

               }


               // Close result set
               mysqli_free_result($result);
           } else{
               echo "Sorry no volunteers found!";
           }
       } else{
           echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
       }




     }
;?>"readonly>
<div style="text-align: center;"> <button class ="acceptbtn":hover name="submit"  id="showHiddenBlock" >Proceed


      </button></div>
      </form>
<div style="text-align: center;" id="initiallyHiddenBlock" class="margin">
      <h1>Submitted!</h1>
</div>
<script>
      const scriptURL =
        "https://script.google.com/macros/s/AKfycbzVH7f2tOcx36w_WslIETUwS2ebCs5Y3MSNk8qfy4YXCD_bbuoi/exec";
      const form = document.forms["google-sheet"];

     form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => alert("Thank you for choosing HealthMatch.We will allot you a Volunteer soon!"))
                .catch(error => console.error('Error!', error.message))
            })

    </script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script>
     $(document).ready(function() {
      $('#showHiddenBlock').click(function() {
          $('#initiallyHiddenBlock').show();
         $('#HideBlock').hide();
      });
  });
  </script>
        </html>