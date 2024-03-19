<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freshly Baked</title>
    <link rel="stylesheet" href="style.css"> <!-- You can create this file to add styles -->
    <style>
        /* CSS to initially hide all banner images except the first one */
        .banner-container img:not(:first-child) {
            display: none;
        }
    </style>
</head>
<body>
    <header>
        <nav class="main-nav">
            <ul>
                <li><a href="#">HOME</a></li>
                <li class="dropdown">
                    <a href="#">ABOUT US</a>
                    <div class="dropdown-content">
                        <a href="#">Our Story</a>
                        <a href="#">Our Team</a>
                    </div>
                </li>
                <li><img src="images/logo.png" alt="Freshly Baked Logo" height="150" width="150"></li>
                <li class="dropdown">
                    <a href="#">BLOG</a>
                    <div class="dropdown-content">
                        <a href="#">Latest Posts</a>
                        <a href="#">Categories</a>
                    </div>
                </li>
                <li><a href="#">CONTACT</a></li>
            </ul>
        </nav>
        <section class="banner">
            <div class="banner-container">
                <img src="images/banner1.jpg" alt="Banner Image 1" height="500px">
                <img src="images/banner2.jpg" alt="Banner Image 2" height="500px">
                <!-- Add more images as needed -->
            </div>
        </section>
        <h1>Freshly Baked</h1>
        <p>Indulge in our freshly baked treats made with the finest ingredients and crafted with love.</p>
    </header>
    
    <main>
        <h2>Featured Items</h2>
        <div class="item-container">
            <?php
            $featured_items = array(
                "Chocolate Cake" => "$10.99",
                "Apple Pie" => "$8.99",
                "Croissants" => "$3.49"
            );

            foreach ($featured_items as $item => $price) {
                echo "<div class='item-card'>";
                echo "<img src='images/$item.jpg' alt='$item' height=100 width=100>";
                echo "<h3>$item</h3>";
                echo "<p>Price: $price</p>";
                echo "</div>";
            }
            ?>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 My Bakery</p>
    </footer>

    <script>
        // JavaScript for changing banner images
        const bannerImages = document.querySelectorAll('.banner-container img');
        let currentImageIndex = 0;

        function changeBannerImage() {
            bannerImages[currentImageIndex].style.display = 'none'; // Hide current image
            currentImageIndex = (currentImageIndex + 1) % bannerImages.length; // Increment index
            bannerImages[currentImageIndex].style.display = 'block'; // Show next image
        }

        // Change banner image every 3 seconds
        setInterval(changeBannerImage, 2000);
    </script>
</body>
</html>
