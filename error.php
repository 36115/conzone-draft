<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found | ConZone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400&display=swap" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
    <?php include 'navbar.php'; ?>

    <div class="container flex-grow-1 d-flex align-items-center justify-content-center py-5">
        <div class="text-center">
            <h1 class="display-1 fw-bold text-primary mb-4">404</h1>
            <h2 class="mb-4">Oops! Page Not Found</h2>
            <p class="lead mb-5">We couldn't find the page you're looking for. It might have been removed, renamed, or doesn't exist.</p>
            <div>
                <a href="index.php" class="btn btn-primary btn-lg me-3">
                    <i class="bi bi-house-door"></i> Go Home
                </a>
                <button class="btn btn-outline-secondary btn-lg" onclick="history.back()">
                    <i class="bi bi-arrow-left"></i> Go Back
                </button>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>