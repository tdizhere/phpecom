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
    <link rel="stylesheet" href="./css/style.css" type="text/css">



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <title>
        Tdiz™
    </title>

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
    <script src="./js/script.js"></script>
    






    <?php
// Include the database connection file
require '../connection.php';
require '../header.php';

// Fetch images from the database
$sql = "SELECT carousel_image1, carousel_image2, carousel_image3 FROM homepage";
$result = $con->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    $images = $result->fetch_all(MYSQLI_ASSOC); // Fetch all rows as an associative array
}

// Close the database connection
$con->close();
?>

<section class="hero-carousel">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-inner">
            <?php
            // Generate carousel items
            if (!empty($images)) {
                foreach ($images as $index => $image) {
                    $activeClass = ($index === 0) ? 'active' : '';
                    echo '<div class="carousel-item ' . $activeClass . '">';
                    echo '<img src="' . $image['carousel_image1'] . '" class="d-block w-100" alt="image">';
                    echo '</div>';
                }
            } else {
                echo 'no data';
            }
            ?>
        </div>

        <!-- Remove the carousel-indicators -->
    </div>
</section>

    <!--product card -->
    <?php
// Include the database connection file
require '../connection.php';

// Fetch product IDs from homepage table
$sql = "SELECT collection_section_product1, collection_section_product2, collection_section_product3, collection_section_product4 FROM homepage";
$result = $con->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    $productIDs = $result->fetch_assoc();

    // Fetch product details from products table
    $sql = "SELECT * FROM products WHERE product_id IN ('" . implode("','", $productIDs) . "')";
    $result = $con->query($sql);

    // Check if there are any results
    if ($result->num_rows > 0) {
        $products = $result->fetch_all(MYSQLI_ASSOC);
    } else {
        $products = array();
    }
} else {
    $products = array();
}

// Close the database connection
$con->close();
?>

<section class="collection" style="color:#15396A;">
    <h1 style="font-size:2.5rem;margin:45px 0px 10px 45px;" class="collection-title">Collection</h1>
    <div class="collection-cards">
        <div class="product-container">
            <?php
            // Generate product cards with links
            foreach ($products as $product) {
                echo '<a href="../extra/productpage.php?product_id=' . $product['product_id'] . '" class="product-link">';
                echo '<div class="product-card">';
                echo '<div class="product-image">';
                if (!empty($product['discount'])) {
                    echo '<span class="discount-tag">' . $product['discount'] . ' off</span>';
                }
                echo '<img src="' . $product['product_thumbnail_image'] . '" class="product-thumb" alt="">';
                
                echo '</div>';
                echo '<div class="product-info">';
                echo '<h3 class="product-brand">' . $product['product_name'] . '</h3>';
                
                echo '<div class="prices">';
                echo '<span class="price">RS' . $product['product_price'] . '</span>';
                if (!empty($product['discount'])) {
                    echo '<span class="actual-price">RS' . ($product['product_price'] - $product['discount']) . '</span>';
                }
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</a>';
            }
            ?>
        </div>
    </div>
</section>


<?php
// Include the database connection file
require '../connection.php';

// Fetch data from homepage table
$sql = "SELECT card_1_img, card_1_body_title, card_1_body_text,
               card_2_img, card_2_body_title, card_2_body_text,
               card_3_img, card_3_body_title, card_3_body_text
        FROM homepage";
$result = $con->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    $cardsData = $result->fetch_assoc();
} else {
    $cardsData = array();
}

// Close the database connection
$con->close();
?>

<section class="cards-section2" style="color:#15396A;">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            <?php
            // Generate cards based on fetched data
            for ($i = 1; $i <= 3; $i++) {
                $cardImgKey = "card_{$i}_img";
                $cardTitleKey = "card_{$i}_body_title";
                $cardTextKey = "card_{$i}_body_text";

                echo '<div class="col mb-4">';
                echo '<div class="card custom-rounded-card">';
                echo '<div class="img">';
                echo '<img src="' . $cardsData[$cardImgKey] . '" alt="Card Image ' . $i . '" class="card-img-top">';
                echo '</div>';
                echo '<div class="card-body">';
                echo '<h5 class="card-title title-size">' . $cardsData[$cardTitleKey] . '</h5>';
                echo '<p class="card-text text-size">' . $cardsData[$cardTextKey] . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</section>
<?php
// Include the database connection file
require '../connection.php';

// Fetch product IDs from homepage table
$sql = "SELECT top_product1, top_product2, top_product3 FROM homepage";
$result = $con->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    $topProductIDs = $result->fetch_assoc();

    // Fetch product details from products table
    $sql = "SELECT * FROM products WHERE product_id IN ('" . implode("','", $topProductIDs) . "')";
    $result = $con->query($sql);

    // Check if there are any results
    if ($result->num_rows > 0) {
        $topProducts = $result->fetch_all(MYSQLI_ASSOC);
    } else {
        $topProducts = array();
    }
} else {
    $topProducts = array();
}

// Close the database connection
$con->close();
?>

<section class="top-product">
    <div class="container">
        <div class="alternate-section">
            <?php
            // Generate top product section based on fetched data
            foreach ($topProducts as $index => $product) {
                $divClass = ($index % 2 == 0) ? 'alternate-div' : 'alternate-div2';
                $imageDivClass = ($index % 2 == 0) ? 'image-div' : 'image-div2';
                $textDivClass = ($index % 2 == 0) ? 'text-div' : 'text-div2';

                echo '<div class="' . $divClass . '">';
                echo '<div class="' . $imageDivClass . '">';
                echo '<img src="' . $product['product_thumbnail_image'] . '" alt="Image ' . ($index + 1) . '">';
                echo '</div>';
                echo '<div class="' . $textDivClass . '">';
                echo '<h2>' . $product['product_name'] . '</h2>';
                echo '<p>' . $product['product_description'] . '</p>';
                echo '<a href="../extra/productpage.php?product_id=' . $product['product_id'] . '" class="shop-now-link">';
                echo '<button class="shop-now-button">Shop Now</button>';
                echo '</a>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</section>

<?php
// Include the database connection file
require '../connection.php';

// Fetch 4 random product IDs from the products table
$sql = "SELECT product_id, product_name, product_price, product_description, product_thumbnail_image FROM products ORDER BY RAND() LIMIT 4";
$result = $con->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    $randomProducts = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $randomProducts = array();
}

// Close the database connection
$con->close();
?>

<section class="all-products" style="color: #15396a;">
    <p class="header-style">ALSO CHECKOUT</p>
    <div class="row">
        <?php
        // Generate product cards with random product data
        foreach ($randomProducts as $product) {
            echo '<div class="col-md-3 col-sm-6">';
            echo '<div class="product-grid">';
            echo '<div class="product-image">';
            echo '<a href="../extra/productpage.php?product_id=' . $product['product_id'] .'" class="image">';
            echo '<img class="img-1" src="' . $product['product_thumbnail_image'] . '">';
            echo '</a>';
            echo '</div>';
            echo '<div class="product-content">';
            echo '<div class="price">Rs' . $product['product_price'] . '</div>';
            echo '<h3 class="title"><a href="../extra/productpage.php?product_id=' . $product['product_id'] . '">' . $product['product_name'] . '</a></h3>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</section>



    <div class="blog-title">

        <h2>Blog Post</h2>
    </div>
    <?php
// Include the database connection file
require '../connection.php';

// Fetch 2 random blog posts from the blogpage table
$sql = "SELECT blog_id, blog_title, blog_thumbnail_image, blog_detail FROM blogpage ORDER BY RAND() LIMIT 2";
$result = $con->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    $randomBlogs = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $randomBlogs = array();
}

// Close the database connection
$con->close();
?>

<section class="blog-post">

    <?php
    // Generate blog post cards with random blog data
    foreach ($randomBlogs as $index => $blog) {
        $postNumber = $index + 1;

        // Limit the number of words in blog detail
        $blogDetail = implode(' ', array_slice(explode(' ', $blog['blog_detail']), 0, 20));

        echo '<div class="post' . $postNumber . '">';
        echo '<a href="../extra/blogpage.php?blog_id=' . $blog['blog_id'] . '" target="_blank" class="blog-a">';
        echo '<div class="blog-image">';
        echo '<img src="' . $blog['blog_thumbnail_image'] . '" alt="">';
        echo '</div>';
        echo '<div class="blog-data">';
        echo '<div class="under">' . $blog['blog_title'] . '</div>';
        echo '<small>' . $blogDetail . '......</small>'; // Display limited words
        echo '</div>';
        echo '</a>';
        echo '</div>';
    }
    ?>

</section>

    
    
    
<?php require '../footer.php';?>
    <script>
    </script>
</body>

</html>