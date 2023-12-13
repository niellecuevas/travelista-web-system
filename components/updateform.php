<div id="updateForm" class="userForm">
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
            <input type="number" id="pax" name="pax" placeholder="How many passengers?" required>
        </div>
        <div>
            <label for="contactnumber">Contact Number:</label>
            <input type="text" id="contactnumber" name="contactnumber" required>
        </div>
        <div>
            <label for="arrivaldeparture">Date and Time of Arrival/Departure:</label>
            <input type="datetime-local" id="datearrivaldepart" name="dtarrivaldeparture" required>
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
                    <option value="Collect">Collect</option>
                    <option value="Charge to Hotel">Charge to Hotel</option>
                </select>
        </div>
        <div>
            <label for="paymentstatus">Payment Status:</label>
                <select id="dropdown" name="paymentstatus">
                    <option value="Paid">Paid</option>
                    <option value="Pending">Pending</option>
                </select>
        </div>
        <input id="formbtn" type="submit" name="submit" value="Book">
    </form>
</div>