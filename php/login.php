<?php
    //u asked for this
    $conn=mysqli_connect("localhost","root","","movie");

    if($conn)
        echo "Logins database connected successfully";
    else
    {
        echo "error: Logins database not connected";
        exit();
    }

    $username=$_POST["username"];
    $password=$_POST["password"];

    $q1="INSERT INTO LOGINS (username, password) VALUES ('$username','$password')";
    $r1=mysqli_query($conn,$q1);

    if($r1)
        echo "Login record inserted successfully";
    else
        echo "error: Login record not inserted";
    
    mysqli_close($conn);
?>

