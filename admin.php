<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="icon" href="images/logoupdated.png" sizes="32x32" type="image/png">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/updateform.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <!-- Include SweetAlert CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- Include jQuery for AJAX -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body style="background-image: url('images/elnido4edited.png');">

<?php include '../websystem/components/header.php';?>

<div class="bookingList-container">
    <h1 class="booking-title">BOOKINGS</h1>
    <!-- Sorting Dropbox -->
    <?php include './components/adminfilter.php'?>
        <table>
            <tr class="tbl_bookingList">
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Pax</th>
                <th>Contact Number</th>
                <th>DateTime of Arrival and Departure</th>
                <th>Pick-up Place</th>
                <th>Pick-up Time</th>
                <th>Dropoff</th>
                <th>Payment Method</th>
                <th>Payment Status</th>
                <th> </th>
                <th> </th>
            </tr>

            <?php include './fetchdata.php'?>
            <script src="./js/delete.js"></script>
    </table>

    <?php include '../websystem/components/updateform.php';?>

</div>
<script>
             function openEditForm() {
                var popup = document.getElementById("updateForm");
                popup.classList.toggle("show");
                }
</script>
</body>
</html>