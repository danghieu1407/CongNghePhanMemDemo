<?php
include "../../../Config/config.php";

if (isset($_POST['IDCus'])) {
    $IDCus = $_POST['IDCus'];
} else {
    $IDCus = '';
}


if (isset($_POST['DeleteCus'])) {
    $sql_delete = "DELETE FROM customer WHERE ID='$IDCus' ";
    mysqli_query($mysqli, $sql_delete);
    header("Location:../../indexForManager.php?manage=customerManager");
}
?>