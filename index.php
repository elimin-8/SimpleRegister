<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
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
     
    <h1>Welcome to SimpleSchool</h1>
    <p>Please log in or register to mark your attendance.</p>

   
</body>
</html>