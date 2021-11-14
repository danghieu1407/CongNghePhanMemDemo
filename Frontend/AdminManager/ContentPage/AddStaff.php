<table class="table ">
    <form method="POST" action="AdminManager/ContentPage/changeStaffDetailProcess.php" enctype="multipart/form-data">

        <h1>Thêm nhân viên</h1>
      

            <tr>
                <td>Tên:</td>
                <td><input class="form-control" type="text" name="name" placeholder=" Nhập tên nhân viên" required></td>
            </tr>
            <tr>
                <td>Số điện thoại:</td>
                <td><textarea class="form-control" name="phonenumber" placeholder="Nhập số điện thoại" required></textarea></td>
            </tr>
            <tr>
                <td>Lương:</td>
                <td><input class="form-control" type="text" name="salary" placeholder=" Nhập lương của nhân viên" required></td>
            </tr>
            <tr>
                <td>Chức vụ:</td>
                <td><input class="form-control" type="text" name="regency" placeholder="Nhập chức vụ của nhân viên" required></td>
            </tr>

            <tr>
                <td><input class="btn btn-success" type="submit" name="AddStaff" value="Thêm nhân viên "></td>
            </tr>


    </form>
</table>
