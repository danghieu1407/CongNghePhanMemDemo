<?php
$sql_room1 = 'SELECT * FROM room WHEre FloorRoom = 1 and room.Status = 1 order by NumRoom';
$query_room1 = mysqli_query($mysqli, $sql_room1);
?>
<div class="row tm-row ">
    <h1> Tầng 1</h1>
    <?php while ($row_pro = mysqli_fetch_array($query_room1)) {?>

    <article class="col-12 col-md-6 tm-post">
        <hr class="tm-hr-primary">
        <a href="bookingroom.php?manage=RoomDetail&IDRoom=<?php echo $row_pro['ID']; ?>" class="effect-lily tm-post-link tm-pt-60">
            <div class="tm-post-link-inner">
                <img src="<?php echo $row_pro['Image']; ?>" alt="Image" class="img-fluid">
            </div>
            <span class="position-absolute tm-new-badge">
                Còn Phòng
            </span>

            <h2 class="tm-pt-30 tm-color-primary tm-post-title"><?php echo $row_pro['NumRoom']; ?></h2>
        </a>
        <p class="tm-pt-30">

        </p>
        <div class="d-flex justify-content-between tm-pt-45">
            <span class="tm-color-primary"></span>
            <span class="tm-color-primary"></span>
        </div>

        
    </article>
    <?php }?>
</div>

<?php
$sql_room2 = 'SELECT * FROM room WHEre FloorRoom =2 and room.Status = 1';
$query_room2 = mysqli_query($mysqli, $sql_room2);
?>
            <div class="row tm-row">
                <h1> Tầng 2</h1>
                <?php while ($row_pro = mysqli_fetch_array($query_room2)) {?>

                    <article class="col-12 col-md-6 tm-post">
        <hr class="tm-hr-primary">
        <a href="bookingroom.php?manage=RoomDetail&IDRoom=<?php echo $row_pro['ID']; ?>" class="effect-lily tm-post-link tm-pt-60">
            <div class="tm-post-link-inner">
                <img src="<?php echo $row_pro['Image']; ?>" alt="Image" class="img-fluid">
            </div>
            <span class="position-absolute tm-new-badge">
                Còn Phòng
            </span>

            <h2 class="tm-pt-30 tm-color-primary tm-post-title"><?php echo $row_pro['NumRoom']; ?></h2>
        </a>
        <p class="tm-pt-30">

        </p>
        <div class="d-flex justify-content-between tm-pt-45">
            <span class="tm-color-primary"></span>
            <span class="tm-color-primary"></span>
        </div>

    </article>
<?php }?>
</div>