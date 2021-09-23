<?php
    session_start();  

    if($_SESSION['login_user']==true){ 
        echo "<form action='attend.php' method='POST'>";
        echo "<button type ='submit'>Mark Attendance</button>";
        echo "</form>";
    }

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $username = $_SESSION["login_user"];
        echo $username;
    }
?>