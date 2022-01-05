<?php
include "../../../Config/config.php";

if (isset($_GET['Id'])) {
    $Id = $_GET['Id'];
} else {
    $Id = '';
}

if(isset($_POST['submitBookingRoomProcess'])){
  
    $sql_delete = "DELETE FROM ord where ord.roomOrd = '$Id'";
    mysqli_query($mysqli, $sql_delete);
    header('Location:../../indexForManager.php?manage=bookingRoomDetail');

}
?>