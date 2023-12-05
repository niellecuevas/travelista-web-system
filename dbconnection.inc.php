<?php 

    //Login Credentials to XAMPP
    $sname = "localhost";
    $uname = "root";
    $password = "";

    //Database Name
    $dbName = "travelista";

    $con = mysqli_connect($sname, $uname, $password, $dbName);

    if ($con->connect_error) {
        die("Connection Failed".$con->connect_error);
    }

?>