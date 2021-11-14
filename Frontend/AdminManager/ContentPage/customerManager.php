<div class="row tm-row">
                <div class="col-12">
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form">
                        <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </div>
            <table class="table my-auto">
    <h1>Danh sách khách hàng<h1>
    <tr>
        <th>Tên</th>
        <th>Số Điện Thoại</th>
        <th>Nghề Nghiệp</th>
        <th>Thao tác</th>
    </tr>

    <?php
    $sql_customer = "SELECT * FROM customer order by ID asc ";
    $query_customer = mysqli_query($mysqli, $sql_customer);
    while ($row = mysqli_fetch_array($query_customer)) {
    ?>
        <tr>
            <td><?php echo $row['Name'] ?></td>
            <td><?php echo $row['NumberPhone'] ?></td>
            <td><?php echo $row['Work'] ?></td>
            <td>
                
                <form method="POST" action="AdminManager/ContentPage/HandleCustomerprocess.php">
                    <input class="form-control" type="text" name="IDCus" value="<?php echo $row['ID'] ?>" required hidden>
                    <a href="indexForManager.php?manage=CustomerDetails&IDCus=<?php echo $row['ID']; ?>"  class="text-white btn btn-success" >Xem chi tiết</a> 
                    <input type="submit" name="DeleteCus" class="btn btn-danger" value="Xóa">
                </form>
            </td>
        </tr>


    <?php

    }

    ?>
</table>



