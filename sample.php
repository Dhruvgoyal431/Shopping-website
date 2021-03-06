<?php
session_start();
echo "<script>alert(' Welcome ".$_SESSION['username']."!')</script>";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Shopping Website</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="sample.js" ></script>
</head>
<body>

     <nav class="navigation">
        
        <a href="sample.html" class="logo"><img src="logo.png" style="height: 130px; width: 180px;"></a>
        
        <input type="checkbox" class="menu-btn" id="menu-btn">
        <label for="menu-btn" class="menu-icon">
            <span class="nav-icon">
                <i class="fas fa-bars"></i>
            </span>
        </label>
        
        <ul class="menu">
            <li><a href="sample.html" class="active">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
        
        <div class="right-elements">
            <a href="#" class="search"><i class="fas fa-search"></i></a>
            <a href="#" class="cart"><i class="fas fa-shopping-bag"></i></a>
            <a href="login.php" class="user"><i class="far fa-user"></i></a>
        </div>
    </nav>
    
    <section id="main">
    </br></br></br></br></br></br>    
            <!--div class="container"
  
                < Full-width images with caption text >
                <div class="image-sliderfade fade">
                  <img src="images/s.jpg" >
                  <div class="text"></div>
                </div>
                
                <div class="image-sliderfade fade">
                  <img src="images/sale.jpg">
                  <div class="text"></div>
                </div>
            
                
                <div class="image-sliderfade fade">
                  <img src="images/ele.jpeg">
                  <div class="text">Image caption 3</div>
                </div>
              </div-->
                <!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 4</div>
      <img src="ele.jpeg" style="width:100%">
      <div class="text">Caption Text</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">2 / 4</div>
      <img src="sale.jpg" style="width:100%">
      <div class="text">Caption Two</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">3 / 4</div>
      <img src="s.jpg" style="width:100%">
      <div class="text">Caption Three</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">4 / 4</div>
      <img src="elect.jpg" style="width:100%">
      <div class="text">Caption Three</div>
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
              
        
    </section> 
<section id="categories">
    <h2>Categories</h2>
    <div class="category-container">
    <a href="#" class="category-box">
        <img alt="Clothes" src="images/c-1.png">
        <span>Clothes</span>
    </a>
    <a href="#" class="category-box">
        <img alt="Electronics" src="images/elect.jpg">
        <span>Electronics</span>
    </a>
    <a href="#" class="category-box">
        <img alt="Accessories" src="images/acc.jpg">
        <span>Accessories</span>
    </a>
    <a href="#" class="category-box">
        <img alt="shoes" src="images/c-4.png">
        <span>Shoes</span>
    </a>
</div>
  
    <section id="news">
        <div class="news-heading">
            <h3>Latest Collection</h3>
        </div>
        <div class="news-box-container">
            
            <div class="news-box">
                <div class="news-img">
                    <img alt="news" src="images/pro-7.png">
                    <div class="news-label">
                        New
                    </div>
                </div>
                <div class="news-text">
                    <strong>We Provide You The Best Things</strong>
                    <span>Admin | Products</span>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="news-box">
                <div class="news-img">
                    <img alt="news" src="images/pro-2.png">
                    <div class="news-label">
                        New
                    </div>
                </div>
                <div class="news-text">
                    <strong>We Provide You The Best Things</strong>
                    <span>Admin | Products</span>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="news-box">
                <div class="news-img">
                    <img alt="news" src="images/news-3.png">
                    <div class="news-label">
                        New
                    </div>
                </div>
                <div class="news-text">
                    <strong>We Provide You The Best Things</strong>
                    <span>Admin | Products</span>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer-container">
    
            <div class="footer-logo-container">
                <div class="footer-logo">
                    <img src="logo.png">
                </div>
                <span>&#169; Shop at corner</span>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
    
    
    
    
    
            <div class="footer-menu">

                <div class="footer-menu-box">
                    <strong>Product</strong>
                    <ul>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Latest Kids Clothes</a></li>
                        <li><a href="#">New Mobiles</a></li>
                        <li><a href="#">New Mobiles Accessories</a></li>
                    </ul>
                </div>
    
                <div class="footer-menu-box">
                    <strong>Contact</strong>
                    <ul>
                        <li>abc@gmail.com</li>
                        <li>1-415-562-8258</li>
                    </ul>
                </div>
    
                <!--footer-menu-box-----
                <div class="footer-menu-box">
                    <strong>Company</strong>
                    <ul>
                        <li><a href="#">Merch Store</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>

                <div class="footer-menu-box">
                    <strong>Company 2</strong>
                    <ul>
                        <li><a href="#">Merch Store</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                --->
            </div>
                    
    
         
        </div>
        </footer>
        <span class="copyright">Copyright 2021 - Shop at corner</span>
    
</body>
</html>