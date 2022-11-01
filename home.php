<?php
include "koneksi.php"



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document Home</title>
</head>
<body>
    <script src="./scriptMenu.js"></script>
    <div class="header">
        <img src="./assets-test-programmer/assets/menu.jpg" width="30px" id="menudrop" class="dropbtn">

        <img class="logo" src="./assets-test-programmer/assets/Logo Apps.png">

        <div id="myDropdown" class="dropdown-content">
            <a href="userlist.php">User list</a>
            <a href="logout.php">Log out</a>
            <h6> v.10.0</h6>
        </div>
    </div>

   
    <div class="srch">
        <input  class="input" type="text" value="search">
        <button class="btn"><img src="./assets-test-programmer/assets/search.jpg" width="10px"></button>
    </div>


    <!-- slide gambar -->
    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="./assets-test-programmer/assets/produk/atap.jpg" style="width:100%">
            <div class="text"> Roof</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="./assets-test-programmer/assets/produk/kermik.jpg" style="width:100%">
            <div class="text"> ceramic</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="./assets-test-programmer/assets/produk/pipa.jpg" style="width:100%">
            <div class="text"> Pipe </div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>

    <br>

    <!-- Tombol slide -->
    <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <!-- <script src="./script.js"></script> -->

    <div class="menu">
        <div class="img">
            <img src="./assets-test-programmer/assets/card_giftcard_24pxsad.svg"> Material
        </div>
        <div class="img">
            <img src="./assets-test-programmer/assets/build_24px_outlined.svg"> Tools
        </div>
        <div class="img">
            <img src="./assets-test-programmer/assets/perm_data_setting_24px_outlined.svg"> Fitting
        </div>
        <div class="img">
            <img src="./assets-test-programmer/assets/category_24px_outlined.svg"> Ceramics
        </div>
        <div class="img">
            <img src="./assets-test-programmer/assets/layers_24px_outlined.svg" alt="kkkk">Acrylic
        </div>
        <div class="img">
            <img src="./assets-test-programmer/assets/category_24px_outlined.svg">Other
        </div>
        
       
       
       
    </div>

    <div class="footer">
        <a href="home.php"><img  src="./assets-test-programmer/assets/home_24px_outlined.svg"></a>
        <a href="keranjang.html"><img src="./assets-test-programmer/assets/add_shopping_cart_24px_outlined.svg"></a>
        <a href="myacount.php"><img  src="./assets-test-programmer/assets/perm_identity_24px_outlined.svg"></a>
    </div>
    <script src="./script.js"></script>    
</body>
</html>