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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Include separate JavaScript file -->
    <script src="script.js" defer></script>
</head>
<body style="background-image: url('images/elnido4.jpg');">

<?php include '../websystem/components/header.php';?>

<div class="bookingList-container">
    <h1 class="booking-title">BOOKINGS</h1>
    <a href="./admin.php">Reservations</a>
    <?php include './popupform.php'?>
    <script src="./js/update.js"></script>
</div>

</body>
</html>