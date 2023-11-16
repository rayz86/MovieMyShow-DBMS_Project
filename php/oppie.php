<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Oppenheimer</title>
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <header>
            <img src="../css/logo.png" width="px"height="100px">
            <div class="w3-bar w3-black">
                <a href="../homepage.html" class="w3-bar-item w3-button w3-mobile">Home</a>
                <a href="../signup.html" class="w3-bar-item w3-button w3-mobile">Sign-up</a>
                <a href="../about.html" class="w3-bar-item w3-button w3-mobile">About Us</a>
            </div>
        </header>
    <body>
        <h1 style="margin-left: 10px"><b>Oppenheimer</b></h1>
        <img src="https://www.showbiz411.com/wp-content/uploads/2022/12/oppenheimer.jpg" width="1300px" height="600">
        <br><br>
        <a href=""><button style="background-color: red ;color:white ; margin-left: 15px">Book tickets now</button></a>
        <br>
        <div style="margin-left: 15px">
        <?php
            $conn=mysqli_connect("localhost","root","","movie");

            if($conn)
                echo "Details:";
            else
            {
                echo "error: Logins database not connected";
                exit();
            }
            $q1="SELECT * FROM MOVIES WHERE M_id='101'";
            $r1=mysqli_query($conn,$q1);
            $n=mysqli_num_rows($r1);
            $i=0;

            if($r1)
            {
                while($info=mysqli_fetch_array($r1))
                {
                    echo "<br>Movie ID: ".$info['M_id'];
                    echo "<br>Movie Name: ".$info['M_title'];
                    echo "<br>Genre: ".$info['M_genre'];
                    echo "<br>Production: ".$info['M_prod'];
                    echo "<br>Director: ".$info['M_desp'];
                    echo "<br>Cast: ".$info['M_cast'];
                    $i++;
                }
            }
            else
                echo "error: Login record not inserted";
            
            mysqli_close($conn);
        ?>
    </div>
    </body>
    <footer>
        <label>©2023 MovieMyShow LLC.</label><br>
        <label>All Rights Reserved.</label>
    </footer>
</html>