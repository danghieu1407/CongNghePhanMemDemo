<?php
    session_start();
    require_once '../config/config.php';
    if (isset($_POST['Name'])) {
        $Name = $_POST['Name'];
    } else {
        $Name = '';
    }


    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $email = '';
    }

    if (isset($_POST['pass'])) {
        $pass = $_POST['pass'];
    } else {
        $pass = '';
    }

    if (isset($_POST['CMND'])) {
        $CMND = $_POST['CMND'];
    } else {
        $CMND = '';
    }

    if (isset($_POST['Age'])) {
        $Age = $_POST['Age'];
    } else {
        $Age = '';
    }

    if (isset($_POST['Work'])) {
        $Work = $_POST['Work'];
    } else {
        $Work = '';
    }

    if (isset($_POST['Address'])) {
        $Address = $_POST['Address'];
    } else {
        $Address = '';
    }

    if (isset($_POST['NumberPhone'])) {
        $NumberPhone = $_POST['NumberPhone'];
    } else {
        $NumberPhone = '';
    }

        $hash = md5(rand(0,1000));
        
        $ErrorMessage = "";
        
        $queryEmail = "SELECT * FROM customer WHERE email = ? ";
        $stmt = $mysqli->prepare($queryEmail);
        $stmt->bind_param("s" , $email);
        $stmt->execute();
        $resultEmail = $stmt->get_result();
        $time = time();


        if($resultEmail->num_rows > 0) {
            $ErrorMessage = "Your email already exists";
            header("Location: ../Frontend/signUp.php?msg1=$ErrorMessage");
        }else if(strlen($pass) < 6){
            $ErrorMessage = "Your password isn't less than 8 characters";
            header("Location:../Frontend/signUp.php?msg2=$ErrorMessage");
        }
        
        else{
          
            $sql = "INSERT INTO customer(customer.Name ,email, pass,CMND, Age,Work,customer.Address, NumberPhone) 
            VALUES  ('$Name', '$email','$pass','$CMND','$Age','$Work','$Address','$NumberPhone')";

            if(mysqli_query($mysqli, $sql))
            {
                header("Location:../FrontEnd/login.php?msg=SignUp");
            }
           
       
         }
        $mysqli->close();
    
    
?>