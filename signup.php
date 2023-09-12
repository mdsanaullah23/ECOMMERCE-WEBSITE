<?php
    
    session_start();
    header('location:index.php');
    $con=mysqli_connect("localhost","root", "");
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
        
        echo "duplicate";
    
    }
    else{
        $querr="insert into user (username,password) values('$username','$password')";
        mysqli_query($con,$querr);
    }

?>