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
    <link rel="stylesheet" href="styles.css">
    <style>
        
        button{
color: white;
background:	#36454F;
padding:0 20px;
border-radius: 10px;
border:2px solid black
}
.shanga{
max-width: 1000px;
display: inline-block;
color:white;
/*background: rgba(0, 0, 0, 0.5);*/

}

.back{
    background:rgba(0, 0, 0, 0.5);
    width: 100%;
    height: fit-content;
}
nav {
    display: flex;
    margin-bottom: 20px;
    background: wheat;
    justify-content: space-around;
}
nav ul {
  list-style: none;
  padding: 0;
}

nav ul li {
  display: inline;
  margin-right: 20px;
}

nav ul li a {
  text-decoration: none;
  color: white;
}

/* Add the following styles to remove underlines and dots */
nav ul li a:hover {
  text-decoration: none;
}

nav ul li a:focus,
nav ul li a:active {
  outline: none;
  text-decoration: none;
}

main .back{  
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
    text-align: center;
}
.info li{
  font-style: sans-serif;
  font-size: 40px;
  /*color: #fdb714;*/
  color: black;
}

.slideshow-container{
    min-width: 400px;
}
.what{
            text-align: center;


        }
        .what h5{
  color: #fdb714;
  font-size: 30px;
  width: 100%;
            background: black;
            padding-bottom: 10px;
            padding-top:10px ;
}
.cardt{
    min-width: 260px;
    min-height: 180px;
    max-width:260px;
    max-height: 180px;
    background: gray;
    border-radius: 15px;
    margin-bottom: 20px;

}


.carrdss {
    display: flex;
    justify-content: space-around;

    border-bottom: 6px solid black;
}


.cardt h6 {
    font-size: 25px;
    margin: 30px;
}
.cardt p{
    background: white;
    /* border-left: 5px solid gray;
    border-right: 5px solid gray;
    border-radius: 25px; */

}


/* @media (max-width: 1030px) {
    .row {
        display: block;
    }
} */
#theinfo{
  text-align: center;
  max-width: 100%;
  background: black;
}
#theinfo h5{
  font-size: 30px;
}
@media (max-width: 890px){
  .carrdss{
    display: grid;
    align-items: center;
  }

}
    </style>
    <link rel="icon" href="imgs\Logo.jpg" type="image/icon type">
</head>
<body>
    <header>
        <div class="title-space">
            <div class="logo">
                <img src="imgs\Logo.jpg" alt="">
            </div>
        <div class="title-container">
            <h1 class="title">
                Shanga Empower
            </h1>
        </div>
        
        </div>
        <nav>
<ul>
    <a href=""><li>Home</li></a>
    <a href=""><li>About Us</li></a>
    <a href=""><li>Testimonials</li></a>
    <a href=""><li>Projects</li></a>
    <li>Services</li>
    <a href=""><li>Contact us</li></a>
</ul>
        </nav>
    </header>
<main>

        
    
        </div>
    <div class="back">
    <div class="shanga">
        <h4> Shanga Empower is a business development and growth consultancy that works with businesses to identify weaknesses and challenges and sustainable
solutions. We explore growth opportunities for the success of the businesses,with a focus on Finance, sales and marketing strategies and business development.
You can reach out to us via <a href="mailto:shangaempower94@gmail.com" style=color:gray;>email</a>.<br>

    </h4>
    </div>

    </div>

    <div class="what">
    <h5>What We Do.</h5>
    <div class="carrdss">
        <div class="cardt">
            <h6>business</h6>
            <p>we do this bbusiness for the sake of our clients.</p>
        </div>
        <div class="cardt">
            <h6>business</h6>
            <p>we do this bbusiness for the sake of our clients.</p>
        </div>
        <div class="cardt">
            <h6>business</h6>
            <p>we do this bbusiness for the sake of our clients.</p>
        </div>
    </div>
    
    

    </div>


        
 

    <div class="boot">
    <div class="clicknfo" id=theinfo>
<h5>Team</h5>
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
</main>
<section>
    <div class="feedback">
        <h2><span class="testimonialls">Testimonials</span></h2> 
        <div class="card2">
            <?php foreach ($products as $products) { ?>
                <div class="ccard">
                <div class="theImg">
    <ul><li>
        <?php $imagePath = 'uploaded_img/' . htmlspecialchars($products['image']); ?>
        <img src="<?php echo $imagePath; ?>" height="100" alt="">
    </li></ul>
    <ul>
        <a href="<?php echo htmlspecialchars($products['link']); ?>">
            <button>LinkedIn</button>

        </a>
    </ul>
    <ul><li style= color:#fdb714;>click the above button to view <?php echo htmlspecialchars($products['name']); ?>'s LinkedIn account.</li></ul>
</div>

                    <div class="info">
                        <ul>
                            <li><?php echo htmlspecialchars($products['name']); ?></li>
                            <blockquote class="blockstyle">
                                <span class="triangle"></span><?php echo htmlspecialchars($products['testimonial']); ?>
                            </blockquote>
                        </ul>
                    </div>
                </div>
            <?php } ?>
        </div>
        <form action=""></form>
    </div>


    
    <div class="what">
    <h5>Our Projects.</h5>
        <div class="carrdss">
            <div class="cardt">
                <h6>Project</h6>
                <p>we do this project in our firm.</p>
            </div>
            <div class="cardt">
                <h6>Project</h6>
                <p>we do this project in our firm.</p>
            </div>
            <div class="cardt">
                <h6>Project</h6>
                <p>we do this project in our firm.</p>
            </div>
        </div>
    </div>
</section>


    
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
    </script>
    
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
