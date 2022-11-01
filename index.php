<?php
include "koneksi.php";

if (isset($_POST["login"])){
    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    $result = mysqli_query ($kon, "SELECT * FROM tbl_admin WHERE email = '$email'and password ='$password'");

    //cek email ada atau tidak
   if ( mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_array($result);
        if ( $row > 0) {
            $email = $row["email"];
            $password = $row["password"];
            header("Location: home.php");
            exit;
        }
   }
    $error = true;
    if ( isset ($error)) {
        echo "<script>
        alert('Email atau password salah ! ' )
            
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Login </title>
</head>
<body>
    <div class="login">
        <div class="from_login">
            <img src="./assets-test-programmer/assets/Logo Apps.png">
            <form method="POST">
                <label for="email"> Email </label> <br>
                <input id="email" type="text" name="email" required><br>
        
                
                <label for="password"> Password</label><br>
                <input id="password" type="password" name="password" required><br>
        
                <a href="forgotPassword"> Forgot Password</a>
                <button type="submit" value="login" name="login"> Log in</button>
            </form>
            <div class="reg">
                <h6> Don't have an account </h6>
                <a href="fromRegis.php" > Register </a> 
            </div>
           
        </div>

    </div>
    
</body>
</html>