<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travelista</title>
    <link rel="icon" href="images/logoupdated.png" sizes="32x32" type="image/png">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/userform.css">
    <link rel="stylesheet" href="css/footer.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>
<body style="background-image: url('images/elnido.jpg');">
<!-- Top Bar -->
<?php include '../websystem/components/header.php';?>

    <div id="container" class="body-container">
        <div id="banner-img">
            <img src="images/tripsched.png">
        </div>

        <div id="headertext">
            <h1>Want a private ride?</h1>
        </div>

        <button class="btncss" onclick="openForm()">Book Now!</button>

        <?php require '../websystem/components/userform.php';?>
    </div>

    <footer>
        <h2>Contact Us</h2>
        <div class="contact-info">
            <div>
                <i class="fa-solid fa-location-dot"></i>
                El Nido, Palawan
            </div>
            <div>
                <i class="fas fa-envelope"></i>
                travelistatransportservice@gmail.com
            </div>
            <div>
                <i class="fas fa-phone"></i>
                0931 963 5690
            </div>
        </div>
        <div class="social-icons">
            <a href="https://www.facebook.com/profile.php?id=100088849017809" target="_blank"><i class="fab fa-facebook"></i></a>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/2c352db45c.js" crossorigin="anonymous"></script>

    <script>
    function openForm() {
        var popup = document.getElementById("customerForm");
        popup.classList.toggle("show");

        var mainDiv = document.getElementById("container");
        mainDiv.classList.toggle("expanded");
    }
    </script>
</body>
</html>