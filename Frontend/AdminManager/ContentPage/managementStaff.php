<?php 
$sql_staff = 'SELECT * FROM staff';
$query_staff = mysqli_query($mysqli, $sql_staff);
?>
<<<<<<< HEAD
<a class="btn btn-success" href="indexForManager.php?manage=AddStaff">Thêm Phòng</a>
=======
 <a href="indexForManager.php?manage=addStaff" class="btn btn-success">Thêm nhân viên</a>
>>>>>>> b14f09daf0a8f3fc06109ade77c22dd2eea0396b

<table>
    <tr>
        <th>Tên</th>
        <th>Số điện thoại</th>
        <th>Lương</th>
        <th>Chức vụ</th>
        <th>Thao tác</th>


    </tr>



<?php while ($row_pro = mysqli_fetch_array($query_staff)) {?>

<div class="Staff">
                
                   
                    <tr>
                        
                        <td name="name" ><?php echo $row_pro[
                            'name'
                        ]; ?></td>
                        <td name="phonenumber"><?php echo $row_pro[
                            'phonenumber'
                        ]; ?> </td>
                        <td name ="salary"><?php echo $row_pro[
                            'salary'
                        ]; ?></td>
                        <td name = "regency"><?php echo $row_pro[
                            'regency'
                        ]; ?></td>
                        <td > 
                            
                      <a href="indexForManager.php?manage=staffDetail&IDStaff=<?php echo $row_pro['id']; ?>" >Chỉnh sửa</a>

                        </td>
                    </tr>
        
                </table>
 <?php } ?>   