

<?php
    if(isset($_GET['manage']))
        {
        $manage = $_GET['manage'];
        }
    else
        {
        $manage='';
        }

    if(isset($_GET['action']))
        {
        $action = $_GET['action'];
        }
    else
        {
        $action='';
        }


        if ($manage=="RoomManage")
        {
          include('ContentPage/RoomManager.php');
        }
        else if($manage=="customerManager")
        {
            include('ContentPage/customerManager.php');
        }
        else if($manage=="RoomOdered")
        {
            include('ContentPage/RoomOdered.php');
        }
       
        else if ($manage=="managementStaff")
        {
          include('ContentPage/managementStaff.php');

        }
        else if ($manage=="RoomDetail")
        {
          include('ContentPage/RoomDetail.php');

        }
        else if ($manage=="SettingRoom")
        {
          include('ContentPage/SettingRoom.php');

        }
        else if ($manage=="AddRoom")
        {
          include('ContentPage/AddRoom.php');

        }
        else if ($manage=="CustomerDetails")
        {
          include('ContentPage/CustomerDetails.php');

        }

        
        else
        {
          include('ContentPage/RoomManager.php');
        }
        
        
    ?>