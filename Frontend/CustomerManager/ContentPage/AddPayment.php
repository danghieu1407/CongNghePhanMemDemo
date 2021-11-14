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
                <td>Loại thẻ</td>
                <td>
                    <select class="form-select" name="Type"  required>
                        <option value="1">Visa</option>
                        <option value="2">Thẻ Ngân Hàng</option>
                        <option value="3">Ví Điện Tử</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Loại thẻ</td>
                <td><input class="form-control" type="text" name="MS"  required placeholder="Nhập Mã Thẻ" ></td>
            </tr>

            <tr>
                <td>Nhập số tiền</td>
                <td><input class="form-control" type="text" name="Wallet"  required placeholder="Nhập số tiền" ></td>
            </tr>
        
            <tr>  
                <td><input class="btn btn-success" type="submit" name="AddPayment" value="Nạp số dư"></td>
                
            </tr>


        
        <?php
        }
        ?>
    </form>
</table>