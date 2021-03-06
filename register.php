<?php 
include("db-connection.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $real_name = $_POST['real_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_repeat = $_POST['password_repeat'];
    $email_exp = "/.+@.+\..+/";

    print "$username\n\r";
    print "$real_name\n\r";
    print "$email\n\r";
    print "$password\n\r";

     // Password match check
     if ($_POST['password'] != $_POST['password_repeat'])
     {
         echo("Passwords do not match! Try again.");
         exit;
     }

     // Password Validation
     if (strlen($_POST["password"]) < 8){
        echo("Your password must contain at least 8 characters");
        exit;
     }

     // Email Validation
     if (!preg_match($email_exp, $email)) {
        echo("Email must be in standard format!");
        exit;
     }

    //hash the password
    $hashed = hash("sha512", $password);

    $sql = "INSERT INTO users (id, username, realname, email, password) VALUES (NULL, '$username', '$real_name', '$email', '$hashed')";
    if(mysqli_query($conn, $sql)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not execute $sql. " . mysqli_error($link);
    }
    
   
    // Close connection
    mysqli_close($conn);
}

?>