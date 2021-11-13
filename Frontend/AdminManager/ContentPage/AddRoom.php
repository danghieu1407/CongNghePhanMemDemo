<table class="table ">

    <form method="POST" action="AdminManager/ContentPage/HandleRoomprocess.php" enctype="multipart/form-data">

        <h1>Thêm Phòng Cho Khách Sạn</h1>
            <tr>
                <td>Phòng</td>
                <td><input class="form-control" type="text" name="NumRoom"  placeholder="Nhập số phòng" required></td>
            </tr>

            <tr>
                <td>Tầng</td>
                <td><select class="form-select" name="FloorRoom"  required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select></td>
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
                <td><input class="form-control" type="text" name="Cost" placeholder="Giá" required></td>
            </tr>
            <tr>
                <td>Mô tả:</td>
                <td><textarea class="form-control" name="Details" cols="100" rows="10"  placeholder="Nhập mô tả" required></textarea></td>
            </tr>
            <tr>
                <td>Hình ảnh</td>
                    <td><input class="form-control" type="file" name="Image"  value ="" placeholder="Nhập hình ảnh" required >
                </td>
            </tr>

            <tr>
                <td><input class="btn btn-success" type="submit" name="AddRoom" value="Thêm Phòng"></td>
            </tr>


    </form>
</table>
