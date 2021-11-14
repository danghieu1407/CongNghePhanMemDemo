

<?php
$sql_customerDetails = "SELECT * FROM customer WHERE ID='$_GET[IDCus]' LIMIT 1";
$query_Detail = mysqli_query($mysqli, $sql_customerDetails);
?>

<table class="table ">
    
    
        <?php
        while ($row = mysqli_fetch_array($query_Detail)) {
        ?>
        <h1>Thông tin của <?php echo $row['Name']?></h1>
       
            <tr>
                <td>Họ Tên</td>
                <td><input class="form-control" type="text" name="NumRoom" value="<?php echo $row['Name'] ?>" required readonly></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input class="form-control" type="text" name="FloorRoom" value="<?php echo $row['email'] ?>" required readonly></td>
            </tr>
            <tr>
                <td>Số Điện Thoại</td>
                <td><input class="form-control" type="text" name="FloorRoom" value="<?php echo $row['NumberPhone'] ?>" required readonly></td>
            </tr>

            <tr>
                <td>CMND</td>
                <td><input class="form-control" type="text" name="FloorRoom" value="<?php echo $row['CMND'] ?>" required readonly></td>
            </tr>

            <tr>
                <td>Tuổi</td>
                <td><input class="form-control" type="text" name="FloorRoom" value="<?php echo $row['Age'] ?>" required readonly></td>
            </tr>

            <tr>
                <td>Nghề nghiệp</td>
                <td><input class="form-control" type="text" name="FloorRoom" value="<?php echo $row['Work'] ?>" required readonly></td>
            </tr>

            <tr>
                <td>Địa chỉ</td>
                <td><input class="form-control" type="text" name="FloorRoom" value="<?php echo $row['Address'] ?>" required readonly></td>
            </tr>

            <tr>
                <td>Số dư tài khoản</td>
                <td><input class="form-control" type="text" name="FloorRoom" value="<?php echo $row['Wallet'] ?>" required readonly></td>
            </tr>

        <?php
        }
        ?>
</table>

<a href="indexForManager.php?manage=customerManager" class="btn btn-primary text-white">Trở lại</a>