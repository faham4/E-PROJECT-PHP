<?php
include('./header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/product.css">
    <title>ARTS</title>
    <base href="./index (1).php">
</head>
 
</head>
<body>
     <h1 class="font" style="padding: 20px; margin: 5%; color: black; font-size:90px;">ART & PENCIL</h1>
    <div class="product-card">
        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/art/art1.jpg" alt="">
            <h3>Art</h3>   
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.5000</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="1">
        <input type="hidden" name="Item_Name" value="ART SIMPLE">
        <input type="hidden" name="Price" value="5000">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/art/art2.jpg" alt="">
            <h3>Face art</h3>   
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.15000</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
   
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="2">
        <input type="hidden" name="Item_Name" value="Face Art">
        <input type="hidden" name="Price" value="15000">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/art/art3.webp" alt="">
            <h3>flower art</h3>   
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.3000</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="3">
        <input type="hidden" name="Item_Name" value="Flower Art">
        <input type="hidden" name="Price" value="3000">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/art/art4.jpg" alt="">
            <h3>art</h3>   
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.6000</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="4">
        <input type="hidden" name="Item_Name" value="Scatch Art">
        <input type="hidden" name="Price" value="6000">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/art/download (5).jpeg" alt="">
            <h3>Paint brush</h3>   
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.1350</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="5">
        <input type="hidden" name="Item_Name" value="Paint Brush">
        <input type="hidden" name="Price" value="1350">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/art/images (2).jpeg" alt="">
            <h3>Color box</h3>   
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.600</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="6">
        <input type="hidden" name="Item_Name" value="Color Box">
        <input type="hidden" name="Price" value="600">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/art/images (5).jpeg" alt="">
            <h3>paint</h3>   
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.700</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="7">
        <input type="hidden" name="Item_Name" value="Paint">
        <input type="hidden" name="Price" value="700">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/art/images.jpeg" alt="">
            <h3>paint</h3>   
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.2600</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="8">
        <input type="hidden" name="Item_Name" value="Paint Box">
        <input type="hidden" name="Price" value="2600">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>
    </div>
    
</div>
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
                        <a hrefkk="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="#" class="to-top">
      <i class="fa-solid fa-chevron-up" style="color: black;"></i>
    </a>
    
    <script src="./javascript/index.js"></script>
</body>
</html>