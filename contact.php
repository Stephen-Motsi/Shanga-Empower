<?php
@include 'config.php';
// Fetch testimonials from the database
$select = mysqli_query($conn, "SELECT * FROM products");
$products = mysqli_fetch_all($select, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shanga Empower</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css?v=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">
  <style>
    .whyte{
        margin-top: -150px;
    }
    .what{
        margin-top: 150px;
    }
  </style>


    <link rel="icon" href="imgs\Logo.jpg" type="image/icon type">
</head>
<body>
<header>
<div class="spaces">
<div class="title-container">
        <div class="logo-title">
            <div class="logo">
                <img src="imgs/Logo-removebg-preview.jpg" alt="Logo">
            </div>
            <h1 class="title">
                Shanga Empower
            </h1>
        </div>

    </div>
    <nav class="navbar">
        <ul class="nav-links">
            <li><a href="https://www.shangaempower.com/homepage.php">Home</a></li>
            <li><a href="https://www.shangaempower.com/about-us.php">About Us</a></li>
            <li><a href="https://www.shangaempower.com/projects.php">Projects</a></li>
            <li class="dropdown">
                <a href="https://shangaempower.com/services.php">Services</a>


            </li>
            <li><a href="https://www.shangaempower.com/contact.php" class="active">Contact us</a></li>
        </ul>
        <div class="burger-icon" id="burger-icon">
            <i class="fa fa-bars"></i>
        </div>
    </nav>
</div>


   
</header>
<div class="spaces">
<div class="title-container">
        <div class="logo-title">
            <div class="logo">
                <img src="imgs/Logo-removebg-preview.jpg" alt="Logo">
            </div>
            <h1 class="title">
                Shanga Empower
            </h1>
        </div>

    </div>
    <nav class="navbar">
    <ul class="nav-links">
        <li><a href="https://www.shangaempower.com/homepage.php" class="<?php if ($currentPage == 'home') echo 'active'; ?>">Home</a></li>
        <li><a href="https://www.shangaempower.com/about-us.php" class="<?php if ($currentPage == 'about') echo 'active'; ?>">About Us</a></li>
        <li><a href="https://www.shangaempower.com/projects.php" class="<?php if ($currentPage == 'projects') echo 'active'; ?>">Projects</a></li>
        <li class="dropdown">
            <a href="https://shangaempower.com/services.php" class="<?php if ($currentPage == 'services') echo 'active'; ?>">Services</a>
        </li>
        <li><a href="https://www.shangaempower.com/contact.php" class="<?php if ($currentPage == 'contact') echo 'active'; ?>">Contact us</a></li>
    </ul>
    <div class="burger-icon" id="burger-icon">
        <i class="fa fa-bars"></i>
    </div>
</nav>

</div>


   
</header>
<main>
    <div class="whyte">
    <div class="what">
    <h5>Our Contacts.</h5>
        <div class="carrdss">
            <div class="cardt">
                <h6>Contact</h6>
                <p>This is my contact.</p>
            </div>
            <div class="cardt">
            <h6>Contact</h6>
                <p>This is my contact.</p>
            </div>
            <div class="cardt">
            <h6>Contact</h6>
                <p>This is my contact.</p>
            </div>
        </div>
    </div>
    </div>

</main>

   
<script src="index.js"></script>
    
</body>
<footer>
<ul>
    <a href="">
        <li></li>
    </a>
    <a href="">
        <li></li>
    </a>
    <a href="">
        <li></li>
    </a>
</ul>
</footer>
</html>
