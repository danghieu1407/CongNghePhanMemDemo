<?php
include "../../../Config/config.php";

if (isset($_POST['IDCus'])) {
    $IDCus = $_POST['IDCus'];
} else {
    $IDCus = '';
}

if (isset($_POST['Name'])) {
    $Name = $_POST['Name'];
} else {
    $Name = '';
}

if (isset($_POST['Age'])) {
    $Age = $_POST['Age'];
} else {
    $Age = '';
}

if (isset($_POST['Wallet'])) {
    $Wallet = $_POST['Wallet'];
} else {
    $Wallet = '';
}

if (isset($_POST['Address'])) {
    $Address = $_POST['Address'];
} else {
    $Address = '';
}

if (isset($_POST['Work'])) {
    $Work = $_POST['Work'];
} else {
    $Work = '';
}

if (isset($_POST['NumberPhone'])) {
    $NumberPhone = $_POST['NumberPhone'];
} else {
    $NumberPhone = '';
}

if (isset($_POST['DeleteCus'])) {
    $sql_delete = "DELETE FROM customer WHERE ID='$IDCus' ";
    mysqli_query($mysqli, $sql_delete);
    header("Location:../../indexForManager.php?manage=customerManager");
} else if (isset($_POST['Setting'])) {
    $sql_update = "UPDATE customer SET
            customer.Name = '$Name',
            customer.Age = '$Age',
            customer.Work='$Work',
            customer.Address='$Address',
            customer.NumberPhone='$NumberPhone'
            WHERE ID = '$IDCus' ";

    mysqli_query($mysqli, $sql_update);
    header("Location:../../bookingroom.php?manage=EditCustomer&IDCus=" . $IDCus);
} else if (isset($_POST['AddPayment'])) {
    if (is_numeric($Wallet)) {
        $sql_update = "UPDATE customer SET customer.Wallet = customer.Wallet + '$Wallet' WHERE ID = '$IDCus' ";
        mysqli_query($mysqli, $sql_update);
    }

    header("Location:../../bookingroom.php?manage=EditCustomer&IDCus=".$IDCus);
}
