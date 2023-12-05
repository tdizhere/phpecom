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

    <title>AboutUS-Tdiz™</title>


</head>

<body>

    <div class="slideshow-container">

        <div class="mySlides">
            <p>Welcome to our shop</p>

        </div>

        <div class="mySlides">
            <p>Bring XYZ™ to your house</p>

        </div>

        <div class="mySlides">
            <p>Get variety with XYZ™</p>

        </div>
        <div class="mySlides">
            <p>Get Amazing discount and Offer with XYZ™</p>

        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <script src="../homepage/js/script.js"></script>
   <?php  require '../header.php';?>
   <?php
// Assuming you have a database connection established
require '../connection.php';

// SQL query to fetch data from the 'ourstory_page' table
$sql = "SELECT hero_image, hero_title, hero_msg ,semi_image,semi_text_h1,semi_text_p,message_title, message_head, message_body FROM ourstory_page";
$result = $con->query($sql);

// Check if there are rows in the result
if ($result->num_rows > 0) {
    // Fetch the data from the first row
    $row = $result->fetch_assoc();
    
    // Extract values
    $heroImage = $row['hero_image'];
    $heroTitle = $row['hero_title'];
    $heroMsg = $row['hero_msg'];
    $semiImage = $row['semi_image'];
    $semiTextH1 = $row['semi_text_h1'];
    $semiTextP = $row['semi_text_p'];

    // Output HTML dynamically using fetched data
    echo '<div class="hero" style="background-image: url(\'' . $heroImage . '\');">
            <div class="msg">
                <p>' . $heroTitle . '</p>
                <h1>' . $heroMsg . '</h1>
            </div>
        </div>';
       
    
        // Output HTML dynamically using fetched data
        echo '<section class="semi-text-img">
                <div class="img-section"><img src="' . $semiImage . '" alt="image"></div>
                <div class="text">
                    <h1>' . $semiTextH1 . '</h1>
                    <p>' . $semiTextP . '</p>
                </div>
            </section>';
            $messageTitle = $row['message_title'];
            $messageHead = $row['message_head'];
            $messageBody = $row['message_body'];
        
            // Output HTML dynamically using fetched data
            echo '<section>
                    <hr>
                        <div class="message   h-30">
                            <div class="msg-title"><h2>' . $messageTitle . '</h2></div>
                            <div class="msg-head"><h4>' . $messageHead . '</h4></div>
                            <div class="sub-msg">' . $messageBody . '</div>
                        </div>
                    <hr>
                </section>';
} else {
    echo "0 results";
}

// Close the database connection
$con->close();
?>


  
    <?php 
        require '../subscribe.php';
         require '../footer.php';
      
    ?>


</body>

</html>