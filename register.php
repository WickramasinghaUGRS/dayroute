<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DayyRoute - Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="auth-body">

    <div class="auth-container">
        <h2>Create Account</h2>
        <p>Sign up for a new DayyRoute account</p>
        
        <form action="register_process.php" method="POST">
            <div class="input-group">
                <label>Email Address</label>
                <input type="email" name="email" required placeholder="Enter your email">
            </div>
            
            <div class="input-group">
                <label>Password</label>
                <input type="password" id="password" name="password" required placeholder="Create a password">
            </div>

            <!-- Show Password Text (Before Checkbox) -->
            <div style="margin: 10px 0 15px 0; display: flex !important; align-items: center !important; gap: 8px !important;">
                <span style="color: #000000 !important; font-size: 14px !important; display: inline-block !important; visibility: visible !important;">Show Password</span>
                <input type="checkbox" id="show-password-check" onclick="togglePassword()" style="cursor: pointer; width: 16px; height: 16px; display: inline-block !important;">
            </div>

            <button type="submit" class="auth-btn">Register</button>
        </form>

        <p class="auth-link-text">
            Already have an account? <a href="login.php">Login here</a>
        </p>
    </div>

    <!-- JavaScript to toggle password visibility -->
    <script>
        function togglePassword() {
            var passwordInput = document.getElementById("password");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>

</body>
</html>