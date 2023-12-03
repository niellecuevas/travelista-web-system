<?php 

  $con = mysqli_connect("localhost","root","","travelista_db");
  if($con == false){
    die("Connection Error" . mysqli_connect_error());
  }
?>