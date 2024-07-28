<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConZone | Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400&display=swap" rel="stylesheet">
</head>
<style>
    .register-container {
        max-width: 600px;
        margin: 100px auto;
    }

    .register-form {
        background-color: #fff;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        padding-bottom: 5px;
    }

    .form-control {
        border-radius: 10px;
    }

    .btn-register {
        border-radius: 10px;
        padding: 10px 20px;
        font-weight: 600;
    }

    .form-check-input {
        cursor: pointer;
    }

    .login-link {
        text-align: center;
        margin-top: 20px;
    }

    [data-bs-theme="dark"] .register-form {
        background-color: #343a40;
    }
    .form-group.required .control-label:after {
        content:"*";
        color:red;
    }
</style>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container register-container">
        <div class="register-form">
            <h2 class="text-center mb-4">Register</h2>
            <form action="#" method="POST">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control rounded-pill" id="firstName" required>
                    </div>
                    <div class="col-md-6">
                        <label for="lastName" class="form-label">Last Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control rounded-pill" id="lastName" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                    <input type="text" class="form-control rounded-pill" id="username" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address <span class="text-danger">*</span></label>
                    <input type="email" class="form-control rounded-pill" id="email" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control rounded-pill" id="password" required>
                </div>
                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control rounded-pill" id="confirmPassword" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="agreeTerms" required>
                    <label class="form-check-label" for="agreeTerms">I agree to <a href="#" class="text-muted me-2">Terms</a>and <a href="#" class="text-muted me-2">Privacy Policy</a><span class="text-danger">*</span></label>
                </div>
                <button type="submit" class="btn btn-primary btn-register w-100 rounded-pill">Sign Up</button>
            </form>
            <div class="login-link mt-4">
                <p class="text-center">Already have an account? <a href="login.php" class="text-primary">Login</a></p>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>