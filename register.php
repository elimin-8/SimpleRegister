<?php 
include("db-connection.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $real_name = $_POST['real_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    print "$username\n\r";
    print "$real_name\n\r";
    print "$email\n\r";
    print "$password\n\r";

    //hash the password
    $hashed = hash("sha512", $password);

    $sql = "INSERT INTO users (id, username, realname, email, password) VALUES (NULL, '$username', '$real_name', '$email', '$hashed')";
    if(mysqli_query($conn, $sql)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    
    // Close connection
    mysqli_close($conn);
}

?>