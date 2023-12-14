function searchData() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("dataTable");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1]; // Assuming the search is based on the first column
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

// You may need to fetch data from the server using AJAX and dynamically populate the table.
// This example assumes you have a PHP script (fetch_data.php) that fetches data from the database.
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
