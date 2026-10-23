<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DayyRoute - Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Show Password  CSS Rules */
        .show-pw-container {
            display: flex !important;
            align-items: center !important;
            justify-content: flex-start !important;
            gap: 8px !important;
            margin: 12px 0 18px 0 !important;
            width: 100% !important;
        }

        .show-pw-text {
            color: #ffffff !important; /
            font-size: 14px !important;
            font-weight: 500 !important;
            display: inline-block !important;
            margin: 0 !important;
            padding: 0 !important;
            cursor: pointer !important;
        }

        .show-pw-checkbox {
            width: 16px !important;
            height: 16px !important;
            cursor: pointer !important;
            margin: 0 !important;
            accent-color: #00bcd4 !important;
        }
    </style>
</head>
<body class="auth-body">

    <div class="auth-container">
        <h2>Welcome Back</h2>
        <p>Login to your DayyRoute account</p>
        
        <form action="login_process.php" method="POST">
            <div class="input-group">
                <label>Email Address</label>
                <input type="email" name="email" required placeholder="Enter your email">
            </div>
            
            <div class="input-group">
                <label>Password</label>
                <input type="password" id="login-password" name="password" required placeholder="Enter your password">
            </div>

            <!-- Show Password Section -->
            <div class="show-pw-container">
                <label for="show-password-check" class="show-pw-text">Show Password</label>
                <input type="checkbox" id="show-password-check" class="show-pw-checkbox" onclick="togglePassword()">
            </div>

            <button type="submit" class="auth-btn">Login</button>
        </form>

        <p class="auth-link-text">
            Don't have an account? <a href="register.php">Create new account</a>
        </p>
    </div>

    <!-- JavaScript to toggle password -->
    <script>
        function togglePassword() {
            var pwInput = document.getElementById("login-password");
            if (pwInput.type === "password") {
                pwInput.type = "text";
            } else {
                pwInput.type = "password";
            }
        }
    </script>

</body>
</html>