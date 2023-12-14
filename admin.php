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
</head>
<body style="background-image: url('images/elnido4edited.png');">

<?php include '../websystem/components/adminheader.php';?>
<div class="bookingList-container">
    <h1 class="booking-title">Reservation Information</h1>
    <!-- Sorting Dropbox -->
    <a href="./edit.php" class="edit-link">Edit Payment Status</a>
        <input type="text" class="search-input" id="searchInput" oninput="searchData()" placeholder="Search...">
        <!-- Dropdown for filtering by payment status -->
        <select id="paymentStatusFilter" onchange="filterByPaymentStatus()" class="filter">
            <option value="">Filter by Payment Status: All </option>
            <option value="Paid">Paid</option>
            <option value="Pending">Pending</option>
            <option value="Cancelled">Cancelled</option>
            <!-- Add more options based on your payment status values -->
        </select>
        <table id="dataTable">
            <thead>
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
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php include './fetchdata.php'?>
            </tbody>

            <script src="./js/delete.js"></script>
            <script src="./js/search.js"></script>
            <script src="./js/filter.js"></script>
            <script>var elements = document.getElementsByTagName('body');
                    elements[0].style.opacity = 0;
                    (function fadeOut() {

                            var opacity = parseFloat(elements[0].style.opacity);

                            if (opacity == 1) return;

                            elements[0].style.opacity = opacity + 0.1;
                            setTimeout(fadeOut, 50); //<<<<<<<< here you set the speed!
                        })();
            </script>

    </table>

</div>

</body>
</html>