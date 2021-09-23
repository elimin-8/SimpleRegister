<?php
    session_start();  

    if($_SESSION['login_user']==true){ 
        echo "<button type ='button'>Mark Attendance</button>";
    }

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $username = $_SESSION["login_user"];
        echo $username;
    }
?>