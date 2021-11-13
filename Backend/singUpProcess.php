<?php
    session_start();
    require_once '../config/config.php';
    if(!empty($_POST["Username"])&& !empty($_POST["Email"]) 
    && !empty($_POST["Password"]))
     {
        $fullName = $_POST["Username"];
        $email = $_POST["Email"];
       
        $password = $_POST["Password"];
        $PhoneNumber = $_POST["phoneNumber"];
        $hash = md5(rand(0,1000));
        
        $ErrorMessage = "";
        
        $queryEmail = "SELECT * FROM accounts WHERE Email = ? ";
        $stmt = $mysqli->prepare($queryEmail);
        $stmt->bind_param("s" , $email);
        $stmt->execute();
        $resultEmail = $stmt->get_result();
        $time = time();
        if($resultEmail->num_rows > 0) {
            $ErrorMessage = "Your email already exists";
            header("Location: ../Frontend/signUp.php?msg1=$ErrorMessage");
        }else if(strlen($password) < 6){
            $ErrorMessage = "Your password isn't less than 8 characters";
            header("Location:../Frontend/signUp.php?msg2=$ErrorMessage");
        }
        
        else{
          
          
            $sql = "INSERT INTO accounts(username ,pass, email, PhoneNumber) VALUES ('$fullName', '$password','$email','$PhoneNumber')";
            mysqli_query($mysqli, $sql);
                
            
            
      
            
            header("Location:../FrontEnd/login.php?msg=SignUp");
       
         }
        $mysqli->close();
    }
    
?>