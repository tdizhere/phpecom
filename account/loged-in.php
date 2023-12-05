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
    <link rel="icon" type="image/png" href="../homepage/html/newlicon.png">
    <link rel="stylesheet" href="../homepage/css/style.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="../homepage/js/script.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="script.js"></script>

    <title>Account-Tdiz™</title>
    <style>
        #login-message {
            margin-top: 10px;
            color: red;
        }
    </style>
</head>

<body>
<?php session_start(); require '../header.php'; ?>

    <div class="main">
        <div class="accounts">
            <h1 class="account">Account</h1>
            <div class="logout">
                <i class="fa-regular fa-user"></i><a href="logout.php">Log Out</a>
            </div>
        </div>
        <div class="horizontal-panel">
            <div class="order-history">
                <div class="order-history-msg">
                    <h1>Order History</h1>
                </div>
                <p>You Haven't Placed Any Orders Yet!!</p>
                <section class="order-history-section">
                    <div class="order-item">
                        <div class="image"><img src="../homepage/asset/images/towel1.jpg"></div>
                        <div class="info">
                            <div class="title">
                                <p>Name:</p><br>Towel</div>
                            <div class="price">
                                <p>Price:</p><br>700Rs</div>
                            <div class="date">
                                <p>Date:</p><br>01/01/2024</div>
                            <div class="status">
                                <p>status:</p><br>Delivered</div>
                        </div>
                    </div>
                    <div class="order-item">
                        <div class="image"><img src="../homepage/asset/images/towel1.jpg"></div>
                        <div class="info">
                            <div class="title">
                                <p>Name:</p><br>Towel</div>
                            <div class="price">
                                <p>Price:</p><br>700Rs</div>
                            <div class="date">
                                <p>Date:</p><br>01/01/2024</div>
                            <div class="status">
                                <p>status:</p><br>Delivered</div>
                        </div>
                    </div>
                    <div class="order-item">
                        <div class="image"><img src="../homepage/asset/images/towel1.jpg"></div>
                        <div class="info">
                            <div class="title">
                                <p>Name:</p><br>Towel</div>
                            <div class="price">
                                <p>Price:</p><br>700Rs</div>
                            <div class="date">
                                <p>Date:</p><br>01/01/2024</div>
                            <div class="status">
                                <p>status:</p><br>Delivered</div>
                        </div>
                        <div class="order-item">
                            <div class="image"><img src="../homepage/asset/images/towel1.jpg"></div>
                            <div class="info">
                                <div class="title">
                                    <p>Name:</p><br>Towel</div>
                                <div class="price">
                                    <p>Price:</p><br>700Rs</div>
                                <div class="date">
                                    <p>Date:</p><br>01/01/2024</div>
                                <div class="status">
                                    <p>status:</p><br>Delivered</div>
                            </div>
                        </div>
                        <div class="order-item">
                            <div class="image"><img src="../homepage/asset/images/towel1.jpg"></div>
                            <div class="info">
                                <div class="title">
                                    <p>Name:</p><br>Towel</div>
                                <div class="price">
                                    <p>Price:</p><br>700Rs</div>
                                <div class="date">
                                    <p>Date:</p><br>01/01/2024</div>
                                <div class="status">
                                    <p>status:</p><br>Delivered</div>
                            </div>
                        </div>

                </section>
                </div>
                <div class="account-details">
                    <h1>Account Details</h1>
                    <p>tdizhere</p>
                    <p>India</p>
                    <div class="view-address">
                        <a href="#">View Address</a>
                    </div>
                </div>
            </div>

        </div>
        
        <?php require '../footer.php'; ?>
        
</body>

</html>