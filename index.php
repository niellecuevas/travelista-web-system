<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travelista</title>
    <link rel="icon" href="images/logoupdated.png" sizes="32x32" type="image/png">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/userform.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>
<body>
<!-- Top Bar -->
<?php include '../websystem/components/header.php';?>

    <div class="body-container">
        <div id="banner-img">
            <img src="images/tripsched.png">
        </div>

        <button class="btncss" onclick="openForm()">Book Now!</button>

        <?php require '../websystem/components/userform.php';?>
        
    </div>
    <script>
    function openForm() {
        var popup = document.getElementById("customerForm");
        popup.classList.toggle("show");
    }
    </script>
</body>
</html>