<?php
include "koneksi.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="contenRegister">
        <a href="index.php"><img  src="./assets-test-programmer/assets/backk.png" width="20px" height="20px"></a>
    <form method="POST">
        <label for="firstName"> frist name : </label> <br>
        <input id="firstName" type="text" name="firstName" required><br>

        <label for="lastName"> Last name : </label> <br>
        <input id="lastName" type="text" name="lastName" required><br>

        <label for="email"> Email : </label> <br>
        <input id="email" type="text" name="email" required><br>

        <label for="password"> Password : </label> <br>
        <input id="password" type="password" name ="password1" required><br>

        <label for="confirmpassword"> Confirm Password : </label> <br>
        <input id="confirmpassword" type="password" name="Cpassword" required><br>
        
        <button type="submit" value="register" name="register" > Register </button>

    </form>
    </div>
<?php

if (isset($_POST["register"])) {
    # code...
    $firstName       = htmlspecialchars ("$_POST[firstName]");
    $lastName        = htmlspecialchars ("$_POST[lastName]");
    $email           = htmlspecialchars ("$_POST[email]");
// cek configpassword
    
    if ($_POST['password1']==$_POST['Cpassword'] ) {

        $password        = htmlspecialchars ("$_POST[password1]");
        $passEnkrip      = md5($password);
        
    $query = "INSERT INTO tbl_admin VALUES('$firstName','$lastName','$email','$passEnkrip')";

    $insert = mysqli_query($kon, $query);

            if ($insert == 1) {
                echo "<div class='badan'  id='from'>
                        <div class='isi' id='rad'>
                         Data tersimpan
                        </div>
                    </div>";
                echo "<a href='index.php'> silahkan login </a>";    
            }else{
                echo "<div class='badan'  id='from'>
                        <div class='isi' id='rad'>
                        Data tidak tersimpan
                        </div>
                     </div>";
                echo mysqli_error($kon);
            }

    }else {
    echo "<script>alert('Password yang Anda Masukan Tidak Sama');history.go(-1)</script>";
    }
// gen md5

   
}
    
?>    
</body>
</html>