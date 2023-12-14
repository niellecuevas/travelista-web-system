function filterByPaymentStatus() {
    var filter, table, tr, td, i, txtValue;
    var dropdown = document.getElementById("paymentStatusFilter");
    filter = dropdown.value.toUpperCase();
    table = document.getElementById("dataTable");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
        var cells = tr[i].getElementsByTagName("td");
        var paymentStatusCell = cells[3]; // Assuming payment status is in the second column

        if (paymentStatusCell) {
            var paymentStatus = paymentStatusCell.textContent || paymentStatusCell.innerText;

            // Check if the payment status matches the filter
            if (filter === "" || paymentStatus.toUpperCase() === filter) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

document.addEventListener("DOMContentLoaded", function () {
    fetch("fetchdata.php")
        .then(response => response.json())
        .then(data => {
            var table = document.getElementById("dataTable");
            data.forEach(item => {
                var row = table.insertRow(-1);
                var cell = row.insertCell(0);
                cell.textContent = item.column_name; // Replace with your actual column names
            });
        })
        .catch(error => console.error("Error fetching data:", error));
});
