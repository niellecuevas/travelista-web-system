<?php 
include ('dbconnection.inc.php');
// Check if the 'id' parameter is present in the POST request
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    error_log('Deleting record with ID: ' . $id);

    // Prepare and execute the SQL query to delete the record
    $sql = "DELETE FROM customer_book WHERE id = $id";

    if ($con->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $con->error;
    }
}

$con->close();
?>