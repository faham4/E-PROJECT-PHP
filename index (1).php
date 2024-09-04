<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./style.css">
    <title>GIFTOS</title>
</head>
<body>

    <section class="home" id="home" style="background-color:#f4f3ee; color: black;">
     <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00cba9" fill-opacity="1" d="M0,288L24,277.3C48,267,96,245,144,240C192,235,240,245,288,245.3C336,245,384,235,432,224C480,213,528,203,576,192C624,181,672,171,720,149.3C768,128,816,96,864,96C912,96,960,128,1008,154.7C1056,181,1104,203,1152,208C1200,213,1248,203,1296,208C1344,213,1392,235,1416,245.3L1440,256L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg> -->
        <div class="slide-container active">
            <div class="slide">
                <div class="content_1">
                    <span style="color: #22333b;">STATIONARY</span>
                    <h3>All stationary products</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit 
                         Sunt nam adipisci ipsa officiis Amet pariatur eaque soluta 
                        sit iure neque voluptate.
                            </p>
                            <a href="#" class="btn">add to card</a>
                            <br><br><br>
                        </div>
                        <div class="image">
                            <img src="homeimage/stationary1.jpg" class="shoe" id="big-image">
                        </div>
                    </div>
                </div>
                <div class="slide-container">
                    <div class="slide" style="color: #000;">
                        <div class="content_1" >
                            <span style="color:rgb(92, 92, 92);">SCHOOL BAGS</span>
                            <h3 style="color: #000;">Available for both boys and girls</h3>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit 
                                Sunt nam adipisci ipsa officiis Amet pariatur eaque soluta 
                                sit iure neque voluptate.
                            </p>
                            <a href="#" class="btn">add to card</a>
                        </div>
                        <div class="image">
                            <img src="homeimage/bag.jpg" class="shoe" id="big-image-2" height="1080" width="1920" >
                        </div>
                    </div>
                </div>
                <div class="slide-container">
                    <div class="slide" style="background-color: #bc4749; color: #000;">
                        <div class="content_1">
                            <span style="color: #051923;">ART</span>
                            <h3 style="color: #000;">All types of painting</h3>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit 
                                Sunt nam adipisci ipsa officiis Amet pariatur eaque soluta 
                                sit iure neque voluptate.
                            </p>
                            <a href="#" class="btn">add to cart</a>
                        </div>
                        <div class="image">
                            <img src="homeimage/art.jpg" class="shoe" id="big-image-3">
                        </div>
                    </div>
                </div>
                
                <div id="prev" class="fa fa-angle-left" onclick="prev();"></div>
                <div id="next" class="fa fa-angle-right" onclick="next();"></div>
                
                <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00cba9" fill-opacity="1" d="M0,96L60,128C120,160,240,224,360,245.3C480,267,600,245,720,202.7C840,160,960,96,1080,96C1200,96,1320,160,1380,192L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg> -->
               
             
            </section>
          
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00cba9" fill-opacity="1" d="M0,288L24,277.3C48,267,96,245,144,240C192,235,240,245,288,245.3C336,245,384,235,432,224C480,213,528,203,576,192C624,181,672,171,720,149.3C768,128,816,96,864,96C912,96,960,128,1008,154.7C1056,181,1104,203,1152,208C1200,213,1248,203,1296,208C1344,213,1392,235,1416,245.3L1440,256L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>
            <!-- end section home -->
        <!-- art section -->
            <section id="art">
                <h1 class="font" style="text-align: left;">OUR COLLECTIONS</h1> 
                <a href="./collections.php" class=" link">
                    View all <i class="fa-solid fa-arrow-right"></i>
                </a>
                <div class="product-card">
                    
                    <div class="image-2">
                        <img src="./images/art/download (8).jpeg" width="220" height="210"  alt="png">
                        <br>
                        <br>
                        <a href="art.php" >Art & Pencil</a>
                        
                    </div>
                     
                    <div class="image-2">
                        <img src="./images/bags/download (5).jpeg" width="220" height="210" alt="" >
                        <br>
                        <br>
                        <a href="./bags.php" >Bags & Gifts</a>
                        
                    </div>
                     
                    <div class="image-2">
                        <img src="./images/notebooks/file1.jpeg" width="220" height="210" alt="" >
                        <br>
                        <br>
                        <a href="./notebook.php" >Files & Notebook</a>
                        
                    </div>
                     
                    <div class="image-2">
                        <img src="./images/greeting cards/download (2).jpeg" width="220" height="210" alt="" >
                        <br>
                        <br>
                        <a href="./greetingcards.php" >Greeting Cards</a>
                        
                    </div>
                    <div class="image-2">
                        <img src="./images/color kit/download (6).jpeg " width="220"  height="210" >
                        <br>
                        <br>
                        <a href="./greetingcards.php" >COLOR KIT</a>
                    </div>
                    <div class="image-2">
                        <img src="./images/wallets/wallets.jpg" width="220" height="210" alt="jpeg" >
                        <br>
                        <br>
                        <a href="./wallet.php" >Wallets</a>
                        
                    </div>
                     
                    <div class="image-2">
                        <img src="./images/schools and offics ag/bag2.webp" width="220" height="210" alt="" >
                        <br>
                        <br>
                        <a href="./schoolandofficebag.php" >School And Office Bag</a>
                        
                    </div>
                     
                    <div class="image-2">
                        <img src="./images/beauty products/img1.jpg " width="220" height="210"  alt="" >
                        <br>
                        <br>
                        <div> <a href="./beautyproducts.php" >Beauty Products</a></div>
                       
                    </div>
                  
                
                    
            
               
            </section>
            <!-- <p>end art section</p> -->

            <!-- SECTION START -->
        <section id="trending" >
                <div class="box">
                    <div class="container-2">
                        <img src="images/color kit/images (1).jpeg"  height="219" width="320">
                        <div class="overlay">
                            <div class="content">
                                <h3><a href="colorkit.php">COLOR KIT</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="container-2">
                            <img src="./images/art/download (5).jpeg"  height="219" width="320">
                            <div class="overlay">
                                <div class="content">
                                    <h3><a href="art.php">ART Accesories</a></h3>
    
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="container-2">
                                <img src="./images/schools and offics ag/bag2.webp"  height="219"width="320">
                                <div class="overlay">
                                    <div class="content">
                                        <h3><a href="schoolandofficebag.html">school and office bag</a></h3>
                                
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="container-2">
                                    <img src="./images/bags/M90MC0657GREY_360x.webp"  height="219" width="320">
                                    <div class="overlay">
                                        <div class="content">
                                            <h3><a href="bags.php">Bags and Gifts</a></h3>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="container-2">
                                        <img src="./images/greeting cards/download (2).jpeg"  height="219" width="320">
                                        <div class="overlay">
                                            <div class="content">
                                                <h3><a href="greetingcards.php">Greeting Cards</a>Hi....</h3>
                                             
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="box">
                                        <div class="container-2">
                                            <img src="./images/wallets/istockphoto-687013416-612x612.jpg"  height="219" width="320">
                                            <div class="overlay">
                                                <div class="content">
                                                    <h3><a href="wallet.php">Wallets</a></h3>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                                       
            </section>

        <!-- partner secton start -->
<section id="partners"  >
    <h1 class="font" style="text-align: left;">PARTNERS</h1> 
   
    <div class="container">
        <div class="box-1">
            <div class="imgBox">
                <img src="https://img.freepik.com/free-photo/portrait-handsome-young-man-makes-okay-gesture-demonstrates-agreement-likes-idea-smiles-happily-wears-optical-glasses-yellow-hat-t-shirt-models-indoor-its-fine-thank-you-hand-sign_273609-30676.jpg?size=626&ext=jpg" alt="">
            </div>
            <div class="content-1">
                <h2>Karan Singh</br><span>Graphic Designer</span></h2>
            </div>
        </div>
        <div class="box-1">
            <div class="imgBox">
                <img src="https://image.freepik.com/free-photo/young-beautiful-woman-pink-warm-sweater-natural-look-smiling-portrait-isolated-long-hair_285396-896.jpg" alt="">
            </div>
            <div class="content-1">
                <h2>Dolly Seth</br>
                <span>Digital Marketing</span></h2>
            </div>
        </div>
        <div class="box-1">
            <div class="imgBox">
                <img src="https://image.freepik.com/free-photo/waist-up-portrait-handsome-serious-unshaven-male-keeps-hands-together-dressed-dark-blue-shirt-has-talk-with-interlocutor-stands-against-white-wall-self-confident-man-freelancer_273609-16320.jpg" alt="">
            </div>
            <div class="content-1">
                <h2>Aakash Agrawal</br>
                <span>Chartered Accountant C.A</span></h2>
            </div>
        </div>
    </div>
</section>

    <!-- /CONATCT -->
    <section class="contact" id="contacts">
        <div class="content-4">
            <h2>Contact Us</h2>
         
        </div>
        <div class="container-4">
            <div class="contactInfo">
                <div class="box-4">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>A-1 block 13 <br>ABC Town <br>ABC Apartment <br> Karachi</p>
                    </div>
                </div>
                <div class="box-4">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>03376766</p>
                    </div>
                </div>
                
                <div class="box-4">
                    <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>abc_123@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form action="">
                    <h2>Send Message</h2>
                    <div class="inputbox">
                        <input type="text" name="" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputbox">
                        <textarea  required="required"></textarea>
                        <span>Type Your Message...</span>
                    </div>
                    <div class="inputbox">
                        <input type="submit" name="" value="send">
                    </div>
                </form>
            </div>
        </div>
    </section>
<!-- CONTACT END -->
 <!-- SERVICE SECETION -->
 <section id="Services" class="services" >
    <!-- <h1 data-text="Services...">Services...</h1> -->
     <h1 class="font" style="text-align: left;">SERVICES</h1>
    <div class="services_cards">
        <div class="services_box">
            <i class="fa-solid fa-truck-fast"></i>
            <h3>Fast Delivery</h3>
            <p>
                Lorem ipsum dolor sit, amet <br> consectetur adipisicing elit.
            </p>
        </div>

        <div class="services_box">
            <i class="fa-solid fa-rotate-left"></i>
            <h3>10 Days Replacement</h3>
            <p>
                Lorem ipsum dolor sit, amet <br> consectetur adipisicing elit.
            </p>
        </div>

        <div class="services_box">
            <i class="fa-solid fa-headset"></i>
            <h3>24 x 7 Support</h3>
            <p>
                Lorem ipsum dolor sit, amet <br> consectetur adipisicing elit.
            </p>
        </div>
    </section>
            <!-- footer -->
            <footer class="footer">
              <div class="container-1">
                  <div class="row">
                      <div class="footer-col">
                          <h4>COMPANY</h4>
                          <ul>
                              <li><a href="#">about us</a></li>
                              <li><a href="#">our services</a></li>
                              <li><a href="#">privacy policy</a></li>
                              <li><a href="#">affiliate program</a></li>
                          </ul>
                      </div>
      
                      <div class="footer-col">
                          <h4>GET HELP</h4>
                          <ul>
                              <li><a href="#">FAQ</a></li>
                              <li><a href="#">shipping</a></li>
                              <li><a href="#">returns</a></li>
                              <li><a href="#">order status</a></li>
                              <li><a href="#">payment option</a></li>
                          </ul>
                      </div>
      
                      <div class="footer-col">
                          <h4>ONLINE SHOP</h4>
                          <ul>
                              <li><a href="#">training shoes</a></li>
                              <li><a href="#">casual wear</a></li>
                              <li><a href="#">sports shoes</a></li>
                          </ul>
                      </div>
      
                      <div class="footer-col">
                          <h4>FOLLOW US</h4>
                          <div class="social-links">
                              <a href="#"><i class="fab fa-facebook-f"></i></a>
                              <a href="#"><i class="fab fa-twitter"></i></a>
                              <a href="#"><i class="fab fa-instagram"></i></a>
                              <a href="#"><i class="fab fa-linkedin-in"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
          </footer>
          <a href="#" class="to-top" style="color: #000;">
            <i class="fa-solid fa-chevron-up"></i>
          </a>
          

        


    <script src="./javascript/index.js"></script>
</body>
</html>