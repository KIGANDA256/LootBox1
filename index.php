<?php
 @include 'conn.php';
 @include 'main.PHP';
// if(isset($_POST['']))
//$conn = mysqli_connect('localhost','root','',' webusers');
$pass =md5($_POST['pass00']);
?>
<!DOCTYPE html>

<html lang="en">
<head>
<link rel="stylesheet" href="main.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage
    </title>
</head>
<body>
    
    <div class="form-container">
    <form action="" method="">
        <!-- <label for="">Email:</label> -->
        <input type="text" name="email" placeholder="Email: kabukusi@wuhu.com" maxlength="26"  required>
        <!-- <label for="">Password:</label> -->
        <input type="password" name="pass"  maxlength="26" required>
    </form>
    
    </div>
    <button>LOG IN</button>
    <a href="main.php"><button>Register</button></a>
</body>
</html>