<h1>Thông tin chi tiết</h1>

<?php
$sql_RoomDetail = "SELECT * FROM room WHERE ID='$_GET[IDRoom]' LIMIT 1";
$query_Detail = mysqli_query($mysqli, $sql_RoomDetail);
?>

<?php while ($row_pro = mysqli_fetch_array($query_Detail)) {?>
    <div class="col-xl-6 mx-12 "   >
                    <hr class="tm-hr-primary">
                    <a  class="effect-lily tm-post-link tm-pt-60">
                        <div class="tm-post-link-inner">
                            <img src="<?php echo $row_pro['Image']; ?>" alt="Image" class="img-fluid">
                        </div>
                        <span class="position-absolute tm-new-badge">
                            <?php if ($row_pro['Status'] == 1) {?>
                                Còn phòng
                            <?php } elseif ($row_pro['Status'] == 0) {?>
                                Hết Phòng
                            <?php } elseif ($row_pro['Status'] == 2) {?>
                                Đang Bảo Trì
                            <?php }?>
                        </span>

                        <h2 class="tm-pt-30 tm-color-primary tm-post-title"><?php echo $row_pro['NumRoom']; ?></h2>


                    </a>
                    <p class="text-dark">Loại Phòng :
                        <?php if ($row_pro['Type'] == 1) {?>
                            Phòng Đơn
                        <?php } else if ($row_pro['Type'] == 2) {?>
                            Phòng Đôi
                        <?php } else if ($row_pro['Type'] == 4) {?>
                            Phòng 4 người
                        <?php }?>
                    </p>
                    <p class="text-dark">Giá : <?php echo $row_pro['Cost']; ?>/Ngày</p>
                    <p class="text-dark">Mô Tả : <?php echo $row_pro['Details']; ?></p>


                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary"></span>
                        <span class="tm-color-primary"></span>
                    </div>

                </div>

                <?php if ($row_pro['Status'] == 1) {?>
                    <a href="indexForManager.php?manage=SettingRoom&IDRoom=<?php echo $row_pro['ID']; ?>" class="btn btn-warning text-white"> Chỉnh sửa </a>
                <?php } else if ($row_pro['Status'] == 2) {?>


                <form method="POST" action="AdminManager/ContentPage/HandleRoomprocess.php" enctype="multipart/form-data">
                    <a  class="btn btn-warning text-white " readonly> Hiện tại không thể chỉnh sửa </a>
                    <input class="form-control" type="text" name="IDRoom" value="<?php echo $row_pro['ID'] ?>" required hidden>
                    <input  type="text"  name="ChangeStatus" value="Maintenance" hidden>
                    <button type="submit" class="btn btn-primary" >Đã bảo trì xong</button>
                </form>

                <?php } else if ($row_pro['Status'] == 0) {?>


                    <form method="POST" action="AdminManager/ContentPage/HandleRoomprocess.php"  enctype="multipart/form-data">
                    <a  class="btn btn-warning text-white " readonly> Hiện tại không thể chỉnh sửa </a>
                    <input class="form-control" type="text" name="IDRoom" value="<?php echo $row_pro['ID'] ?>" required hidden>
                    <input  type="text"  name="ChangeStatus" value="Checked" hidden>
                    <button type="submit" class="btn btn-primary" >Đã trả phòng</button>
                    </form>


                <?php }?>



<?php }
?>

