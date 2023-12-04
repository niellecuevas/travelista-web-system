<?php 
include('dbconnection.inc.php');
if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $pax = $_POST['pax'];
    $contactnumber = $_POST['contactnumber'];
    $dtarrivaldeparture = $_POST['dtarrivaldeparture'];
    $pickupplace = $_POST['pickupplace'];
    $pickuptime = $_POST['pickuptime'];
    $dropoff = $_POST['dropoff'];
    $paymentmethod = $_POST['paymentmethod'];

    $query = ("Insert into customer_book (firstname, lastname, pax, contactnumber, dtarrivaldeparture, pickupplace, pickuptime, dropoff, paymentmethod) Values ('$firstname' , '$lastname', '$pax' , '$contactnumber', '$dtarrivaldeparture', '$pickupplace', '$pickuptime', '$dropoff' , '$paymentmethod');");
    mysqli_query($con,$query);
    if($query){
        echo "<script>alert('Reservation submitted successfully!')</script>";
    }else{
        echo "<script>alert('There is an error.')</script>";
    }
}

?>

<div class="userForm">
<form method="POST"> 
    <div class="column">
        <div>
            <label for="firstname">Name:</label>
            <input type="text" id="firstname" name="firstname" placeholder="First Name" required>
        </div>
        <div style="margin-top: 27px;">
            <input type="text" id="lastname" name="lastname" placeholder="Last Name" required>
        </div>
    </div>
    <div class="column">
        <div>
            <label for="pax">Pax:</label>
            <input type="number" id="pax" name="pax" required>
        </div>
        <div>
            <label for="contactnumber">Contact Number:</label>
            <input type="text" id="contactnumber" name="contactnumber" required>
        </div>
        <div class="column">
        <div>
            <label for="arrivaldeparture">Date and Time of Arrival/Departure:</label>
            <input type="datetime-local" id="datearrivaldepart" name="dtarrivaldeparture" required>
        </div>
        </div>
    </div>
    <div class="column">
        <div>
            <label for="pickup">Pick Up:</label>
            <input type="text" id="pickup" name="pickupplace" required>
        </div>
        <div>
        <label for="pickuptime">Pick Up Time:</label>
        <input type="time" id="pickuptime" name="pickuptime" required>
        </div>
        <div>
            <label for="dropoff">Drop Off:</label>
            <input type="text" id="dropoff" name="dropoff" required>
        </div>
    </div>
        <div>
            <label for="paymentmethod">Payment Method:</label>
                <select id="dropdown" name="paymentmethod">
                    <option value="option1">Collect</option>
                    <option value="option2">Charge to Hotel</option>
                </select>
        </div>
        <input type="submit" name="submit" value="Book">
    </form>
</div>