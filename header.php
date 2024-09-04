<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Giftos</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&dispaly=swap');
.drop-btn {
  background-color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  font-size: 1.5rem;
    color: #000;
    margin: 0 2rem;
    text-decoration: none;
    position: relative;
    margin: 0 20px;
    transition: 0.3s linear;
}
.drop-btn:before{
  content:"" ;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width:0%;
  border-bottom: 4px solid  #f74f10;
  transition: 0.4s linear;
}
.drop-btn:hover::before{
    color: #f74f10;
    width: 100%;
}
 .drop-btn:hover{
    color: orangered;
}
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 170px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 20px 22px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}


/* .dropdown:hover .dropbtn {
  background-color: #3e8e41;
} */
*{
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    text-transform: uppercase;
    transition: all .2s linear;
    /* overflow: hidden; */
}
body{
/* background: #0d1b2a; */
/* background-color: #24262b; */
/* background-image: linear-gradient(135deg, #43CBFF 10%, #9708CC 100%); */
/* overflow: hidden; */
overflow-x: hidden;
  margin: 0;
  padding: 0;
}
html{
    font-size: 60%;
    scroll-padding-top: 6rem;
    scroll-behavior: smooth;
}
header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    background: #fff;
    /* padding: 1rem 10%; */
    padding: 0px 100px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
 
}

header .logo{
    font-size: 2rem;
    color: white;
    font-weight: 500;
}
header .logo img{
  margin-left: 10px;
  width: 60px;
  filter: drop-shadow(2px 2px 2px white);
}
header .navbar a{
    font-size: 1.5rem;
    color: #000;
    /* color: #e9ecef; */
    margin: 0 2rem;
    /* color: white; */
    text-decoration: none;
    cursor: pointer;
    position: relative;
    margin: 0 20px;
    transition: 0.3s linear;
}
.navbar a:before{
  content:"" ;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width:0%;
  border-bottom: 4px solid  #f74f10;
  transition: 0.4s linear;
}
.navbar a:hover:before{
    color: #f74f10;
    width: 100%;
}
 .navbar a:hover{
    color: orangered;
}
header .icons a{
    font-size: 2rem;
    font-weight: 100;
    color: #000;
    margin-left: 1.5rem;
 
}

header .icons a:hover{
    color: orangered;
}

#menu-bar {
    font-size: 2rem;
    padding: .5rem 1rem;
    border: .1rem solid #000;
    color: #000;
    border-radius: .3rem;
    cursor: pointer;
    display: none;
}
#menu-bar.dropdown .drop-btn {
  font-size: 2rem;
  padding: .5rem 1rem;
  border: .1rem solid #000;
  color: #000;
  border-radius: .3rem;
  cursor: pointer;
  display: none;
}
.to-top{
  position: fixed;
  bottom: 16px;
  right: 32px;
  background-color: white;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  justify-content: center;
  display: flex;
  align-items: center;
  font-size: 32px;
  scroll-behavior: smooth;
  transition: all .4s ;
}
 /* responsive */
/* responsive */
@media (max-width:768px){
    #menu-bar{
        display: block;
    }

    header .navbar{
        position: absolute;
        top: 100%;
        left: -120%;
        width: 100%;
        background: #eee;
        border-top: .1rem solid rgba(0, 0, 0, .1);
    }
    header .navbar a{
        font-size: 2rem;
        background: #fff;
        border: .1rem solid #000;
        border-radius: .5rem;
        padding: 1rem;
        margin: 1rem;
        display: block;
        text-align: center;
    }
    header .navbar.active{
        left: 0;
    }
}
</style>
<body>
<header>
<div id="menu-bar" class="fa fa-bars"></div>
    <a href="#" class="logo">
        <img src="./images.png" alt="Logo"></a>
    <nav class="navbar">
        <a href="index (1).php">HOME</a>
        <div class="dropdown">
            <button class="drop-btn">PRODUCTS</button>
            <div class="dropdown-content">
                <a href="art.php">ART&PENCIL</a>
                <a href="bags.php">BAGS&GIFTS</a>
                <a href="wallet.php">WALLET</a>
                <a href="notebook.php">NOTEBOOK&FILE</a>
                <a href="greetingcards.php">GREETING CARDS</a>
                <a href="schoolandofficebag.php">SCHOOL BAGS</a>
                <a href="beautyproducts.php">BEAUTY PRODUCTS</a>
                <a href="colorkit.php">COLOR KIT</a>
            </div>
        </div>
        <a href="#partners">Partner</a>
        <a href="#contact us">CONTACT US</a>
        <a href="#Services">SERVICES</a> 
    </nav>
    <div class="icons">
    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
            <a href="logout.php" class="btn btn-outline-danger" style=" color: black;border: 1px solid #dc3545; width:30%;">Logout</a>
        <?php else: ?>
            <a href="login.php" class="btn btn-outline-primary" style=" color: black;border: 1px solid #007bff; margin:10px;">Login</a>
            <a href="register.php" class="btn btn-outline-success" style="color:black; color: black;border: 1px solid #007bff; margin:10px;">Register</a>
        <?php endif; ?>
        <a href="mycart.php"><i class="fa fa-shopping-cart">
            <?php
            if (isset($_SESSION['cart'])) {
                $count = count($_SESSION['cart']);
                echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
            } else {
                echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
            }
            ?>
        </i></a>
    </div>
</header>
    



  
    <script src="./javascript/index.js"></script>
  
</body>
</html>