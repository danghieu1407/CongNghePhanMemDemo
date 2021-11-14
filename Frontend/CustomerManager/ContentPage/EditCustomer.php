<?php
if (isset($_GET['IDCus'])) {
    $IDCus = $_GET['IDCus'];
} else {
    $IDCus = '';
}
$sql_setting = "SELECT * FROM customer WHERE ID = '$IDCus' LIMIT 1";
$query_setting = mysqli_query($mysqli, $sql_setting);
?>


<table class="table ">
    
    <form method="POST" action="AdminManager/ContentPage/HandleCustomerprocess.php">
        <?php
        while ($row = mysqli_fetch_array($query_setting)) {
        ?>
        <input class="form-control" type="text" name="IDCus" value="<?php echo $row['ID'] ?>" required hidden>
            <tr>
                <td>Tên</td>
                <td><input class="form-control" type="text" name="Name" value="<?php echo $row['Name'] ?>" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input class="form-control" type="text" name="email" value="<?php echo $row['email'] ?>" readonly required></td>
            </tr>
            <tr>
                <td>Chứng Minh Nhân Dân</td>
                <td><input class="form-control" type="text" name="CMND" value="<?php echo $row['CMND'] ?>" readonly required></td>
            </tr>
            <tr>
                <td>Số dư hiện tại</td>
                <td><input class="form-control" type="text" name="Wallet" value="<?php echo $row['Wallet'] ?>" readonly required></td>
            </tr>
            <tr>
                <td>Tuổi</td>
                <td><input class="form-control" type="text" name="Wallet" value="<?php echo $row['Age'] ?>" required></td>
            </tr>
            <tr>
                <td>Công Việc</td>
                <td><input class="form-control" type="text" name="Work" value="<?php echo $row['Work'] ?>" required></td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td><input class="form-control" type="text" name="Address" value="<?php echo $row['Address'] ?>" required></td>
            </tr>
            <tr>
                <td>Số điện thoại</td>
                <td><input class="form-control" type="text" name="NumberPhone" value="<?php echo $row['NumberPhone'] ?>" required></td>
            </tr>

            

            <tr>  
                <td><input class="btn btn-success" type="submit" name="Setting" value="Lưu thay đổi"></td>
                
            </tr>


        
        <?php
        }
        ?>
    </form>
</table>