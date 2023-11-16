<?php
    $conn=mysqli_connect("localhost","root","","movie");

    if($conn)
        echo "Logins database connected successfully";
    else
    {
        echo "error: Logins database not connected";
        exit();
    }

    $userid=$_POST["userid"];
    $phno=$_POST["phno"];
    $username=$_POST["username"];
    $password=$_POST["password"];

    $q1="INSERT INTO USER (userid,phno,username, password) VALUES ('$userid','$phno','$username','$password')";
    $r1=mysqli_query($conn,$q1);

    if($r1)
    {
        echo "Login record inserted successfully";
        header("Location: ../homepage.html");
    }
    else
        echo "error: Login record not inserted";
    
    mysqli_close($conn);
?>

