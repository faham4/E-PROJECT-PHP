
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
   
    <title>COLOR KIT</title>
    <base href="./index (1).php">
</head>
</head>
<body>
     <h1 class="font" style="padding: 20px; margin: 5%; color: black;">COLOR KIT</h1>
    <div class="product-card">
        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/color kit/download (2).jpeg" alt="">
            <h3>kit</h3>   
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.1500</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="40">
        <input type="hidden" name="Item_Name" value="Kit">
        <input type="hidden" name="Price" value="1500">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/color kit/download (6).jpeg" alt="">
            <h3>paint kit</h3>   
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
        <input type="hidden" name="product_id" value="41">
        <input type="hidden" name="Item_Name" value="Paint Kit">
        <input type="hidden" name="Price" value="5000">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/color kit/download (9).jpeg" alt="">
            <h3>soft pastels</h3>   
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
        <input type="hidden" name="product_id" value="42">
        <input type="hidden" name="Item_Name" value="Soft Patels">
        <input type="hidden" name="Price" value="3000">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/color kit/download (7).jpeg" alt="">
            <h3>paint oil</h3>   
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.1600</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="43">
        <input type="hidden" name="Item_Name" value="Paint Oil">
        <input type="hidden" name="Price" value="1600">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/color kit/images (5).jpeg" alt="">
            <h3>Pouring paint</h3>   
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.350</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="44">
        <input type="hidden" name="Item_Name" value="Pouring paint">
        <input type="hidden" name="Price" value="350">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/color kit/images (7).jpeg" alt="">
            <h3>paint</h3>   
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.4000</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="45">
        <input type="hidden" name="Item_Name" value="paint box">
        <input type="hidden" name="Price" value="4000">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/color kit/download (4).jpeg" alt="">
            <h3>Color</h3>   
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.1000</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="46">
        <input type="hidden" name="Item_Name" value="color">
        <input type="hidden" name="Price" value="1000">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/color kit/images (4).jpeg" alt="">
            <h3>paint oil</h3>   
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
        <input type="hidden" name="product_id" value="47">
        <input type="hidden" name="Item_Name" value="paint oil bottle">
        <input type="hidden" name="Price" value="600">
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