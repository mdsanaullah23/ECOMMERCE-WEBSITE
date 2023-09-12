<?php
    
    session_start();
    $con=mysqli_connect("localhost","root", "");
    echo "Successfully Login";
    if($con){
        echo "connected";
    }
    else{
        echo "not connected";
    }
    mysqli_select_db($con,'shivansh');
    $username = $_POST['email'];
    $password =  $_POST['password'];
    $quer = "select * from user where username ='$username' && password='$password'";
    $result= mysqli_query($con,$quer);
    $num = mysqli_num_rows($result);
    if($num==1){
        
        $_SESSION['email']=$username;
        header('location:ht.html');
    
    }
    else{
        header('location:index.php');
    }

?>