<?php
session_start();

require '../connection.php';

if (isset($_SESSION['email'])) {
    // User is logged in, set the user as inactive in the database
    $email = $_SESSION['email'];
    $update_query = "UPDATE users SET active = 0 WHERE email = ?";
    $update_stmt = mysqli_prepare($con, $update_query);
    mysqli_stmt_bind_param($update_stmt, 's', $email);
    mysqli_stmt_execute($update_stmt);

    // Destroy the session
    session_destroy();
}

// Redirect to index.php after 0 seconds
echo "<script>setTimeout(function(){ window.location.href = 'index.php'; }, 0);</script>";

mysqli_close($con);
?>
