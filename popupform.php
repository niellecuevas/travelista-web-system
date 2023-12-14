<!-- fetchdata.php -->
<?php include('dbconnection.inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Data</title>
    <!-- Include SweetAlert library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/edit.css">
</head>
<body>

<table id="dataTable">
    <thead>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Payment Status</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    
    $sql = "SELECT id, firstname, lastname, paymentstatus FROM customer_book";
    $result = $con->query($sql);

    if ($result === false) {
        echo "Error: " . $con->error;
    } else {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["firstname"] . "</td>";
                echo "<td>" . $row["lastname"] . "</td>";
                echo "<td>" . $row["paymentstatus"] . "</td>";
                echo "<td><button class='edit-button btn' 
                            data-id='{$row['id']}'
                            data-firstName='{$row['firstname']}'
                            data-lastName='{$row['lastname']}'
                            data-paymentStatus='{$row['paymentstatus']}'>Edit</button></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No records found</td></tr>";
        }
    }
    ?>
    </tbody>
</table>


<div id="editForm" style="display: none;">
    <form id="updateForm" action="update.php" method="post">
        <input type="text" name="firstname" placeholder="First Name">
        <input type="text" name="lastname" placeholder="Last Name">
        <select name="paymentstatus">
            <option value="Paid">Paid</option>
            <option value="Pending">Pending</option>
            <option value="Cancelled">Cancelled</option>
        </select>
        <input type="hidden" name="id" id="editId">
        <input type="submit" value="Update">
    </form>
</div>

</body>
</html>
