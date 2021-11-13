<?php 
if (isset($_GET['IDStaff'])) {
    $IDStaff = $_GET['IDStaff'];
} else {
    $IDStaff = '';
}
$sql_changeStaffDetail = "SELECT * FROM staff WHERE id = '$IDStaff'";
$query_changeStaffDetail = mysqli_query($mysqli,$sql_changeStaffDetail);
?>
<table class="table">
    <form action="AdminManager/ContentPage/ChangeStaffDetailProcess.php" enctype="multipart/form-data" method="post">
        <?php 
        while($row = mysqli_fetch_array($query_changeStaffDetail)){
    ?>
        <h1> Chỉnh sửa thông tin nhân viên <?php echo $row['name'] ?></h1>
        <input class="form-control" type="text" name="IDStaff" value="<?php echo $row['id'] ?>" required hidden>


        <tr>
            <td>Tên nhân viên: </td>
            <td><input class="form-control" type="text" name="name" value="<?php echo $row['name'] ?>"></td>
        </tr>
        <tr>
            <td>Số điện thoại: </td>
            <td><input class="form-control" type="text" name="phoneNumber" value="<?php echo $row['phonenumber'] ?>"></td>
        </tr>
        <tr>
            <td>Lương: </td>
            <td><input class="form-control" type="text" name="salary" value="<?php echo $row['salary'] ?>"></td>
        </tr>
        <tr>
            <td>Chức vụ</td>
            <td><input class="form-control" type="text" name="regency" value="<?php echo $row['regency'] ?>"></td>
        </tr>
        <tr>
                
                <td><input class="btn btn-success" type="submit" name="SaveChange" value="Lưu thay đổi"></td>
                <td><input class="btn btn-danger" type="submit" name="DeleteStaff" value="Xóa nhân viên"></td>
                
            </tr>



        <?php
        }
    ?>


    </form>
</table>