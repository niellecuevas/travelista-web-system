<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="icon" href="images/logoupdated.png" sizes="32x32" type="image/png">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/updateform.css">
    <link rel="stylesheet" href="css/edit.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <!-- Include SweetAlert CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- Include jQuery for AJAX -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body style="background-image: url('images/elnido4edited.png');">

<?php include '../websystem/components/adminheader.php';?>

<div class="bookingList-container">
    <h1 class="booking-title">Payment Statuses</h1>
    <a href="./admin.php" class="edit-link">Reservations</a>
    <input type="text" class="search-input" id="searchInput" oninput="searchData()" placeholder="Search...">
        <!-- Dropdown for filtering by payment status -->
        <select id="paymentStatusFilter" onchange="filterByPaymentStatus()" class="filter">
            <option value="">Filter by Payment Status: All </option>
            <option value="Paid">Paid</option>
            <option value="Pending">Pending</option>
            <option value="Cancelled">Cancelled</option>
            <!-- Add more options based on your payment status values -->
        </select>
        
    <?php include './popupform.php'?>
    <script src="./js/update.js"></script>
    <script src="./js/search.js"></script>
    <script src="./js/editfilter.js"></script>
</div>

</body>
</html>