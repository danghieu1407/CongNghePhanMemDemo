<?php session_start();
if (!isset($_SESSION['Login']))
{
    header('Location:login.php');
} ?>


<?php
include ("../Config/config.php");
if (isset($_GET['Log']) && $_GET['Log'] == 3) {
    unset($_SESSION['Login']);
    header("Location:login.php");
}
?>

<?php

 if(isset($_SESSION['Login'])) 
{
    $Email = $_SESSION['Login'] ;
    $sql_level = "SELECT * FROM customer WHERE email='$Email' LIMIT 1";
    $query_level = mysqli_query($mysqli, $sql_level);
    $user = mysqli_fetch_array($query_level);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Khách Sạn To Đùng</title>
	<link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../Style/style.css">


</head>
<body>
	<header class="tm-header" id="tm-header">
        <div class="">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
                <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>
                <h1 class="text-center"><?php echo $user['Name'] ?></h1>
            </div>
            <nav class="tm-nav" id="tm-nav">
                <ul>
                    <li class="tm-nav-item active"><a href="bookingroom.php?manage=OrderRoom" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Đặt Phòng
                    </a></li>


                    <li class="tm-nav-item active"><a href="bookingroom.php?manage=OrderingRoom" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Phòng Đang Đặt
                    </a></li>


                    <li class="tm-nav-item active"><a href="bookingroom.php?manage=EditCustomer" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Chỉnh Sửa Thông Tin
                    </a></li>

                    <li class="tm-nav-item active"><a href="bookingroom.php?manage=AddPayment" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Thêm tiền
                    </a></li>
                    <li class="tm-nav-item active"><a  href="?Log=3" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Đăng Xuất
                    </a></li>


                </ul>
            </nav>

    </header>
    < <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->


            <?php include 'CustomerManager/Content.php';?>
        </main>
    </div>

</body>
</html>