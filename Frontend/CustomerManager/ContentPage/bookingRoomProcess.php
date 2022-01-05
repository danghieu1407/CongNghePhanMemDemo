<?php 
include "../../../Config/config.php";

if (isset($_POST['IDRoom'])) {
    $IDRoom = $_POST['IDRoom'];
} else {
    $IDRoom = '';
}


if (isset($_POST['nameOrd'])) {
    $nameOrd = $_POST['nameOrd'];
} else {
    $nameOrd = '';
}
if (isset($_POST['cmndOrd'])) {
    $cmndOrd = $_POST['cmndOrd'];
} else {
    $cmndOrd = '';
}
if (isset($_POST['sdtOrd'])) {
    $sdtOrd = $_POST['sdtOrd'];
} else {
    $sdtOrd = '';
}
if (isset($_POST['dateOrd'])) {
    $dateOrd = $_POST['dateOrd'];
} else {
    $dateOrd = '';
}


if(isset($_POST['bookingroom'])){
    // $sql_update = "UPDATE room SET
    // room.nameOrd =  $nameOrd,
    // room.cmndOrd =  $cmndOrd,
    // room.sdtOrd =  $sdtOrd,
    // room.dateOrd =  $dateOrd 

    //  WHERE ID = 13 ";
    $sql_update = "INSERT INTO ord (ord.nameOrd ,ord.cmndOrd,ord.sdtOrd, ord.dateOrd, ord.roomOrd) VALUES ('$nameOrd','$cmndOrd','$sdtOrd','$dateOrd', '$IDRoom')";
    mysqli_query($mysqli, $sql_update);

    header('Location:../../bookingroom.php?manage=OrderRoom');

}





?>