<h1>Vui lòng điền đủ thông tin để khách sạn biết đường mà tính</h1>
<?php
$sql_RoomDetail = "SELECT * FROM room WHERE ID='$_GET[IDRoom]' LIMIT 1";
$query_Detail = mysqli_query($mysqli, $sql_RoomDetail);
?>

<?php while ($row_pro = mysqli_fetch_array($query_Detail)) {?>
<table class="table ">

    <form method="POST" action="CustomerManager/ContentPage/bookingRoomProcess.php" enctype="multipart/form-data">
            <input class="form-control" type="text" name="IDRoom" value="<?php echo $row_pro['ID'] ?>" required hidden>


            <tr>
                <td>Tên Người Đặt Phòng</td>
                <td><input class="form-control" type="text" name="nameOrd"  placeholder="Nhập tên người đặt phòng" required></td>
            </tr>

            <tr>
                <td>CMND</td>
                <td><input class="form-control" type="text" name="cmndOrd"  placeholder="Nhập tên số chứng minh nhân dân" required></td>
            </tr>

            <tr>
                <td>Số điện thoại</td>
                <td><input class="form-control" type="text" name="sdtOrd"  placeholder="Nhập tên số điện thoại" required></td>
            </tr>

            <tr>
                <td>Ngày đặt phòng</td>
                <td><input class="form-control" type="text" name="dateOrd"  placeholder="Nhập ngày đặt phòng (dd/mm/yyyy)" required></td>
            </tr>

            <tr>
                <td></td>
                <td><input class="btn btn-success" type="submit" name="bookingroom" value="Xác nhận đặt phòng"></td>
            </tr>


           
           


    </form>
</table>
<?php }
?>
