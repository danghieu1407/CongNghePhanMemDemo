<?php 
include "../../../Config/config.php";
if(isset($_POST['SaveChange'])){
    $SaveChange = $_POST['SaveChange'];
}
else{
    $SaveChange = "";
}

if(isset($_POST['DeleteStaff'])){
    $DeleteStaff = $_POST['DeleteStaff'];
}
else{
    $DeleteStaff= "";
}
if(isset($_POST['IDStaff'])){
    $IDStaff = $_POST['IDStaff'];
}
else{
    $IDStaff ="";
}

if(isset($_POST['name'])){
    $name = $_POST['name'];
}
else{
    $name= "";
}
if(isset($_POST['phoneNumber'])){
    $phonenumber = $_POST['phoneNumber'];
}
else{
    $phonenumber= "";
}
if(isset($_POST['salary'])){
    $salary = $_POST['salary'];
}
else{
    $salary= "";
}
if(isset($_POST['regency'])){
    $regency = $_POST['regency'];
}
else{
    $regency= "";
}



if(isset($_POST['SaveChange'])){
    $sql_update ="UPDATE staff SET
    staff.name = '$name',
    staff.phonenumber = '$phonenumber',
    staff.salary = '$salary',
    staff.regency = '$regency'
    WHERE id = '$IDStaff' ";
    mysqli_query($mysqli,$sql_update);
    header('Location:../../indexForManager.php?manage=changeDetailStaff&IDStaff=' . $IDStaff);
}
    else if(isset($_POST['DeleteStaff'])){
    $sql_delete = "DELETE FROM staff where id = '$IDStaff'";
    mysqli_query($mysqli,$sql_delete);
    header('Location:../../indexForManager.php?=manage=ChangeDetailStaff.php');
    }
    else if(isset($_POST['AddStaff'])){
   
        if(isset($_POST['phonenumber'])){
            $phonenumber = $_POST['phonenumber'];
        }
        else{
            $phonenumber= "";
        }
    $sql_add = "INSERT INTO staff(staff.name , staff.phonenumber, staff.salary , staff.regency) VALUES ('$name','$phonenumber','$salary','$regency') ";
    mysqli_query($mysqli,$sql_add);
    header('Location:../../indexForManager.php');
    }




?>