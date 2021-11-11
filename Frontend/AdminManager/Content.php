

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
        else if($manage=="RoomSetting")
        {
            include('ContentPage/RoomSetting.php');
        }
        else if($manage=="RoomOdered")
        {
            include('ContentPage/RoomOdered.php');
        }
       
        else if ($manage=="managementStaff")
        {
          include('ContentPage/managementStaff.php');

        }
        else
        {
          include('ContentPage/RoomManager.php');
        }
        
        
    ?>