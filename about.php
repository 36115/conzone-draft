<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | ConZone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400&display=swap" rel="stylesheet">
    <style>
        .hero-section {
            background: url('https://images.unsplash.com/photo-1607799279861-4dd421887fb3?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') no-repeat center center;
            background-size: cover;
            height: 60vh;
            position: relative;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .section-title {
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            display: block;
            width: 50px;
            height: 3px;
            background-color: #007bff;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        .team-member img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        [data-bs-theme="dark"] {
            color-scheme: dark;
        }

        [data-bs-theme="dark"] .bg-light {
            background-color: #212529 !important;
        }

        [data-bs-theme="dark"] .text-dark {
            color: #f8f9fa !important;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="hero-section d-flex align-items-center justify-content-center text-white pt-5 my-5">
        <div class="hero-content text-center">
            <h1 class="display-4 fw-bold">About Us</h1>
            <p class="lead">Discover our story and mission in the gaming world</p>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title">Our Story</h2>
                <p class="mb-4">ConZone was born from a passion for gaming and a desire to create a vibrant community where gamers from all platforms could come together. Founded in 2023, we've quickly grown to become a hub for gaming enthusiasts worldwide.</p>
            </div>
        </div>
    </div>

    <div class="bg-light py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">Our Mission</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-people-fill fs-1 text-primary mb-3"></i>
                            <h5 class="card-title">Connect Gamers</h5>
                            <p class="card-text">Bring together players from PC, console, and mobile platforms to share experiences and make new friends.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-newspaper fs-1 text-primary mb-3"></i>
                            <h5 class="card-title">Inform and Educate</h5>
                            <p class="card-text">Provide the latest gaming news, reviews, and insights to keep our community informed and engaged.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-trophy-fill fs-1 text-primary mb-3"></i>
                            <h5 class="card-title">Promote Fair Play</h5>
                            <p class="card-text">Encourage sportsmanship, respect, and positive interactions within our gaming community.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h2 class="section-title text-center mb-5">Meet Our Team</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="text-center">
                    <img src="https://via.placeholder.com/150" alt="Team Member 1" class="mb-3">
                    <h5>John Doe</h5>
                    <p class="text-muted">Founder & CEO</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <img src="https://via.placeholder.com/150" alt="Team Member 2" class="mb-3">
                    <h5>Jane Smith</h5>
                    <p class="text-muted">Community Manager</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <img src="https://via.placeholder.com/150" alt="Team Member 3" class="mb-3">
                    <h5>Mike Johnson</h5>
                    <p class="text-muted">Lead Developer</p>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>