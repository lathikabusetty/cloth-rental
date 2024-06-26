<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloth Rental Shop</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to Cloth Rental Shop</h1>
        <nav>
            <ul>
                <li><a href="men.html">Men</a></li>
                <!-- Updated the href attribute to point to women.html -->
                <li><a href="women.html">Women</a></li>
                <!-- Add more sections as needed -->
            </ul>
        </nav>
    </header>
    <div class="background">
        <div class="container">
            <!-- Content will be dynamically loaded here -->
            <section id="men">
                <h2>Men's Collection</h2>
                <!-- Display men's clothing items -->
            </section>
            <section id="women">
                <h2>Women's Collection</h2>
                <!-- Display women's clothing items -->
            </section>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Cloth Rental Shop</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
