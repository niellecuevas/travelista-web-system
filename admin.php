<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" href="css/admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>
<body>
<?php include '../websystem/components/header.php';?>
<div class="bookingList-container">
    <h1 class="booking-title">BOOKINGS</h1>
    <!-- Sorting Dropbox -->
    <?php include './components/adminfilter.php'?>
        <table>
            <tr class="tbl_bookingList">
                <th>Name</th>
                <th>Date</th>
                <th>Payment Status</th>
            </tr>
    </table>
</div>
</body>
</html>