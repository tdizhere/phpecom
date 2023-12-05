
<?php

require '../connection.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $check_query = "SELECT * FROM users WHERE email=?";
    $stmt = mysqli_prepare($con, $check_query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 's', $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            if ($pass === $user['passwords']) {
                // Password is correct, set user details in session
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['login_time'] = time(); // Store the current timestamp
echo "<pre>";
print_r($session);
echo "</pre>";
                // Redirect to logged-in.php
                header('Location: loged-in.php');
                exit();
            } else {
                // Password is incorrect
                echo "<script>alert('Incorrect password');</script>";
            }
        } else {
            // User does not exist
            echo "<script>alert('User does not exist');</script>";
        }

        mysqli_stmt_close($stmt);
    } else {
        // Handle the error if preparing the statement fails
       // Redirect to index.php after 3 seconds if login fails
echo "<script>setTimeout(function(){ window.location.href = 'index.php'; }, 3000);</script>";

    }
}
?>
<!-- ... Rest of your HTML code ... -->

<body>
    <div class="container">
        <div class="form-container">
            <!-- Login Form -->
            <div class="form login-form" id="login-form">
                <h2 class="title-h2">Login</h2>
                <form action="" method="post">
                    <p id="login-message"></p>
                    <div class="input-container">
                        <input type="email" id="email" name="email" required autocomplete="email">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-container">
                        <input type="password" id="password" name="pass" required autocomplete="current-password">
                        <label for="password">Password</label>
                    </div>
                    <a href="#" class="forgot-password">Forgot Password?</a><br>
                    <button type="submit" id="login-button">Login</button>
                </form>
                <p><a href="signup.php" id="show-signup" style="margin-top: 30px !important;">Create Account</a></p>
            </div>
        </div>
    </div>
</body>
</html>
