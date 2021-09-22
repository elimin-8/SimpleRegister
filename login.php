<?php
   include("db-connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $username = $_POST['username'];
      $password = $_POST['password']; 

      //hash the password to check it on the database
      $hashed = hash("sha512", $password);

      $sql = "SELECT username, password FROM users WHERE username = '$username' and password = '$hashed'";
      $result = mysqli_query($conn,$sql);
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
		
      if($count == 1) {
         $_SESSION['login_user'] = $username;
         
         header("location: index.php");
      }else {
         echo "Your Login Name or Password is invalid";
      }
      // Close connection
      mysqli_close($conn);
   }
?>