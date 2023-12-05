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
    <meta property="og:url" content="https://XYZ.shop/blogpage">
    <meta property="og:title" content="XYZ™">
    <meta property="og:type" content="website">
    <meta property="og:description" content="XYZ™">
    <script src="https://kit.fontawesome.com/3db7f7f4a7.js" crossorigin="anonymous"></script>

    <link rel="canonical" href="https://XYZ.shop/blogpage">
    <link rel="icon" type="image/png" href="newlicon.png">
    <link rel="stylesheet" href="../homepage/css/style.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="../pages/style.css" type="text/css">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <title>
        Blogpage-Tdiz™
    </title>
    <style>
        .hero {
        width: 100%;
        height: 650px;
        margin-top: 20px;
        margin-bottom: 20px;
        background-repeat: no-repeat;
        background-size: cover;
        color: #15346a;
        text-align: center;
        }
    </style>
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
    


<?php require '../header.php';?>

<?php
require '../connection.php';


// Retrieve the blog ID from the URL parameter
$blogID = $_GET['blog_id'];

// SQL query to fetch the specific blog post
$sql = "SELECT * FROM blogpage WHERE blog_id = $blogID";
$result = $con->query($sql);

// Check if there are rows in the result
if ($result->num_rows > 0) {
    // Fetch the blog post data
    $row = $result->fetch_assoc();
    $blogTitle = $row['blog_title'];
    $blogDetail = $row['blog_detail'];
    $blogQuestions = $row['blog_question'];
    $blogAnswers = $row['blog_answer'];
    $thumbnailImage = $row['blog_thumbnail_image'];
    // Add other fields as needed

    echo '<div class="hero" style="background-image: url(' . $thumbnailImage . ');">
    <div class="msg">
        <p>Tdiz was brought to life with a simple realization -</p>
        <h1>when it comes to your home,<br> every little detail counts. </h1>
    </div>

</div>';
    echo '<div class="blog-title-page">' . $blogTitle . '</div>';
    echo '<div class="blog-details">' . $blogDetail . '</div>';
    echo '<div class="blog-questions">';
    echo '<span class="question">' . $blogQuestions . '</span><br>';
    echo '<span class="answer">' . $blogAnswers . '</span>';
    echo '</div>';
} else {
    echo "Blog post not found";
}

// Close the database connection
$con->close();
?>


    
<?php require '../subscribe.php';?>

<?php require '../footer.php';?>
</body>

</html>