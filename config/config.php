<?php
    $mysqli = new mysqli('localhost','root','','CongNghePhanMemDemo');

    if($mysqli-> connect_error)
    {
        echo "Failed to connect to MYSQL: " . $mysqli->connect_error;
        exit();
    }
?> 