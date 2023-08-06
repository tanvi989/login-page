<?php

if(isset($_POST['name'])){
error_reporting(0);
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);
if(!$con){
    die("connection failed".
    mysqli_connect_error());
}

$sno=$_POST['sno'];
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];

$email=$_POST['email'];
$phone=$_POST['phone'];
$desc=$_POST['desc'];






$sql= "INSERT INTO `trip`.`trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`)
 VALUES ('$sno','$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

 


 if($con->query($sql)==true){
    echo "succesfull inserted";
 }else{
    echo "error: $sql <br> $con->error ";

 }

$con->close();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href ="style.css">
</head>
<body>
   

<div class="container" style="margin-left:300px;">
<h1 style="font-size:60px;" class="animate-charcter h1">Welcome to our page</h1>
<p>Book Holidays Online. No reservation costs. Great rates.
Get Instant Confirmation. Hotels. Apartments. Book Your Car Rental.
Villas. Airport Taxi available. Great Availability. No Booking Fees. Hostels. Save 10% with Genius. Types</p>
<div style="margin-left:200px;">

<form  action="index.php" method="post">
<input type="text" class="form__input" name ="sno" id="sno" placeholder="enter your sno"><br><br>
<input type="text" name ="name" id="name" placeholder="enter your name"><br><br>
<input type="text" name ="age" id="age" placeholder="age"><br><br>
<input type="text" name ="gender" id="gender" placeholder="enter your gender"><br><br>
<input type="email" name ="email" id="email" placeholder="enter your email"><br><br>
<input type="text" name ="phone" id="phone" placeholder="enter your number"><br><br>
<textarea name ="desc" name="desc" id="desc" placeholder="tell us about you "></textarea><br><br>

<button class ="btn button-85">submit</button><br><br>
<button class ="btn button-85">reset</button><br>
</div>
</form>



</div>


</body>
</html>