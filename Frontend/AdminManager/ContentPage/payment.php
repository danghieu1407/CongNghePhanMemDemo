<table class="table ">
 
    <form method="POST" action="AdminManager/ContentPage/paymentProcess.php" enctype="multipart/form-data">

        <h1>Thanh Toán </h1>
            <tr>
                <td>Phòng</td>
                <td><input class="form-control" type="text" name="numRoom"  placeholder="Nhập số phòng" required></td>
            </tr>
            <tr>
                <td>Tên Khách Hàng</td>
                <td><input class="form-control" type="text" name="nameCus"  placeholder="Nhập tên khách hàng" required></td>
            </tr>


            


            <tr>
                <td>Giá</td>
                <td><input class="form-control" type="text" name="Cost" placeholder="Giá (VND)" required></td>
            </tr>
            <tr>
                <td>Mô tả:</td>
                <td> <input class="form-control" name="Details" type="text"  placeholder="Nhập mô tả" ></td>
            </tr>


            <tr>
                <td></td>
                <td><input class="btn btn-success" type="submit" name="AddRoom" value="Xác Nhận Thanh Toán"></td>
            </tr>
        

    </form>
</table>
