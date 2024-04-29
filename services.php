<?php
@include 'config.php';
// Fetch testimonials from the database
$select = mysqli_query($conn, "SELECT * FROM products");
$products = mysqli_fetch_all($select, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shanga Empower</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css?v=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">


    <link rel="icon" href="imgs\Logo.jpg" type="image/icon type">
    <style>
        .whyte{
            margin-bottom:200px;
        }
    </style>
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
                <a href="https://shangaempower.com/services.php" class="active">Services</a>


            </li>
            <li><a href="https://www.shangaempower.com/contact.php">Contact us</a></li>
        </ul>
        <div class="burger-icon" id="burger-icon">
            <i class="fa fa-bars"></i>
        </div>
    </nav>
</div>


   
</header>
<main>
<div class="cardon-row">
  <div class="cardon">
    <h3>Strategic Management</h3>
    <p>we offer high quality strategic management. Reach out and get the first hand experience.</p>
  </div>
  <div class="cardon">
    <h3>Training</h3>
    <p>we offer high quality strategic management. Reach out and get the first hand experience.</p>
  </div>
</div>
<div class="cardon-row">
  <div class="cardon">
    <h3>Business Development</h3>
    <p>we offer high quality strategic management. Reach out and get the first hand experience.</p>
  </div>

</div>
<div class="whyte">
<div class="card-content">
    <div class="card-image">
      <img src="imgs\khah-hay-chee-OSp128rBRos-unsplash.jpg" alt="About Us Image">
    </div>
    <div class="about-text">
      <h2>Free consultation</h2>
      <p> We are a business consultant agency. whenever youu want any consultations, kindly contact us <a href="mailto:shangaempower94@gmail.com" style=color:gray;>email</a>.<br></p>
      <button >Start Now</button>
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
