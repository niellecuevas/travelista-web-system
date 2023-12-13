<?php
 include('dbconnection.inc.php');
// Process login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database to retrieve the hashed password for the provided username
    $stmt = $con->prepare("SELECT password FROM admins WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the username exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPasswordFromDatabase = $row['password'];

        // Compare the hashed password with the submitted password
        if (password_verify($password, $hashedPasswordFromDatabase)) {
            // Passwords match, authentication successful
            $_SESSION['admin_username'] = $username;
            
            // Redirect to admin.php
            header("Location: admin.php");
            exit(); // Make sure to exit after the header redirect to prevent further execution
        } else {
            // Passwords do not match, authentication failed
            echo "Invalid username or password";
        }
    } else {
        // Username not found
        echo "Invalid username or password";
    }

    $stmt->close();
}
?>



?>
