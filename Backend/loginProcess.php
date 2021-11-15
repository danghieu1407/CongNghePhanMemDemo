 <?php
 session_start();
 include('../config/config.php');
        
     if(isset($_POST['Login']))
     {
         $Email = $_POST['Email'];
         $Pass = $_POST['Pass'];
         $sql = "SELECT * FROM customer WHERE email='$Email' AND pass ='$Pass' LIMIT 1";
         $sql2 = "SELECT * FROM accounts WHERE email='$Email' AND pass ='$Pass' LIMIT 1";
         $row = mysqli_query($mysqli,$sql);
         $row2 = mysqli_query($mysqli,$sql2 );
         $count = mysqli_num_rows($row);
         $count2 = mysqli_num_rows($row2);
         $row1=mysqli_fetch_row($row);
         if($count>0)
         {
            
             $_SESSION['Login'] = $Email;
             
             header("Location:../Frontend/bookingroom.php");
         }
         else if($count2>0)
         {
            
             $_SESSION['Login'] = $Email;
             
             header("Location:../Frontend/indexForManager.php");
         }
         else
         { 
            $error = 'Sai tài khoản hoặc mật khẩu';
            
             header("Location:../FrontEnd/login.php?msg1=$error ");
         }
     }
    ?>