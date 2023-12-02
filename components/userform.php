<div class="userForm">
<form>
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
            <label for="phone">Contact Number:</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="column">
        <div>
            <label for="arrivaldeparture">Date and Time of Arrival/Departure:</label>
            <input type="date" id="datearrivaldepart" name="datearrivaldepart" required>
        </div>
        <div class="column">
            <input type="time" id="timearrivaldepart" name="timearrivaldepart" style="display: inline-block; margin-top: 27px;" required>
        </div>
        </div>
    </div>
    <div class="column">
        <div>
            <label for="pickup">Pick Up:</label>
            <input type="text" id="pickup" name="pickup" required>
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
                <select id="dropdown" name="paymentmethd">
                    <option value="option1">Collect</option>
                    <option value="option2">Charge to Hotel</option>
                </select>
        </div>
        <button type="submit">Book</button>
    </form>
</div>