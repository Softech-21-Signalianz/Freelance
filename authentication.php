<?php      
    include('connection.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  

        $sql1 = "select type_id from users where username = '$username' and password = '$password'"; 
        $type_id = mysqli_query($con, $sql1);  
      
        $sql = "select type_id from users where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1 && $row[type_id] == 1){  
            header("location: seller_dashboard.php");
        }  
        else if($count == 1 && $row[type_id] == 2){  
            header("location: buyer_dashboard.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  