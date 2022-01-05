<?php
$sql_room1 = 'SELECT * FROM room WHEre FloorRoom =1 order by NumRoom';
$query_room1 = mysqli_query($mysqli, $sql_room1);
?>
<a class="btn btn-primary" href="indexForManager.php?manage=bookingRoomDetail">Thông tin khách hàng đặt phòng</a>
<a class="btn btn-primary" href="indexForManager.php?manage=bill">Tổng số Hóa đơn</a>

<hr>    
<div class="row tm-row ">
    <h1> Tầng 1</h1>
    <?php while ($row_pro = mysqli_fetch_array($query_room1)) { ?>

    <article class="col-12 col-md-6 tm-post">
        <hr class="tm-hr-primary">
        <a  class="effect-lily tm-post-link tm-pt-60">
            <div class="tm-post-link-inner">
                <img src="<?php echo $row_pro[
                                'Image'
                            ]; ?>" alt="Image" class="img-fluid">
            </div>
            <span class="position-absolute tm-new-badge">
                <?php if ($row_pro['Status'] == 1) { ?>
                Còn phòng
                <?php } elseif ($row_pro['Status'] == 0) { ?>
                Hết Phòng
                <?php } elseif ($row_pro['Status'] == 2) { ?>
                Đang Bảo Trì
                <?php } ?>
            </span>

            <h2 class="tm-pt-30 tm-color-primary tm-post-title"><?php echo $row_pro[
                            'NumRoom'
                        ]; ?></h2>
        </a>
        <a class="btn btn-success" href="indexForManager.php?manage=payment">Thanh Toán</a>
        <form action="AdminManager/ContentPage/checkStatusProcess.php?idroom=<?php echo $row_pro['ID'] ?>" method="post">
        <input class="btn btn-danger" type="submit" name="outOfRoom" value="Hết Phòng">
        <input class="btn btn-primary" type="submit" name="nooneinthisroom" value="Còn Phòng">
        </form>


        <p class="tm-pt-30">

        </p>
        <div class="d-flex justify-content-between tm-pt-45">
            <span class="tm-color-primary"></span>
            <span class="tm-color-primary"></span>
        </div>

    </article>
    <?php } ?>

</div>
<?php
            $sql_room2 = 'SELECT * FROM room WHEre FloorRoom =2';
            $query_room2 = mysqli_query($mysqli, $sql_room2);
            ?>
<div class="row tm-row">
    <h1> Tầng 2</h1>
    <?php while ($row_pro = mysqli_fetch_array($query_room2)) { ?>

    <article class="col-12 col-md-6 tm-post">
        <hr class="tm-hr-primary">
        <a  class="effect-lily tm-post-link tm-pt-60">
            <div class="tm-post-link-inner">
                <img src="<?php echo $row_pro[
                'Image'
            ]; ?>" alt="Image" class="img-fluid">
            </div>
            <span class="position-absolute tm-new-badge">
                <?php if ($row_pro['Status'] == 1) { ?>
                Còn phòng
                <?php } elseif ($row_pro['Status'] == 0) { ?>
                Hết Phòng
                <?php } elseif ($row_pro['Status'] == 2) { ?>
                Đang Bảo Trì
                <?php } ?>
            </span>

            <h2 class="tm-pt-30 tm-color-primary tm-post-title"><?php echo $row_pro[
            'NumRoom'
        ]; ?></h2>
        </a>
     
        <form action="indexForManager.php?manage=payment&idroom=<?php echo $row_pro['ID'] ?>" method="post">
        <input class="btn btn-success" type="submit" name="payment" value="Thanh Toán">

        </form>
        <form action="AdminManager/ContentPage/checkStatusProcess.php?idroom=<?php echo $row_pro['ID'] ?>" method="post">
        <input class="btn btn-danger" type="submit" name="outOfRoom" value="Hết Phòng">
        <input class="btn btn-primary" type="submit" name="nooneinthisroom" value="Còn Phòng">
        </form>
        <p class="tm-pt-30">

        </p>
        <div class="d-flex justify-content-between tm-pt-45">
            <span class="tm-color-primary"></span>
            <span class="tm-color-primary"></span>
        </div>

    </article>
    <?php } ?>
</div>