$(document).ready(function() {
    $('.deleteBtn').on('click', function() {
        var id = $(this).data('id');

        Swal.fire({
            title: 'Are you sure?',
            text: 'You won\'t be able to revert this!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
        }).then((result1) => {
            if (result1.isConfirmed) {
                // Send AJAX request to delete_script.php
                $.ajax({
                    type: 'POST',
                    url: 'delete_script.php',
                    data: { id: id },
                    success: function(response) {
                        // Remove the deleted row from the table
                        $('tr[data-id="' + id + '"]').remove();
                        Swal.fire('Deleted!', response, 'success');
                    },
                    error: function(xhr, status, error) {
                        Swal.fire('Error', 'Unable to delete record: ' + error, 'error');
                    }
                });
            } else {
                Swal.fire('Cancelled', 'Your record is safe :)', 'info');
            }
        });
    });
});