<?php
// start Session 
session_start();

// ඩේටාබේස් සම්බන්ධතාවය (Database Connection)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dayroute_db";

// Create Connection 
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check Register form 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $raw_password = $_POST['password'];

    //  Password  Hash (Encrypt)
    $hashed_password = password_hash($raw_password, PASSWORD_DEFAULT);

    // Input data for DB- SQL Query
    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        // Session --> email Home --> page 
        $_SESSION['email'] = $email;
        echo "<script>alert('Account created successfully!'); window.location.href='index.html';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// close connection 
$conn->close();
?>