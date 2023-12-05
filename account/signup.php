<?php
session_start();
require '../connection.php'; // Update the path based on your directory structure

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'] ?? '';
    $last_name = $_POST['last_name'] ?? '';
    $email = $_POST['email'] ?? '';
    $pass = $_POST['pass'] ?? '';

    // Check if the user already exists
    $check_query = "SELECT * FROM users WHERE email=?";
    $stmt = mysqli_prepare($con, $check_query);
    mysqli_stmt_bind_param($stmt, 's', $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        // User already exists
        echo "<script>alert('User already exists');</script>";
        header('Refresh: 0; URL=index.php'); // Redirect to index.php after 0 seconds
    } else {
        // User does not exist, proceed with the insertion

        // Store the plain text password (for testing purposes)
        $insert_query = "INSERT INTO users (first_name, last_name, email, passwords, active) VALUES (?, ?, ?, ?, 0)";
        $insert_stmt = mysqli_prepare($con, $insert_query);

        // Use parameterized query to prevent SQL injection
        mysqli_stmt_bind_param($insert_stmt, 'ssss', $first_name, $last_name, $email, $pass);
        mysqli_stmt_execute($insert_stmt);

        // Redirect to index.php or any other page after successful registration
        header('Location: index.php');
        exit(); // Stop executing the script
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($con);
?>
<!-- ... Rest of your HTML code ... -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="">
    <meta property="og:image:secure_url" content="">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="628">
    <meta property="og:site_name" content="XYZ™">
    <meta property="og:url" content="https://XYZ.shop/">
    <meta property="og:title" content="XYZ™">
    <meta property="og:type" content="website">
    <meta property="og:description" content="XYZ™">
    <script src="https://kit.fontawesome.com/3db7f7f4a7.js" crossorigin="anonymous"></script>

    <link rel="canonical" href="https://XYZ.shop/">
    <link rel="icon" type="image/png" href="/home page/html/newlicon.png">
    <link rel="stylesheet" href="../homepage/css/style.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="../home page/js/script.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="script.js"></script>

    <title>Account-Tdiz™</title>
    <style>
        label {
            padding-left: 10px;
        }
    </style>
</head>

<?php require '../header.php' ?>
   <div class="container">
        <div class="form-container">


            <!-- Signup Form -->
            <div class="form signup-form" id="signup-form">
                <h2 class="title-h2">Create Account</h2>
                <form action="signup.php" method="POST">
                    <div class="input-container">
                        <input type="text" name="first_name" required>
                        <label>First Name</label>
                    </div>
                    <div class="input-container">
                        <input type="text" name="last_name" required>
                        <label>Last Name</label>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-container">
                        <input type="password" name="pass" required>
                        <label>Password</label>
                    </div>
                    <button type="submit">Create</button><br>
                    <a href="index.php" class="login-a">Already have Account!</a>
                </form>

            </div>
        </div>
    </div>
    <?php require '../footer.php' ?>
    

