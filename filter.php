<?php
include ('dbconnection.inc.php');
// Get the payment status filter value from the request
$paymentStatusFilter = isset($_GET['paymentStatusFilter']) ? $_GET['paymentStatusFilter'] : '';

// Construct the SQL query based on the payment status filter
$sql = "SELECT id, firstname, lastname, pax, contactnumber, dtarrivaldeparture, pickupplace, pickuptime, dropoff, paymentmethod, paymentstatus FROM customer_book";

if (!empty($paymentStatusFilter)) {
    // Add a WHERE clause to filter by payment status
    $sql .= " WHERE payment_status = ?";
}

// Prepare the SQL statement
$stmt = $con->prepare($sql);

if (!empty($paymentStatusFilter)) {
    // Bind the parameter for the payment status filter
    $stmt->bind_param("s", $paymentStatusFilter);
}

// Execute the SQL statement
$stmt->execute();

// Bind the result variables
$stmt->bind_result($id, $firstname, $lastname, $pax, $contactnumber, $dtarrivaldeparture, $pickupplace, $pickuptime, $dropoff, $paymentmethod, $paymentstatus);

$data = array();

// Fetch the results into an associative array
while ($stmt->fetch()) {
    $data[] = array(
        'id' => $id,
        'firstname' => $firstname,
        'lastname' => $lastname,
        'pax' => $pax,
        'contactnumber' => $contactnumber,
        'dtarrivaldeparture' => $dtarrivaldeparture,
        'pickupplace' => $pickupplace,
        'pickuptime' => $pickuptime,
        'dropoff' => $dropoff,
        'paymentmethod' => $paymentmethod,
        'paymentstatus' => $paymentstatus
    );
}

// Close the statement and connection
$stmt->close();
$con->close();

// Return data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
