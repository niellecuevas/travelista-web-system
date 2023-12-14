// script.js
document.addEventListener("DOMContentLoaded", function () {
    const editButtons = document.querySelectorAll('.edit-button');

    editButtons.forEach(button => {
        button.addEventListener('click', function () {
            const id = this.getAttribute('data-id');
            const firstName = this.getAttribute('data-firstName');
            const lastName = this.getAttribute('data-lastName');
            const paymentStatus = this.getAttribute('data-paymentStatus');

            showEditForm(id, firstName, lastName, paymentStatus);
        });
    });

    function showEditForm(id, firstName, lastName, paymentStatus) {
        Swal.fire({
            title: 'Edit Customer',
            html:
                `<input type="text" id="swal-input1" class="swal2-input" placeholder="First Name" value="${firstName}">
                 <input type="text" id="swal-input2" class="swal2-input" placeholder="Last Name" value="${lastName}">
                 <select id="swal-input3" class="swal2-input">
                    <option value="Paid" ${paymentStatus === 'Paid' ? 'selected' : ''}>Paid</option>
                    <option value="Pending" ${paymentStatus === 'Pending' ? 'selected' : ''}>Pending</option>
                    <option value="Cancelled" ${paymentStatus === 'Cancelled' ? 'selected' : ''}>Cancelled</option>
                 </select>`,
            showCancelButton: true,
            confirmButtonText: 'Update',
            cancelButtonText: 'Cancel',
            preConfirm: () => {
                const firstName = Swal.getPopup().querySelector('#swal-input1').value;
                const lastName = Swal.getPopup().querySelector('#swal-input2').value;
                const paymentStatus = Swal.getPopup().querySelector('#swal-input3').value;

                // Set values in the hidden form fields
                document.getElementById('editId').value = id;
                document.getElementsByName('firstname')[0].value = firstName;
                document.getElementsByName('lastname')[0].value = lastName;
                document.getElementsByName('paymentstatus')[0].value = paymentStatus;

                // Submit the form
                document.getElementById('updateForm').submit();
            }
        })
        .then((result) => {
            if (result.isConfirmed) {
                Swal.fire('Updated!', 'Your data has been updated.', 'success');
                header("Location: edit.php");
exit();
            } else {
                Swal.fire('Cancelled', 'Your data is safe.', 'info');
                header("Location: edit.php");
exit();
            }
        });
    }
});




