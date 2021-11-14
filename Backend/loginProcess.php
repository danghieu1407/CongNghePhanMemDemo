 <?php
 include('../config/config.php');
     if(isset($_POST['Login']))
     {
         $Email = $_POST['Email'];
         $Pass = $_POST['Pass'];
         $sql = "SELECT * FROM customer WHERE email='$Email' AND pass ='$Pass' LIMIT 1";
         $row = mysqli_query($mysqli,$sql);
         $count = mysqli_num_rows($row);
         $row1=mysqli_fetch_row($row);
         if($count>0)
         {
            
             $_SESSION['Login'] = $Email;
             header("Location:../Frontend/Bookingroom.html");
         }
         else
         { 
            $error = 'Sai tài khoản hoặc mật khẩu';
            
             header("Location:../FrontEnd/login.php?msg1=$error ");
         }
     }
    ?>