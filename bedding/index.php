<?php
// Replace these with your actual database credentials
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'ecom';

// Create connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch the image path from the banner table
$sql = "SELECT `categorypage_banner` FROM `banner`";
$result = $conn->query($sql);

// Initialize $imageURL variable
$imageURL = '';

// Check if the query was successful
if ($result) {
    // Fetch the data
    $row = $result->fetch_assoc();

    // Check if the categorypage_banner column exists
    if (isset($row['categorypage_banner'])) {
        $imageURL = $row['categorypage_banner'];
    } else {
        echo "categorypage_banner column not found in the banner table.";
    }
} else {
    echo "Error executing the query: " . $conn->error;
}

// Close the database connection
$conn->close();
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    <link rel="icon" type="image/png" href="newlicon.png">
    <link rel="stylesheet" href="../homepage/css/style.css" type="text/css">
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<link rel="stylesheet" href="style.css"type="text/css">
    <title>
        Tdiz™
    </title>
<style>
.bg-img {
    width: 100%;
    margin-top: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 600px;
    background-image: url('<?php echo $imageURL; ?>');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}
.redirectlink{
    text-decoration: none;
}

</style>
</head>

<body>




   <?php require '../header.php' ?>


    <section class="bg-img">

        <div class="title-box">
            <div class="title-msg">
                <h1>BEDDING</h1>
            </div>
        </div>
    </section>
    <div class="button-container" id="buttons">
    
    <?php
    // Assuming you have a database connection
    $con = mysqli_connect('localhost', 'root', '', 'ecom');

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Query to fetch categories from the database
    $categoryQuery = "SELECT category_id, category_name FROM categories";
    $categoryResult = mysqli_query($con, $categoryQuery);

    if ($categoryResult && mysqli_num_rows($categoryResult) > 0) {
        echo "<div id='buttons'>";
        echo "<button class='button-value' onclick='filterProduct(\"all\")'>All</button>";

        while ($categoryRow = mysqli_fetch_assoc($categoryResult)) {
            $categoryId = $categoryRow['category_id'];
            $categoryName = $categoryRow['category_name'];

            // Output filter buttons dynamically
            echo "<button class='button-value' onclick='filterProduct(\"$categoryId\")'>$categoryName</button>";
        }

        echo "</div>";
    } else {
        echo "No categories found.";
    }

    mysqli_close($con);
    ?>
    </div>

            <div id="products"><?php
// Assuming you have a database connection
$con = mysqli_connect('localhost', 'root', '', 'ecom');

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to fetch products from the database using product_id
$query = "SELECT product_id, product_name, product_category, product_price, product_thumbnail_image FROM products";
$result = mysqli_query($con, $query);

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='card {$row['product_category']} '>";
        echo "<div class='image-container'>";
        echo "<a class='redirectlink' href='../extra/productpage.php?product_id=" . $row['product_id'] . "'>";
        echo "<img src='{$row['product_thumbnail_image']}' alt='{$row['product_name']}'>";
        echo "</div>";
        echo "<div class='container'>";
        echo "<h5 class='product-name'style='text-align:center;'>" . strtoupper($row['product_name']) . "</h5>";
        echo "</a>";
        echo "<h6 style='text-align:center;'>₹{$row['product_price']}</h6>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "No products found.";
}

mysqli_close($con);
?>
</div>
 </div>



        <?php require '../subscribe.php'?>
      
        <?php require '../footer.php' ?>

<script>
       function filterProduct(categoryId) {
    var cards = document.querySelectorAll('.card');

    cards.forEach(function (card) {
        if (categoryId === 'all' || card.classList.contains(categoryId)) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });

    
  
}


</script>
        
    </body>

</html>