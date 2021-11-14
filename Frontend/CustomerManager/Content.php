

<?php
    if(isset($_GET['manage']))
        {
        $manage = $_GET['manage'];
        }
    else
        {
        $manage='';
        }

        if ($manage=="OrderRoom")
        {
          include('ContentPage/OrderRoom.php');
        }
        else if($manage=="OrderingRoom")
        {
            include('ContentPage/OrderingRoom.php');
        }
        else if($manage=="EditCustomer")
        {
            include('ContentPage/EditCustomer.php');
        }
        else if($manage=="AddPayment")
        {
            include('ContentPage/AddPayment.php');
        }
        else if($manage=="RoomDetail")
        {
            include('ContentPage/RoomDetail.php');
        }
        else
        {
          include('ContentPage/OrderRoom.php');
        }
        
        
    ?>