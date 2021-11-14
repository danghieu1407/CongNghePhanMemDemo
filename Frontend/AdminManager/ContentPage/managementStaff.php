<?php 
$sql_staff = 'SELECT * FROM staff';
$query_staff = mysqli_query($mysqli, $sql_staff);
?>
 <a href="indexForManager.php?manage=AddStaff" class="btn btn-success">Thêm nhân viên</a>

<table>
    <tr>
        <th>Tên</th>
        <th>Số điện thoại</th>
        <th>Lương</th>
        <th>Chức vụ</th>
        <th>Thao tác</th>


    </tr>
</table>
<br>
<br>

<?php while ($row_pro = mysqli_fetch_array($query_staff)) {?>

<div class="Staff">
                <table>
                   
                    <tr class="tr-Staff">
                        <th name="nameStaff" ><?php echo $row_pro[
                            'name'
                        ]; ?></th>
                        <th name="staffPhoneNumber"><?php echo $row_pro[
                            'phonenumber'
                        ]; ?> </th>
                        <th name ="salary"><?php echo $row_pro[
                            'salary'
                        ]; ?></th>
                        <th name = "regency"><?php echo $row_pro[
                            'regency'
                        ]; ?></th>
                        <th > 
                            
                      <a href="indexForManager.php?manage=staffDetail&IDStaff=<?php echo $row_pro['id']; ?>" >Chỉnh sửa</a>

                        </th>
                    </tr>
        
                </table>
 <?php } ?>   