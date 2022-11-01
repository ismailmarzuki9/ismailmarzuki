


<!DOCTYPE html>
<?php
include "koneksi.php";

$selec = mysqli_query($kon, "SELECT * FROM tbl_admin");


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> User list</title>
</head>
<body>
    <div class="containerUserList">
        <div class="pemisah">
            <h1>User list </h1>

            <?php
            while ( $user= mysqli_fetch_assoc($selec)):
                
            ?>
            <div class="myuser">
                <div class="radius">
                    <img src="./assets-test-programmer/assets/perm_identity_24px_outlined.svg">
                </div>
                <div class="myprofile">
                    <h5 id="username"><?= $user["firstName"]?>  <?= $user["lastName"]?></h5>
                    <h4 id="email"> <?=$user["email"]?> </h4>
                </div>
            </div>

            <?php
         endwhile;
            ?> 


        <div class="add">
            <a href="fromRegis.php"><img  src="./assets-test-programmer/assets/add.png" width="25px" height="25px"></a>
        </div>

        
    </div>
    <div class="footer">
        <a href="home.php"><img  src="./assets-test-programmer/assets/home_24px_outlined.svg"></a>
        <a href="keranjang.html"><img src="./assets-test-programmer/assets/add_shopping_cart_24px_outlined.svg"></a>
        <a href="myacount.php"><img  src="./assets-test-programmer/assets/perm_identity_24px_outlined.svg"></a>
    </div>
</body>
</html>