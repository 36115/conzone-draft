<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConZone | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400&display=swap" rel="stylesheet">
</head>
<style>
    .login-container {
        max-width: 400px;
        margin: 100px auto;
    }

    .login-form {
        background-color: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        padding-bottom: 5px;
    }

    .form-control {
        border-radius: 10px;
    }

    .btn-login {
        border-radius: 10px;
        padding: 10px 20px;
        font-weight: 600;
    }

    .form-check-input {
        cursor: pointer;
    }

    .signup-link {
        text-align: center;
        margin-top: 20px;
    }

    [data-bs-theme="dark"] .login-form {
        background-color: #343a40;
    }
</style>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container login-container">
        <div class="login-form">
            <h2 class="text-center mb-4">Login</h2>
            <form action="#" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control rounded-pill" id="email" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control rounded-pill" id="password" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary btn-login w-100 rounded-pill">Login</button>
            </form>
            <div class="signup-link">
                <p>Don't have an account? <a href="register.php" class="text-primary">Register</a></p>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>