<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bakery</title>
    <link rel="stylesheet" href="style.css"> <!-- You can create this file to add styles -->
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/logo.png" alt="My Bakery Logo">
        </div>
        <nav class="left-nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <h1>Freshly Baked</h1>
        <p>Indulge in our freshly baked treats made with the finest ingredients and crafted with love.</p>
    </header>
    
    <main>
        <h2>Featured Items</h2>
        <?php
        $featured_items = array(
            "Chocolate Cake" => "$10.99",
            "Apple Pie" => "$8.99",
            "Croissants" => "$3.49"
        );

        foreach ($featured_items as $item => $price) {
            echo "<div class='item'>";
            echo "<h3>$item</h3>";
            echo "<p>Price: $price</p>";
            echo "<img src='images/$item.jpg' alt='$item'>";
            echo "</div>";
        }
        ?>
    </main>

    <footer>
        <p>&copy; 2024 My Bakery</p>
    </footer>
</body>
</html>
