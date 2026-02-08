<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus Auth | Glassmorphism</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    
    <div class="container">
        <form action="auth.php" method="POST" id="login-form">
            <h3>Login</h3>
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="Enter Username" required>

            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Enter Password" required>

            <button type="submit" name="login">Log In</button>
            <p class="toggle-text">New here? <span onclick="toggleForm()">Create account</span></p>
        </form>

        <form action="auth.php" method="POST" id="register-form" style="display: none;">
            <h3>Register</h3>
            <label for="reg-user">Username</label>
            <input type="text" name="reg-user" placeholder="Create Username" required>

            <label for="reg-email">Email</label>
            <input type="email" name="reg-email" placeholder="Enter Email" required>

            <label for="reg-pass">Password</label>
            <input type="password" name="reg-pass" placeholder="Create Password" required>

            <button type="submit" name="register">Sign Up</button>
            <p class="toggle-text">Already a member? <span onclick="toggleForm()">Back to Login</span></p>
        </form>
    </div>

    <script>
        function toggleForm() {
            const login = document.getElementById('login-form');
            const reg = document.getElementById('register-form');
            if (login.style.display === "none") {
                login.style.display = "block";
                reg.style.display = "none";
            } else {
                login.style.display = "none";
                reg.style.display = "block";
            }
        }
    </script>
</body>
</html>
