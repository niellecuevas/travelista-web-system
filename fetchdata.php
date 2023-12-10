<?php 
                include('dbconnection.inc.php');
                $sqlquery = "SELECT * FROM customer_book";
                $result = mysqli_query($con, $sqlquery);
                while($row = mysqli_fetch_array($result)){
                    $id = $row['id'];
                    $firstname = $row['firstname'];
                    $lastname = $row['lastname'];
                    $pax = $row['pax'];
                    $contactnumber = $row['contactnumber'];
                    $dtarrivaldeparture = $row['dtarrivaldeparture'];
                    $pickupplace = $row['pickupplace'];
                    $pickuptime = $row['pickuptime'];
                    $dropoff = $row['dropoff'];
                    $paymentmethod = $row['paymentmethod'];
                    $paymentstatus = $row['paymentstatus'];

                    echo "<tr>
                    <td>$id</td>
                    <td>$firstname</td>
                    <td>$lastname</td>
                    <td>$pax</td>
                    <td>$contactnumber</td>
                    <td>$dtarrivaldeparture</td>
                    <td>$pickupplace</td>
                    <td>$pickuptime</td>
                    <td>$dropoff</td>
                    <td>$paymentmethod</td>
                    <td>$paymentstatus</td>
                    <td><button class='btncss edit-button' id='openEditForm'>Edit</button></td>
                    <td><button class='deleteBtn' data-id='" . $row["id"] . "'>Delete</button></td>
                    </tr>";
                }
            ?>