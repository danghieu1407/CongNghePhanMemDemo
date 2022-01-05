<?php 
include '../../../Config/config.php';
if (isset($_POST['outOfRoom'])) {
    $outOfRoom = $_POST['outOfRoom'];
} else {
    $outOfRoom = '';
}
if (isset($_POST['nooneinthisroom'])) {
    $nooneinthisroom = $_POST['nooneinthisroom'];
} else {
    $nooneinthisroom = '';
}
if (isset($_GET['idroom'])) {
    $idroom = $_GET['idroom'];
} else {
    $idroom = '';
}

if(isset($_POST['outOfRoom'])){
    $sql_update = "UPDATE room SET
    room.Status = '0' WHERE ID = $idroom";
    mysqli_query($mysqli, $sql_update);
    header('Location:../../indexForManager.php?manage=manageBookingRoom');

}
else if(isset($_POST['nooneinthisroom'])){
    $sql_update = "UPDATE room SET
    room.Status = '1' WHERE ID = $idroom";
    mysqli_query($mysqli, $sql_update);
    header('Location:../../indexForManager.php?manage=manageBookingRoom');

}


?>