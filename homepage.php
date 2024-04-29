<?php
@include 'config.php';
// Fetch testimonials from the database
$select = mysqli_query($conn, "SELECT * FROM products");
$products = mysqli_fetch_all($select, MYSQLI_ASSOC);

// Define the current page
$currentPage = 'home';
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
            <li><a href="https://www.shangaempower.com/homepage.php" class="active">Home</a></li>
            <li><a href="https://www.shangaempower.com/about-us.php">About Us</a></li>
            <li><a href="https://www.shangaempower.com/projects.php">Projects</a></li>
            <li class="dropdown">
                <a href="https://shangaempower.com/services.php">Services</a>


            </li>
            <li><a href="https://www.shangaempower.com/contact.php">Contact us</a></li>
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

<div class="shangatext">
    <h6>Shanga Empower</h6>
</div>
<!-- <div class="whitie-container">
    <div class="whitie">
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-6">
            <div class="back">
              <div class="shanga">
                <h4>
                  Shanga Empower is a business development and growth consultancy that works with businesses to identify weaknesses and challenges and sustainable solutions. We explore growth opportunities for the success of the businesses, with a focus on Finance, sales and marketing strategies and business development. You can reach out to us via <a href="mailto:shangaempower94@gmail.com" style="color: gray;">email</a>.<br>
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
    
        </div>

        <div class="whyte">
        <div class="cardz-container">
              <div class="cardz">
                <h3>Administration</h3>
                <p>You will find the latest information about our company here. You will find the latest information about our company here. You will find the latest information about our company here...</p>
              </div>
              <div class="cardz">
                <h3>Territory</h3>
                <p>You will find the latest information about our company here. You will find the latest information about our company here. You will find the latest information about our company here...</p>
              </div>
              <div class="cardz">
                <h3>consultancy</h3>
                <p>You will find the latest information about our company here. You will find the latest information about our company here. You will find the latest information about our company here...</p>
              </div>
            </div>
            <div class="about-card">
  <div class="card-content">
    <div class="card-image">
      <img src="imgs/sean-pollock-PhYq704ffdA-unsplash.jpg" alt="About Us Image">
    </div>
    <div class="about-text">
      <h2>About Us</h2>
      <p> Shanga Empower is a business development and growth consultancy that works with businesses to identify weaknesses and challenges and sustainable
solutions. We explore growth opportunities for the success of the businesses,with a focus on Finance, sales and marketing strategies and business development.
You can reach out to us via <a href="mailto:shangaempower94@gmail.com" style=color:gray;>email</a>.<br></p>

    </div>
  </div>

  <div class="card-content">
    <div class="card-image">
      <img src="imgs\khah-hay-chee-OSp128rBRos-unsplash.jpg" alt="About Us Image">
    </div>
    <div class="about-text">
      <h2>Services</h2>
      <p> We are a business consultant agency. whenever youu want any consultations, kindly contact us <a href="mailto:shangaempower94@gmail.com" style=color:gray;>email</a>.<br></p>
      <p class="thep">click <a href="https://shangaempower.com/services.php">here</a> to learn more about out services.</p>
    </div>
  </div>
  <div class="carrd-row">
  <div class="carrd">
    <div class="carrd-image">
      <img src="imgs\User1.jpg" alt="Image 1">
    </div>
    <div class="card-details">
      <h4>Wilkister Adie.</h4>
      <p><a href="http://www.linkedin.com/in/wilkister-adie-a91504167">in</a></p>
      <p>Profession 1</p>
    </div>
  </div>
  <div class="carrd">
    <div class="carrd-image">
      <img src="imgs\user2.jpg" alt="Image 2">
    </div>
    <div class="card-details">
      <h4>Temesi Weboko</h4>
      <p><a href="http://www.linkedin.com/in/temesi-weboko-146800139">in</a></p>
      <p>Profession 2</p>
    </div>
  </div>
  <div class="carrd">
    <div class="carrd-image">
      <img src="imgs\User3.jpg" alt="Image 3">
    </div>
    <div class="card-details">
      <h4>Lilian Wanjiku</h4>
      <p><a href="https://www.linkedin.com/in/lilian-wanjiku-863109102/">in</a></p>
      <p>Accountant</p>
    </div>
  </div>
</div>

   
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
