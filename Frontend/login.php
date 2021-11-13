<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../Style/login.css">
    <title>Đăng nhập</title>
</head>

<body>
    
    <div class="container">
        <div class="card-login">
            <div class="header">
                <h2>Đăng Nhập</h2>
            </div>
            <div class="input">
                <form action="../Backend/loginProcess.php" method="POST">
                    <input type="text" name="Email" placeholder="Tên đăng nhập" required>
                    <input type="password" name="Pass" placeholder="Mật khẩu" required>
                    <div class="text-danger small text-left mt-3">
                            <span id="errorMessage"><?php if (isset($_GET["msg1"])) echo $_GET["msg1"]; ?></span></td>
                        </div>
                    <input type="submit" name="Login" value="Đăng Nhập">
                    <a href="signUp.php">Chưa có tài khoản</a>

                        
                </form>
            </div>
        </div>
    </div>
    

  <?php
include('Dialog.php') ;
?>
</body>

</html>
<?php
if (isset($_GET["msg"])) {
    echo "<script>$('#Message').modal({show: true})</script>";
}
?>