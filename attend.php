<?php
    session_start();  

    if($_SESSION['login_user']==true){ 
        echo "<form action='attend.php' method='POST'>";
        echo "<button type ='submit'>Mark Attendance</button>";
        echo "</form>";
    }

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        include("db-connection.php");
        $username = $_SESSION["login_user"];
        $sql = "INSERT INTO attendance (username, time) VALUES ($username, date('Y-m-d H:i:s'))";
        if(mysqli_query($conn, $sql)){
            echo "Records inserted successfully.";
        } else{
            echo "ERROR: Could not execute $sql. " . mysqli_error($link);
        }
        // Close connection
        mysqli_close($conn);
    }
    
?>