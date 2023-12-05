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
    <meta property="og:url" content="https://XYZ.shop/blogs">
    <meta property="og:title" content="XYZ™">
    <meta property="og:type" content="website">
    <meta property="og:description" content="XYZ™">
    <script src="https://kit.fontawesome.com/3db7f7f4a7.js" crossorigin="anonymous"></script>

    <link rel="canonical" href="https://XYZ.shop/blogs">
    <link rel="icon" type="image/png" href="newlicon.png">
    <link rel="stylesheet" href="../homepage/css/style.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <title>
        Blogs-Tdiz™
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
    <script src="../homepage/js/script.js"></script>
    <?php require '../header.php'; ?>

    <div class="page-title">
        <span class="title-page" style="color: #15396a; font-size: 3rem; margin-top: 3rem !important; padding: 4rem;">Know The Fabric!</span>
    </div>
    <section class="">
    <?php
    // Assuming you have a database connection established
    require '../connection.php';

    // SQL query to fetch blog posts
    $sql = "SELECT * FROM blogpage";
    $result = $con->query($sql);

    // Check if there are rows in the result
    if ($result->num_rows > 0) {
        // Loop through each row in the result set
        $cardCount = 0;
        while ($row = $result->fetch_assoc()) {
            $blogID = $row['blog_id']; // Assuming the column name is 'blog_id'
            $thumbnailImage = $row['blog_thumbnail_image'];
            $blogTitle = $row['blog_title'];
            $blogDetail = $row['blog_detail'];
            if ($cardCount % 2 == 0) {
                echo '<div class="row">';
            }
            // Output HTML dynamically using fetched data
            echo '<div class="col-12 col-md-6">';
            echo '<div class="posts">';
            // Link to the blog detail page with the blog ID as a parameter
            echo '<a href="blogpage.php?blog_id=' . $blogID . '" class="blog-a">';
            echo '<div class="blog-images">';
            echo '<img src="' . $thumbnailImage . '" alt="">';
            echo '</div>';
            echo '<div class="blog-datas">';
            echo '<div class="under">' . $blogTitle . '</div>';
            echo '<small>' . $blogDetail . '</small>';
            echo '</div>';
            echo '</a>';
            echo '</div>';
            echo '</div>';

            // Increase the card count
            $cardCount++;

            // Close the row and start a new row after every two cards
            if ($cardCount % 2 == 0) {
                echo '</div><div class="row">';
            }
        }
    } else {
        echo "0 results";
    }


    // Close the database connection
    $con->close();
    ?>
</section>

    <?php require '../subscribe.php'; ?>
   <?php require '../footer.php'; ?>
</body>


</html>