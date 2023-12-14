<!-- update.php -->
<head>
    <!-- Include SweetAlert library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<?php
 include('dbconnection.inc.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $paymentstatus = $_POST['paymentstatus'];

    $sqlUpdate = "UPDATE customer_book SET firstname='$firstname', lastname='$lastname', paymentstatus='$paymentstatus' WHERE id='$id'";

    if ($con->query($sqlUpdate) === TRUE) {
      echo "Record Updated successfully";
      header("Location: edit.php");
exit();
  } else {
      echo "Error updating record: " . $con->error;
  }
}

$con->close();

?>
