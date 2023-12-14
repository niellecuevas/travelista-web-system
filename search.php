<?php
include ('dbconnection.inc.php');

$sql = "SELECT firstname FROM customer_book"; // Replace with your actual table and column names
$result = $con->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$con->close();

header('Content-Type: application/json');
echo json_encode($data);
?>
