<?php 
$sql_ord = 'SELECT * FROM ord order by roomOrd desc' ;
$query_ord = mysqli_query($mysqli, $sql_ord);
?>


<table>
    <tr>
        <th>Phòng</th>
        <th>Tên Khách hàng</th>
        <th>Số điện thoại</th>
        <th>CMND</th>
        <th>Ngày đặt</th>

        <th>Thao tác</th>
    </tr>




    <div class="ord">
        <?php while ($row_pro = mysqli_fetch_array($query_ord)) {?>

        <tr>

            <td name="roomOrd"><?php echo $row_pro['roomOrd']; ?></td>
            <td name="nameOrd"><?php echo $row_pro['nameOrd']; ?> </td>
            <td name="sdtOrd"><?php echo $row_pro['sdtOrd']; ?></td>
            <td name="cmndOrd"><?php echo $row_pro[ 'cmndOrd']; ?></td>
            <td name="dateOrd"><?php echo $row_pro[ 'dateOrd']; ?></td>
        
            

            <td>
                <form
                    action="AdminManager/ContentPage/manageBookingRoomProcess.php?Id=<?php echo $row_pro['roomOrd']; ?>"
                    method="post">
                    <input class="form-control" type="text" name="IDRoom" value="<?php echo $row_pro['roomOrd'] ?>" required hidden>
                 
                <input class="btn btn-danger" type="submit" name="submitBookingRoomProcess" value="Xác Nhận">

                 
                </form>
                <!-- <a class="btn btn-warning" href="indexForManager.php?manage=staffDetail&IDStaff" >Sửa</a> -->

            </td>

        </tr>
    </div>
    <?php } ?>
</table>