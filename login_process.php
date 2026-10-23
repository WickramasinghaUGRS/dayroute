<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dayroute_db";

// Connection 
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $raw_password = $_POST['password'];

    // check databace (email)  
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        
        // Check correct Password 
        if (password_verify($raw_password, $row['password'])) {
            $_SESSION['email'] = $row['email'];
            echo "<script>alert('Login successful!'); window.location.href='index.html';</script>";
        } else {
            echo "<script>alert('Incorrect password!'); window.location.href='login.php';</script>";
        }
    } else {
        echo "<script>alert('No account found with this email!'); window.location.href='login.php';</script>";
    }
}

$conn->close();
?>