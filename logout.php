<?php
// start Session 
session_start();

// revmeove Session Data (Unset all session variables)
$_SESSION = array();

// Session Cookie remove
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Session  (Destroy session)
session_destroy();

// Logout & redirect login.php 
echo "<script>
        alert('You have successfully logged out!');
        window.location.href = 'login.php';
      </script>";
exit();
?>