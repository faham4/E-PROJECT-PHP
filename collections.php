<?php
@include('./header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/product.css">
    
    <title>OUR COLLECTIONS</title>
    <base href="./index (1).php">
</head>
<!-- <style>
      body{
            background-color: #f5ebe0;
            color: black;
        }
</style> -->
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
<!-- arts section end -->


<!-- bag -->
<h1 class="font" style="padding: 20px; margin: 5%; color: black; font-size:90px;"> BAGS & GIFTS</h1>
    <div class="product-card">
    <div class="card">
    <div class="small_card">
        <i class="fa fa-heart"></i>
        <i class="fa-solid fa-share"></i>
    </div>
    <img src="./images/bags/download (3).jpeg" alt="">
    <h3>Bags</h3>   
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
        <input type="hidden" name="product_id" value="9">
        <input type="hidden" name="Item_Name" value="Bags">
        <input type="hidden" name="Price" value="1000">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
</div>

<div class="card">
    <div class="small_card">
        <i class="fa fa-heart"></i>
        <i class="fa-solid fa-share"></i>
    </div>
    <img src="./images/bags/download (4).jpeg" alt="">
    <h3>Bags</h3>   
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
        <input type="hidden" name="product_id" value="10">
        <input type="hidden" name="Item_Name" value="Bags 2">
        <input type="hidden" name="Price" value="700">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
</div>

<div class="card">
    <div class="small_card">
        <i class="fa fa-heart"></i>
        <i class="fa-solid fa-share"></i>
    </div>
    <img src="./images/bags/download (5).jpeg" alt="">
    <h3>Bags</h3>   
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
    <h6>Rs.1100</h6>
    <ul>
        <li><i class="fa fa-star checked"></i></li>
        <li><i class="fa fa-star checked"></i></li>
        <li><i class="fa fa-star checked"></i></li>
        <li><i class="fa fa-star checked"></i></li>
        <li><i class="fa fa-star checked"></i></li>
    </ul>
    <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="11">
        <input type="hidden" name="Item_Name" value="Bags 3">
        <input type="hidden" name="Price" value="1100">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
</div>
        
<div class="card">
    <div class="small_card">
        <i class="fa fa-heart"></i>
        <i class="fa-solid fa-share"></i>
    </div>
    <img src=".\images\bags\images (5).jpeg" alt="">
    <h3>Bags</h3>   
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
    <h6>Rs.1300</h6>
    <ul>
        <li><i class="fa fa-star checked"></i></li>
        <li><i class="fa fa-star checked"></i></li>
        <li><i class="fa fa-star checked"></i></li>
        <li><i class="fa fa-star checked"></i></li>
        <li><i class="fa fa-star checked"></i></li>
    </ul>
    <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="12">
        <input type="hidden" name="Item_Name" value="Bags 4">
        <input type="hidden" name="Price" value="1300">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
</div>
<div class="card">
    <div class="small_card">
        <i class="fa fa-heart"></i>
        <i class="fa-solid fa-share"></i>
    </div>
    <img src="./images/bags/gift1.webp" alt="">
    <h3>Gifts</h3>   
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
    <h6>Rs.1200</h6>
    <ul>
        <li><i class="fa fa-star checked"></i></li>
        <li><i class="fa fa-star checked"></i></li>
        <li><i class="fa fa-star checked"></i></li>
        <li><i class="fa fa-star checked"></i></li>
        <li><i class="fa fa-star checked"></i></li>
    </ul>
    <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="13">
        <input type="hidden" name="Item_Name" value="Happy Birthday Gift Box">
        <input type="hidden" name="Price" value="1200">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
</div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/bags/gift6.webp" alt="">
            <h3>gifts</h3>   
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.1800</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="14">
        <input type="hidden" name="Item_Name" value="Birthday Cup">
        <input type="hidden" name="Price" value="1800">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/bags/gift7.webp" alt="">
            <h3>gifts</h3>   
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.2000</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="15">
        <input type="hidden" name="Item_Name" value="Watch box">
        <input type="hidden" name="Price" value="2000">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/bags/gift2.jpg" alt="">
            <h3>gifts</h3>   
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
        <input type="hidden" name="product_id" value="16">
        <input type="hidden" name="Item_Name" value="Special Birthday Gift">
        <input type="hidden" name="Price" value="600">
        <center><button class="buy" type="submit" name="add_to_cart">Add To Cart</button></center>
        </div>
        
    </div>
</div>
<!-- ed/d -->
<h1 class="font" style="padding: 20px; margin: 5%; color: black;">BEAUTY PRODUCTs</h1>
    <div class="product-card">
        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/beauty products/curology-7TlWZkpxCb0-unsplash.jpg " alt="">
            <h3>face wash</h3>   
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.500</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="17">
        <input type="hidden" name="Item_Name" value="face wash">
        <input type="hidden" name="Price" value="500">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/beauty products/reuben-mansell-nwOip8AOZz0-unsplash.jpg" alt="">
            <h3>cosmetic</h3>   
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
        <input type="hidden" name="product_id" value="18">
        <input type="hidden" name="Item_Name" value="cosmetic">
        <input type="hidden" name="Price" value="5000">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/beauty products/valeriia-miller-_42NKYROG7g-unsplash.jpg " alt="">
            <h3>cosmetic</h3>   
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
        <input type="hidden" name="product_id" value="19">
        <input type="hidden" name="Item_Name" value="cosmetic02">
        <input type="hidden" name="Price" value="3000">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/beauty products/mathilde-langevin-p3O5f4u95Lo-unsplash.jpg" alt="">
            <h3>face wash</h3>   
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.900</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="20">
        <input type="hidden" name="Item_Name" value="face wash02">
        <input type="hidden" name="Price" value="900">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/beauty products/download.jfif" alt="">
            <h3>moisturizer</h3>   
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
        <input type="hidden" name="product_id" value="21">
        <input type="hidden" name="Item_Name" value="moisturizer">
        <input type="hidden" name="Price" value="1350">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/beauty products/download (2).jfif" alt="">
            <h3>cosmetic</h3>   
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
        <input type="hidden" name="product_id" value="22">
        <input type="hidden" name="Item_Name" value="cosmetic03">
        <input type="hidden" name="Price" value="4000">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/beauty products/download (1).jfif" alt="">
            <h3>cosmetic</h3>   
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.3500</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="23">
        <input type="hidden" name="Item_Name" value="cosmetic04">
        <input type="hidden" name="Price" value="3500">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/beauty products/im.jpg" alt="">
            <h3>Cream</h3>   
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.1800</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="24">
        <input type="hidden" name="Item_Name" value="cream">
        <input type="hidden" name="Price" value="1800">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>
    </div>
    
</div>
<!-- end -->
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
<!-- end -->
<h1 class="font" style="padding: 20px; margin: 5%; color: black;">GREETING&BIRTHDAY CARDS</h1>
    <div class="product-card">
        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/greeting cards/download (3).jpeg" alt="">
            <h3>G-card</h3>   
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.200</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="32">
        <input type="hidden" name="Item_Name" value="G-card">
        <input type="hidden" name="Price" value="200">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/greeting cards/download (2).jpeg" alt="">
            <h3>G-card</h3>   
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.150</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="33">
        <input type="hidden" name="Item_Name" value="G-card2">
        <input type="hidden" name="Price" value="150">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/greeting cards/download (6).jpeg" alt="">
            <h3>G-card</h3> 
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.300</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="34">
        <input type="hidden" name="Item_Name" value="G-card3">
        <input type="hidden" name="Price" value="300">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/greeting cards/g.jpg" alt="">
            <h3>G-card</h3>  
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.250</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="35">
        <input type="hidden" name="Item_Name" value="G-card4">
        <input type="hidden" name="Price" value="250">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/greeting cards/imag2.jpg" alt="">
            <h3>B-card</h3>   
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
        <input type="hidden" name="product_id" value="36">
        <input type="hidden" name="Item_Name" value="B-card">
        <input type="hidden" name="Price" value="350">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/greeting cards/image1.jpg" alt="">
            <h3>B-card</h3>    
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.500</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="37">
        <input type="hidden" name="Item_Name" value="B-card1">
        <input type="hidden" name="Price" value="500">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/greeting cards/images.jpeg" alt="">
            <h3>B-card</h3>     
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.110</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="38">
        <input type="hidden" name="Item_Name" value="B-card2">
        <input type="hidden" name="Price" value="110">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/greeting cards/image 3.jpeg" alt="">
            <h3>B-card</h3>     
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
        <input type="hidden" name="product_id" value="39">
        <input type="hidden" name="Item_Name" value="B-card3">
        <input type="hidden" name="Price" value="1000">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>
    </div>
    
</div>
<!-- end -->
<h1 class="font" style="padding: 20px; margin: 5%; color: black;">NOTEBOOK&FILE</h1>
    <div class="product-card">
        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/notebooks/book1.jpg" alt="">
            <h3>notebook</h3>   
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.2500</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="33">
        <input type="hidden" name="Item_Name" value="notebook1">
        <input type="hidden" name="Price" value="2500">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/notebooks/images (2).jpeg" alt="">
            <h3>notebook</h3>   
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
        <input type="hidden" name="product_id" value="77">
        <input type="hidden" name="Item_Name" value="notebook2">
        <input type="hidden" name="Price" value="1000">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/notebooks/images (1).jpeg" alt="">
            <h3>notebook</h3>   
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.300</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="54">
        <input type="hidden" name="Item_Name" value="notebook3">
        <input type="hidden" name="Price" value="300">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/notebooks/images.jpeg" alt="">
            <h3>notebook</h3>   
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
        <input type="hidden" name="product_id" value="75">
        <input type="hidden" name="Item_Name" value="notebook4">
        <input type="hidden" name="Price" value="600">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/notebooks/file2.jpeg" alt="">
            <h3>file</h3>   
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.650</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="65">
        <input type="hidden" name="Item_Name" value="file1">
        <input type="hidden" name="Price" value="650">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/notebooks/file6.jpeg" alt="">
            <h3>file</h3>   
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.500</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="31">
        <input type="hidden" name="Item_Name" value="file2">
        <input type="hidden" name="Price" value="500">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/notebooks/file5.jpeg" alt="">
            <h3>file</h3>   
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
        <input type="hidden" name="product_id" value="44">
        <input type="hidden" name="Item_Name" value="file3">
        <input type="hidden" name="Price" value="1000">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/notebooks/file7.jpeg" alt="">
            <h3>file</h3>   
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.300</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="73">
        <input type="hidden" name="Item_Name" value="file4">
        <input type="hidden" name="Price" value="300">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>
    </div>
    
</div>
<!-- end -->
<h1 class="font" style="padding: 20px; margin: 5%; color: black;">SCHOOL BAG</h1>
    <div class="product-card">
        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/schools and offics ag/bag2.webp" alt="">
            <h3>bag</h3>   
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.2500</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="12">
        <input type="hidden" name="Item_Name" value="school bag">
        <input type="hidden" name="Price" value="2500">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>


        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/schools and offics ag/bag4.jpg " alt="">
            <h3>bag</h3>   
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
        <input type="hidden" name="product_id" value="23">
        <input type="hidden" name="Item_Name" value="black-bag">
        <input type="hidden" name="Price" value="1500">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/schools and offics ag/bag3.webp" alt="">
            <h3>bag</h3>     
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
        <input type="hidden" name="product_id" value="54">
        <input type="hidden" name="Item_Name" value="kids-bag">
        <input type="hidden" name="Price" value="3000">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/schools and offics ag/bag7.jpg" alt="">
            <h3>bag</h3>    
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
        <input type="hidden" name="product_id" value="32">
        <input type="hidden" name="Item_Name" value="office-bag">
        <input type="hidden" name="Price" value="1600">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/schools and offics ag/bag9.jpg" alt="">
            <h3>bag</h3>     
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.650</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="99">
        <input type="hidden" name="Item_Name" value="laptop-bag">
        <input type="hidden" name="Price" value="650">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/schools and offics ag/bag5.jpg" alt="">
            <h3>bag</h3>    
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.1800</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="838">
        <input type="hidden" name="Item_Name" value="Ladies-bag">
        <input type="hidden" name="Price" value="1800">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/schools and offics ag/bag1.webp" alt="">
            <h3>bag</h3>     
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.2000</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="75">
        <input type="hidden" name="Item_Name" value="school blue-bag">
        <input type="hidden" name="Price" value="2000">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/schools and offics ag/bag6.webp" alt="">
            <h3>bag</h3>    
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.2700</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="">
        <input type="hidden" name="Item_Name" value="Leather-bag">
        <input type="hidden" name="Price" value="2700">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>
    </div>
    
</div>
<!-- end -->
<h1 class="font" style="padding: 20px; margin: 5%; color: black;"> WALLETS</h1>
    <div class="product-card">
        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/wallets/download (2).jpeg" alt="">
            <h3>Lether wallet</h3> 
          
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.500</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="24">
        <input type="hidden" name="Item_Name" value="Leather Wallet">
        <input type="hidden" name="Price" value="500">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/wallets/download (1).jpeg" alt="">
            <h3>wallet</h3>   
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
        <input type="hidden" name="product_id" value="25">
        <input type="hidden" name="Item_Name" value="Brown Wallet">
        <input type="hidden" name="Price" value="1500">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/wallets/wallets.jpg" alt="">
            <h3>Wallet</h3>   
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
        <h6>Rs.1400</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="26">
        <input type="hidden" name="Item_Name" value="Black Wallet">
        <input type="hidden" name="Price" value="1400">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/bags/M90MC0657GREY_360x.webp" alt="">
            <h3>Wallet</h3>    
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
        <input type="hidden" name="product_id" value="27">
        <input type="hidden" name="Item_Name" value="Hand Wallet">
        <input type="hidden" name="Price" value="600">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/wallets/istockphoto-687013416-612x612.jpg" alt="">
            <h3>Wallet</h3>    
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.1100</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="28">
        <input type="hidden" name="Item_Name" value="Simple Wallet">
        <input type="hidden" name="Price" value="1100">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/wallets/istockphoto-180756294-612x612.jpg" alt="">
            <h3>Wallet</h3>     
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.400</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="29">
        <input type="hidden" name="Item_Name" value=" Wallet02">
        <input type="hidden" name="Price" value="400">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/wallets/istockphoto-168346115-612x612.jpg" alt="">
            <h3>ladies Wallet</h3>     
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.900</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="30">
        <input type="hidden" name="Item_Name" value="Ladies Wallet">
        <input type="hidden" name="Price" value="900">
        <button class="buy" type="submit" name="add_to_cart">Add To Cart</button>
    </form>
        </div>

        <div class="card">
            <div class="small_card">
                <i class="fa fa-heart"></i>
                <i class="fa-solid fa-share"></i>
            </div>
            <img src="./images/wallets/images (1).jpeg" alt="">
            <h3>Wallet</h3>   
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
            <h6>Rs.800</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
            </ul>
            <form method="POST" action="manage.php">
        <input type="hidden" name="product_id" value="31">
        <input type="hidden" name="Item_Name" value="Dark Wallet">
        <input type="hidden" name="Price" value="800">
        <center><button class="buy" type="submit" name="add_to_cart">Add To Cart</button></center>
    </form>
        </div>
    </div>
    
</div>
<!-- end -->
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