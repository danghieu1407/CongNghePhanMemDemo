<?php 
$sql_staff = 'SELECT * FROM hoadon order by roomID desc' ;
$query_staff = mysqli_query($mysqli, $sql_staff);
?>

<table>
    <tr>
        <th>Phòng</th>
        <th> Tên khách hàng</th>
        <th>Giá tiền khách hàng trả</th>
        <th>Mô tả </th>
   
    </tr>


    <div class="Staff">

<?php while ($row_pro = mysqli_fetch_array($query_staff)) {?>

                   
    <tr>
        
        <td name="name" ><?php echo $row_pro['roomID']; ?></td>
        <td name="phonenumber"><?php echo $row_pro['nameCus']; ?> </td>
        <td name ="salary"><?php echo $row_pro['Cost']; ?></td>
        <td name = "regency"><?php echo $row_pro[ 'Details']; ?></td>
    
    </tr>
 
</div>
<?php } ?>   

</table>
