<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logoupdated.png" sizes="32x32" type="image/png">
    <title>Travelista</title>
    <style>body {
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-repeat: repeat; 
    background-size: 200px 200px;
    background-color: #0089a8;
}

.loading-wrapper {
    text-align: center;
}

.running-car {
    width: 45%; /* Adjust the size as needed */
}

.loading-bar {
    width: 0;
    height: 10px;
    background-color: #3498db;
    margin-top: 20px;
}
</style>
</head>
<body style="background-image: url('images/foggy-birds.png');">
    <div class="loading-wrapper">
        <img src="./images/vanmoving.gif" alt="Running Car GIF" class="running-car">
        <div class="loading-bar" id="loading-bar"></div>
    </div>
    <script>document.addEventListener('DOMContentLoaded', function () {
    setTimeout(function () {
        document.getElementById('loading-bar');
        setTimeout(function () {
            window.location.href = 'index.php';
        }, 500);
    }, 3000);
});
</script>
</body>
</html>
