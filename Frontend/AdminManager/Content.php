

<?php
    if(isset($_GET['manage']))
        {
        $manage = $_GET['manage'];
        }
    else
        {
        $manage='';
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
        else if($manage == "staffDetail")
        {
          include('ContentPage/staffDetail.php');
        }
        else if($manage == "changeDetailStaff")
        {
          include('ContentPage/changeStaffDetail.php');
          
        }
        else if ($manage =="addStaff")
        {
          include('ContentPage/addStaff.php');
        }
        else if ($manage =="manageBookingRoom")
        {
          include('ContentPage/manageBookingRoom.php');
        }
        else if ($manage =="bookingRoomDetail")
        {
          include('ContentPage/bookingRoomDetail.php');
        }
        else if ($manage =="payment")
        {
          include('ContentPage/payment.php');
        }
        else if ($manage =="bill")
        {
          include('ContentPage/bill.php');
        }
    
    
    
        
        
        
        else
        {
          include('ContentPage/RoomManager.php');
        }
        
        
    ?>