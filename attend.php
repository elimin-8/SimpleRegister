<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mark Attendance</title>
</head>
<body>
     <div class="topnav">
         <a class='active' href="#index">Home</a>
         <?php 
         session_start();
         if($_SESSION['login_user']==true){ 
             echo "<a style='float:right;'>" . $_SESSION["login_user"] . "</a>";
             echo '<a href="logout.php">Logout</a>';
         }
         if($_SESSION['login_user']==false){
             echo '<a href="register.html"><span>Register</span></a>';
             echo '<a href="login.html"><span>Login</span></a>';
         }
         ?>
      </div>
 </body>
</html>

<?php
    include("db-connection.php");
    session_start();  

    if($_SESSION['login_user']==true){ 
        echo "<form action='attend.php' method='POST' id='attend_form'>";
        echo "<button type ='submit' id='attend_button'>Mark Attendance</button>";
        echo "</form>";
    }

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $date = date('Y-m-d H:i:s');
        $username = $_SESSION["login_user"];
        $sql = "INSERT INTO attendance (username, time) VALUES ('$username', '$date')";
        if(mysqli_query($conn, $sql)){
            echo "Records inserted successfully.";
        } else{
            echo "ERROR: Could not execute $sql. " . mysqli_error($link);
        }
        // Close connection
        mysqli_close($conn);
    }
    
?>
