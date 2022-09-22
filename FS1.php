<?php

require 'mailer.php';

$servername ="localhost";
$username ="root";
$password ="";
$dbname="citizenship";
$port =3308;



$conn =new mysqli($servername,$username,$password,$dbname,$port);        

 if($conn -> connect_error)
  {
    die("Connection failed: " . $conn->connect_error);
  }
 else
  {
   echo "HI FINTCH"."<br>";
  }

  
//RECEIVING FORM VALUES
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$country = $_POST['country'];

sendMail($firstname, $lastname, $email, $country);




 $sql = "INSERT INTO Registration (first_name, last_name, email,country)
VALUES ('$firstname', '$lastname', '$email','$country')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>