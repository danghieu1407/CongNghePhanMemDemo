<?php 
include "../../../Config/config.php";

if (isset($_POST['numRoom'])) {
    $numRoom = $_POST['numRoom'];
} else {
    $numRoom = '';
}

if (isset($_POST['nameCus'])) {
    $nameCus = $_POST['nameCus'];
} else {
    $nameCus = '';
}

if (isset($_POST['Cost'])) {
    $Cost = $_POST['Cost'];
} else {
    $Cost = '';
}

if (isset($_POST['Details'])) {
    $Details = $_POST['Details'];
} else {
    $Details = '';
}

$sql_insertIntoDatabase = "INSERT INTO hoadon (hoadon.roomID, hoadon.nameCus, hoadon.Cost, hoadon.Details) VALUES ('$numRoom','$nameCus','$Cost','$Details')";
mysqli_query($mysqli, $sql_insertIntoDatabase);
header('Location:../../indexForManager.php?manage=bill');


?>