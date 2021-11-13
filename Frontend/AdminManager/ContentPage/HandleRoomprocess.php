<?php
include "../../../Config/config.php";

if (isset($_POST['Setting'])) {
    $Setting = $_POST['Setting'];
} else {
    $Setting = '';
}

if (isset($_POST['IDRoom'])) {
    $IDRoom = $_POST['IDRoom'];
} else {
    $IDRoom = '';
}

if (isset($_POST['NumRoom'])) {
    $NumRoom = $_POST['NumRoom'];
} else {
    $NumRoom = '';
}

if (isset($_POST['Type'])) {
    $Type = $_POST['Type'];
} else {
    $Type = '';
}

if (isset($_POST['Details'])) {
    $Details = $_POST['Details'];
} else {
    $Details = '';
}

if (isset($_POST['Cost'])) {
    $Cost = $_POST['Cost'];
} else {
    $Cost = '';
}
if (isset($_FILES['Image'])) {
    $Image = "../images/" . $_FILES['Image']['name'];
    $Image_tmp = $_FILES['Image']['tmp_name'];
    $Path = "images/" . $_FILES['Image']['name'];
} else {
    $Image = "";
}

 if (isset($_POST['Setting'])) {
    $TMP = $_FILES['Image']['name'];
    if ($TMP != '') {
        $sql_update = "UPDATE room SET
            room.NumRoom = '$NumRoom',
            room.Type = '$Type',
            room.Cost='$Cost',
            room.Image='$Image',
            room.Details='$Details'
            WHERE ID = '$IDRoom' ";
        mysqli_query($mysqli, $sql_update);
        move_uploaded_file($Image_tmp, $Path);
        header('Location:../../indexForManager.php?manage=RoomDetail&IDRoom=' . $IDRoom);
    } else {
        $sql_update = "UPDATE room SET
            room.NumRoom = '$NumRoom',
            room.Type = '$Type',
            room.Cost='$Cost',
            room.Details='$Details'
            WHERE ID = '$IDRoom' ";

        mysqli_query($mysqli, $sql_update);
        header('Location:../../indexForManager.php?manage=RoomDetail&IDRoom=' . $IDRoom);
    }

} elseif (isset($_POST['DeleteRoom'])) {
    $sql_delete = "DELETE FROM room WHERE ID='$IDRoom' ";
    mysqli_query($mysqli, $sql_delete);
    header('Location:../../indexForManager.php');
} else if (isset($_POST['ChangeStatus'])) {
   
        $sql_update = "UPDATE room SET
         room.Status = '1'  WHERE ID = '$IDRoom' ";
        mysqli_query($mysqli, $sql_update);
    header('Location:../../indexForManager.php?manage=RoomDetail&IDRoom=' . $IDRoom); 
}
