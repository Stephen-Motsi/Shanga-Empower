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


    <link rel="icon" href="imgs\Logo.jpg" type="image/icon type">
    <style>
        .whyte{
            margin-top: 100px;
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
            <li><a href="https://www.shangaempower.com/about-us.php" class="active">About Us</a></li>
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
<main>

<div class="whyte">
<div class="aboutt">
    <h3>About Us.</h3>
</div>
    
        </div>
    <div class="back">
    <div class="shanga">
        <h4> Shanga Empower is a business development and growth consultancy that works with businesses to identify weaknesses and challenges and sustainable
solutions. We explore growth opportunities for the success of the businesses,with a focus on Finance, sales and marketing strategies and business development.
You can reach out to us via <a href="mailto:shangaempower94@gmail.com" style=color:gray;>email</a>.<br>

    </h4>
    </div>

    </div>

<div class="whyte">
<div class="boot">
    <div class="clicknfo" id=theinfo>

    </div>
            <div class="about-card">
  <div class="card-content">
    <div class="card-image">
      <img src="imgs/sean-pollock-PhYq704ffdA-unsplash.jpg" alt="About Us Image">
    </div>
    <div class="about-text">
      <h2>Management</h2>
      <p> Shanga Empower is a business development and growth consultancy that works with businesses to identify weaknesses and challenges and sustainable
solutions. We explore growth opportunities for the success of the businesses,with a focus on Finance, sales and marketing strategies and business development.
You can reach out to us via <a href="mailto:shangaempower94@gmail.com" style=color:gray;>email</a>.<br></p>
    </div>
  </div>


</div>
<div class="about-card">
  <div class="card-content">
    <div class="card-image">
      <img src="imgs\eelco-bohtlingk-_sgDGhHTk4o-unsplash.jpg" alt="About Us Image">
    </div>
    <div class="about-text">
      <h2>Services</h2>
      <p> Shanga Empower is a business development and growth consultancy that works with businesses to identify weaknesses and challenges and sustainable
solutions. We explore growth opportunities for the success of the businesses,with a focus on Finance, sales and marketing strategies and business development.
You can reach out to us via <a href="mailto:shangaempower94@gmail.com" style=color:gray;>email</a>.<br></p>
    </div>
  </div>
<div class="tteam">
    <h3>Our team</h3>
</div>

</div>

        <div class="row">
            <div class="col">

                <div class="cards" id="cards">
                    <div class="card">
                        <div class="theImg">
                            <ul><li><img id="imagge" src="imgs\User1.jpg" alt=""></li></ul>
                        </div>
                  <div class="info">
                    <ul>
                            
                        <a href="http://www.linkedin.com/in/wilkister-adie-a91504167"><li>Wilkister Adie</li></a>
                        <blockquote class="blockstyle">
                            <span class="triangle"></span>If your mind can conceive it, you have the potential to do it.
                         </blockquote>
                          
                    </ul>
                  </div>
                     
                    </div>


                    <div class="card">
                        <div class="theImg">
                            <ul><li><img id="imagge1" src="imgs\user2.jpg" alt=""></li></ul>
                        </div>
                  <div class="info">
                    <ul>
                            
                        <a href="http://www.linkedin.com/in/temesi-weboko-146800139"><li>Temesi  Weboko</li></a>
                        <blockquote class="blockstyle">
                            <span class="triangle"></span>Fall seven times and stand up eight.
                         </blockquote>
                          
                    </ul>
                  </div>
                     
                    </div>

                    <div class="card">
                        <div class="theImg">
                            <ul><li><img id="imagge2" src="imgs\User3.jpg" alt=""></li></ul>
                        </div>
                  <div class="info">
                    <ul>
                            
                        <a href="https://www.linkedin.com/in/lilian-wanjiku-863109102/"><li>Lilian Wanjiku</li></a>
                        <blockquote class="blockstyle">
                            <span class="triangle"></span>The primary step towards advancement and upward growth entails developing a mindset that accepts the possibility of error while upholding a steadfast dedication to continuous improvement.
                         </blockquote>
                          
                    </ul>
                  </div>
                     
                    </div>

                </div>
            </div>
            <div class="col">
<!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <div class="imgg">
        <img src="imgs\User1.jpg" style="width:100%">
      </div>

      <div class="text">Wilkister Adie</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <div class="imgg">
        <img src="imgs\user2.jpg" style="width:100%">
      </div>

      <div class="text">Temesi  Weboko</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <div class="imgg">
        <img src="imgs\User3.jpg" style="width:100%">
      </div>
      
      <div class="text">Lilian Wanjiku</div>
    </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  
  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
                </div>

                  
            </div>
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