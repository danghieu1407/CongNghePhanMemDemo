<?php
if (isset($_GET['IDRoom'])) {
    $IDRoom = $_GET['IDRoom'];
} else {
    $IDRoom = '';
}
$sql_setting = "SELECT * FROM room WHERE ID = '$IDRoom' LIMIT 1";
$query_setting = mysqli_query($mysqli, $sql_setting);
?>


<table class="table ">
    
    <form method="POST" action="AdminManager/ContentPage/HandleRoomprocess.php" enctype="multipart/form-data">
        <?php
        while ($row = mysqli_fetch_array($query_setting)) {
        ?>
        <h1>Setting  <?php echo $row['NumRoom']?></h1>
        <input class="form-control" type="text" name="IDRoom" value="<?php echo $row['ID'] ?>" required hidden>
            <tr>
                <td>Phòng</td>
                <td><input class="form-control" type="text" name="NumRoom" value="<?php echo $row['NumRoom'] ?>" required></td>
            </tr>

            <tr>
                <td>Tầng</td>
                <td><input class="form-control" type="text" name="FloorRoom" value="<?php echo $row['FloorRoom'] ?>" required readonly></td>
            </tr>

            <tr>
                <td>Loại</td>
                <td>
                    <select class="form-select" name="Type"  required>
                        <option value="1">Phòng Đơn</option>
                        <option value="2">Phòng Đôi</option>
                        <option value="4">Phòng 4 người</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Giá</td>
                <td><input class="form-control" type="text" name="Cost" value="<?php echo $row['Cost'] ?>"></td>
            </tr>
            <tr>
                <td>Mô tả:</td>
                <td><textarea class="form-control" name="Details" cols="100" rows="10"><?php echo $row['Details'] ?></textarea></td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input class="form-control" type="file" name="Image" value="<?php echo $row['Image'] ?>">
                <img src="<?php echo $row['Image'] ?>"  width="200" height="200">
                </td>
            </tr>

            <tr>
                
                <td><input class="btn btn-success" type="submit" name="Setting" value="Lưu thay đổi"></td>
                <td><input class="btn btn-danger" type="submit" name="DeleteRoom" value="Xóa Phòng"></td>
                
            </tr>


        
        <?php
        }
        ?>
    </form>
</table>