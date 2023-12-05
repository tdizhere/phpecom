<?php
// Start the session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
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
<link rel="stylesheet"href="../bedding/style.css"type="text/css">
    <link rel="canonical" href="https://XYZ.shop/">
    <link rel="icon" type="image/png" href="newlicon.png">
    <link rel="stylesheet" href="../homepage/css/style.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <title>
        Tdiz™
    </title>
<style>
    .container1 {
  max-width: 1200px;
  margin: 0 auto;
  padding: 15px;
  display: flex;
}
/* Columns */
.left-column {
  width: 65%;
  position: relative;
}
 
.right-column {
  width: 35%;
  margin-top: 60px;
}/* Left Column */
.left-column img {
  width: 85%;
  height:400px;
  transition: all 0.3s ease;
}
 

/* Product Description */
.product-description {
  border-bottom: 1px solid #E1E8EE;
  margin-bottom: 20px;
}
.product-description span {
  font-size: 12px;
  color: #358ED7;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-decoration: none;
}
.product-description h1 {
  font-weight: 300;
  font-size: 52px;
  color: #43484D;
  letter-spacing: -2px;
}
.product-description p {
  font-size: 16px;
  font-weight: 300;
  color: #86939E;
  line-height: 24px;
}
/* Product Color */
.product-color {
  margin-bottom: 30px;
}
 
.color-choose div {
  display: inline-block;
}
 

 
.color-choose button {
    border: 2px solid #E1E8EE;
  border-radius: 6px;
  padding: 13px 20px;
  font-size: 14px;
  color: #5E6977;
  background-color: #fff;
  cursor: pointer;
  transition: all .5s;
}

.size-choose {
  margin-bottom: 20px;
}
.selected{
    border-color: black;
    background-color:#E1E8EE ;
}
 
.size-choose button {
  border: 2px solid #E1E8EE;
  border-radius: 6px;
  padding: 13px 20px;
  font-size: 14px;
  color: #5E6977;
  background-color: #fff;
  cursor: pointer;
  transition: all .5s;
}
 

.size-config {
  border-bottom: 1px solid #E1E8EE;
  margin-bottom: 20px;
}
 
.size-config a {
  color: #358ED7;
  text-decoration: none;
  font-size: 12px;
  position: relative;
  margin: 10px 0;
  display: inline-block;
}
 
.size-config a:before {
  content: "?";
  height: 15px;
  width: 15px;
  border-radius: 50%;
  border: 2px solid rgba(53, 142, 215, 0.5);
  display: inline-block;
  text-align: center;
  line-height: 16px;
  opacity: 0.5;
  margin-right: 5px;
}
/* Product Price */
.product-price {
  display: flex;
  align-items: center;
}
 
.product-price span {
  font-size: 26px;
  font-weight: 300;
  color: #43474D;
  margin-right: 20px;
}
 
.cart-btn {
  display: inline-block;
  background-color: #7DC855;
  border-radius: 6px;
  font-size: 16px;
  color: #FFFFFF;
  text-decoration: none;
  padding: 12px 30px;
  transition: all .5s;
}
.cart-btn:hover {
  background-color: #64af3d;
}
	
/* Responsive */
@media (max-width: 940px) {
  .container1 {
    flex-direction: column;
    margin-top: 60px;
  }
 
  .left-column,
  .right-column {
    width: 100%;
  }
 
  .left-column img {
    width: 90%;
    right: 0;
    top: -65px;
    left: initial;
  }
}
 
@media (max-width: 535px) {
  .left-column img {
    width: 90%;
    margin: 0px 1rem;
    top: -85px;
  }
}
</style>
</head>

<body>





    <div class="slideshow-container1">

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


    <?php require '../header.php'?>
    <?php
// Database connection details
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'ecom';

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the product_id from the URL parameter
$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : 1; // Default to 1 if not provided

// Fetch product details from the products table
$product_sql = "SELECT * FROM products WHERE product_id = $product_id";
$product_result = mysqli_query($conn, $product_sql);

// Check if the query was successful
if ($product_result) {
    // Fetch product details as an associative array
    $product = mysqli_fetch_assoc($product_result);

    // Fetch category details from the categories table
    $category_sql = "SELECT category_name FROM categories WHERE category_id = {$product['product_category']}";
    $category_result = mysqli_query($conn, $category_sql);

    // Check if the query was successful
    if (!$category_result) {
        echo "Error fetching category details: " . mysqli_error($conn);
    } else {
        // Fetch category details as an associative array
        $category = mysqli_fetch_assoc($category_result);
    }

    // Fetch color details from the color table
    $color_sql = "SELECT * FROM color WHERE product_id = $product_id";
    $color_result = mysqli_query($conn, $color_sql);

    // Check if the query was successful
    if (!$color_result) {
        echo "Error fetching color details: " . mysqli_error($conn);
    }

    // Fetch size details from the size table
    $size_sql = "SELECT * FROM size WHERE product_id = $product_id";
    $size_result = mysqli_query($conn, $size_sql);

    // Check if the query was successful
    if (!$size_result) {
        echo "Error fetching size details: " . mysqli_error($conn);
    }
} else {
    echo "Error fetching product details: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>

<main class="container1">
    <!-- Left Column / Headphones Image -->
    <div class="left-column">
        <img data-image="black" src="<?php echo $product['product_thumbnail_image']; ?>" alt="">
        <!-- Add similar lines for other sub-images -->
    </div>

    <!-- Right Column -->
    <div class="right-column">
        <!-- Product Description -->
        <div class="product-description">
            <span><?php echo $category['category_name']; ?></span>
            <h1><?php echo $product['product_name']; ?></h1>
            <p><?php echo $product['product_description']; ?></p>
        </div>

        <?php
// Database connection details
             require '../connection.php';
            
        // Get the product_id from the URL parameter
        $product_id = isset($_GET['product_id']) ? $_GET['product_id'] : 1; // Default to 1 if not provided

        // Fetch color details from the color table
        $color_sql = "SELECT * FROM color WHERE product_id = $product_id";
        $color_result = mysqli_query($con, $color_sql);

        // Check if the query was successful
        if ($color_result) {
            // Fetch color details as an associative array
            $color = mysqli_fetch_assoc($color_result);
        } else {
            echo "Error fetching color details: " . mysqli_error($con);
        }

        // Fetch size details from the size table
        $size_sql = "SELECT * FROM size WHERE product_id = $product_id";
        $size_result = mysqli_query($con, $size_sql);

        // Check if the query was successful
        if ($size_result) {
            // Fetch size details as an associative array
            $size = mysqli_fetch_assoc($size_result);
        } else {
            echo "Error fetching size details: " . mysqli_error($con);
        }

        // Close the database connection
        mysqli_close($con);
        ?>
<div class="color">
    <div class="text-color">
        <h4 id="ex-title">Color:</h4>
        <h3 class="color-name"><?php echo $color['color_name1']; ?></h3>
    </div>
    <div class="color-option">
        <button class="color-box active-box" onclick="changeColor('<?php echo $color['color_name1']; ?>', this)" value="<?php echo $color['color_name1']; ?>"><?php echo $color['color_name1']; ?></button>
        <button class="color-box" onclick="changeColor('<?php echo $color['color_name2']; ?>', this)" value="<?php echo $color['color_name2']; ?>"><?php echo $color['color_name2']; ?></button>
        <button class="color-box" onclick="changeColor('<?php echo $color['color_name3']; ?>', this)" value="<?php echo $color['color_name3']; ?>"><?php echo $color['color_name3']; ?></button>
    </div>
</div><br>

<div class="size-title">
    <h4>Size:</h4>
    <h3 class="size-name" id="selectedSizeDisplay"><?php echo $size['size_name1']; ?></h3>
</div>

<div class="size">
    <button class="thin active-box" onclick="changeSize('<?php echo $size['size_name1']; ?>', this)" value="<?php echo $size['size_name1']; ?>"><?php echo $size['size_name1']; ?></button>
    <button class="thin" onclick="changeSize('<?php echo $size['size_name2']; ?>', this)" value="<?php echo $size['size_name2']; ?>"><?php echo $size['size_name2']; ?></button>
    <button class="thin" onclick="changeSize('<?php echo $size['size_name3']; ?>', this)" value="<?php echo $size['size_name3']; ?>"><?php echo $size['size_name3']; ?></button>
</div><br>



        
        <div class="quantity-button">
            <small>Quantity</small><br>
            <div class="Quantity-box">
                <button id="decrease" onclick="decreaseQuantity()">-</button>
                <span id="quantity">1</span>
                <button id="increase" onclick="increaseQuantity()">+</button>
            </div>
        </div><br>
        <script>
    
    let quantity = 1;
    function updateSelectedColor(color) {
    selectedColor = color;
    document.getElementById('selectedColorInput').value = selectedColor;
    document.querySelector('.color-name').textContent = color;
}

function updateSelectedSize(size) {
    selectedSize = size;
    
    document.querySelector('.size-name').textContent = size;
    document.getElementById('selectedSizeDisplay').innerText = size;
}
    

    function decreaseQuantity() {
        if (quantity > 1) {
            quantity--;
            updateQuantity();
        }
    }

    function increaseQuantity() {
        quantity++;
        updateQuantity();
    }

    function updateQuantity() {
        document.getElementById('quantity').innerText = quantity;
        document.getElementById('selectedQuantity').value = quantity;
    }
</script>      
        <!-- Product Pricing -->
        <div class="product-price">
            <span>₹<?php echo $product['product_price']; ?></span>
     <form method="post" action="add_to_cart.php">
    <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>">
    <input type="hidden" name="product_name" value="<?php echo $product['product_name']; ?>">
    <input type="hidden" name="product_price" value="<?php echo $product['product_price']; ?>">
    <input type="hidden" name="product_quantity" id="selectedQuantity" value="1">
    <!-- Add hidden input fields for selected color and size -->
    <input type="hidden" name="selectedColor" id="selectedColorInput" value="<?php echo $color['color_name1']; ?>">
    <input type="hidden" name="selectedSize" id="selectedSizeInput" value="<?php echo $size['size_name1']; ?>">
    <button type="submit" class="cart-btn">Add to cart</button>
</form>

</form>
</div>

        </div>
    </div>
    </div>
    
</div>

   

        </div>

</main>

<?php
// Database connection details
require '../connection.php';

// Get the product_id from the URL parameter
$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : 1; // Default to 1 if not provided

// Fetch product details from the products table
$product_sql = "SELECT * FROM products WHERE product_id = $product_id";
$product_result = mysqli_query($con, $product_sql);

// Fetch features from the features table
$features_sql = "SELECT * FROM features WHERE product_id = $product_id";
$features_result = mysqli_query($con, $features_sql);

// Check if the query was successful
if ($product_result && $features_result) {
    // Fetch product details as an associative array
    $product = mysqli_fetch_assoc($product_result);

    // Fetch features
    $features = array();
    while ($feature = mysqli_fetch_assoc($features_result)) {
        $features[] = $feature;
    }
} else {
    echo "Error fetching product details or features: " . mysqli_error($con);
}

// Close the database connection
mysqli_close($con);
?>

<div class="features">
    <h1 class="feature-title-main">Features</h1>

    <?php
    // Loop through features and display them
    foreach ($features as $index => $feature) {
        $featureNumber = $index + 1;
        $featureId = 'feature' . $featureNumber;
    ?>

        <div class="feature-container">
            <div class="feature" onclick="toggleDetails('<?php echo $featureId; ?>')">
                <div class="feature-title"><?php echo $feature['feature_title']; ?></div>
                <div class="arrow"></div>
            </div>
            <div class="details" id="<?php echo $featureId; ?>">
                <div class="feature-description">
                    <?php echo $feature['feature_description']; ?>
                </div>
            </div>
        </div>

    <?php
    }
    ?>
</div>
<div id="related-products">
<h1 class="feature-title-main">Related products</h1>
    <?php
    // Assuming you have a database connection
    $con = mysqli_connect('localhost', 'root', '', 'ecom');

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get the product details for the current product
    $current_product_sql = "SELECT product_category FROM products WHERE product_id = $product_id";
    $current_product_result = mysqli_query($con, $current_product_sql);

    if ($current_product_result) {
        $current_product = mysqli_fetch_assoc($current_product_result);

        // Fetch related products with the same category (limit to 4 products)
        $related_products_sql = "SELECT product_id, product_name, product_category, product_price, product_thumbnail_image FROM products WHERE product_category = '{$current_product['product_category']}' AND product_id <> $product_id ORDER BY RAND() LIMIT 4";
        $related_products_result = mysqli_query($con, $related_products_sql);

        if ($related_products_result && mysqli_num_rows($related_products_result) > 0) {
            while ($related_row = mysqli_fetch_assoc($related_products_result)) {
                echo "<div class='card {$related_row['product_category']} '>";
                echo "<div class='image-container'>";
                echo "<a class='redirectlink' href='../extra/productpage.php?product_id=" . $related_row['product_id'] . "'>";
                echo "<img src='{$related_row['product_thumbnail_image']}' alt='{$related_row['product_name']}'>";
                echo "</div>";
                echo "<div class='container'>";
                echo "<h5 class='product-name'style='text-align:center;'>" . strtoupper($related_row['product_name']) . "</h5>";
                echo "</a>";
                echo "<h6 style='text-align:center;'>₹{$related_row['product_price']}</h6>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "No related products found.";
        }
    } else {
        echo "Error fetching current product details.";
    }

    mysqli_close($con);
    ?>
</div>


              


    <?php require '../subscribe.php';
          
          // Database connection details
          $host = 'localhost';
          $username = 'root';
          $password = '';
          $database = 'ecom';
          
          // Create a database connection
          $conn = mysqli_connect($host, $username, $password, $database);
          
          // Check connection
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }
          
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
              // Get user_id from the session
              $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 1; // Default to 1 if not provided
          
              // Check if the user_id exists in the users table
              $check_user_query = "SELECT user_id FROM users WHERE user_id = $user_id";
              $result = mysqli_query($conn, $check_user_query);
          
              if (!$result || mysqli_num_rows($result) === 0) {
                  die("Invalid user_id");
              }
          
              // Get email from the form
              $email = mysqli_real_escape_string($conn, $_POST['email']);
          
              // Insert the subscriber data into the subscribers table
              $insert_query = "INSERT INTO subscribers (user_id, email_id) VALUES ($user_id, '$email')";
              
              if (mysqli_query($conn, $insert_query)) {
                  echo "<script>alert ('Subscription successful!'); </script>";
              } else {
                  echo "Error: " . mysqli_error($conn);
              }
          }
          
          // Close the database connection
          mysqli_close($conn);
          ?>
      
      <?php require '../footer.php' ?>

<script>
    function changeColor(color, button) {
        // Remove "active-box" class from all color buttons
        document.querySelectorAll('.color-box').forEach(btn => btn.classList.remove('active-box'));

        // Add "active-box" class to the clicked color button
        button.classList.add('active-box');

        // Update the selected color name
        document.querySelector('.color-name').textContent = color;

        // Additional logic to handle color change
        // UpdateHiddenFields(); // Uncomment this line if you have an updateHiddenFields() function
    }

    function changeSize(size, button) {
        // Remove "active-box" class from all size paragraphs
        document.querySelectorAll('.thin').forEach(btn => btn.classList.remove('active-box'));

        // Add "active-box" class to the clicked size paragraph
        button.classList.add('active-box');

        // Update the selected size name
        document.querySelector('.size-name').textContent = size;
    }
    // Function to update hidden input fields with selected size and color
    function updateHiddenFields() {
        document.querySelector('input[name="selectedSize"]').value = selectedSize;
        document.querySelector('input[name="selectedColor"]').value = selectedColor;
    }

    

    </script>

</body>
</html>