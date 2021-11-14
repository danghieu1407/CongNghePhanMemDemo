<h1>Thông tin chi tiết của nhân viên</h1>
<?php 
$sql_staff = "SELECT * FROM staff where id = '$_GET[IDStaff]' LIMIT 1";
$query_detail = mysqli_query($mysqli, $sql_staff);
?>

<?php while($row_pro = mysqli_fetch_array($query_detail)){ ?>
<div class="col-xl-6 mx-12 ">

    <h2 class="tm-pt-30 tm-color-primary tm-post-title">Tên nhân viên: <?php echo $row_pro['name']; ?></h2>
    <p class="text-dark">Số điện thoại: <?php echo $row_pro['phonenumber']; ?></p>
    <p class="text-dark">Chức vụ trong khách sạn : <?php echo $row_pro['regency']; ?></p>




</div>
<a href="indexForManager.php?manage=changeDetailStaff&IDStaff=<?php echo $row_pro['id']; ?>" class="btn btn-warning text-white"> Chỉnh sửa </a>



<?php } ?>