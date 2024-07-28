<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConZone Forum Rules</title>
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

        .rule-card {
            transition: transform 0.3s ease-in-out;
        }

        .rule-card:hover {
            transform: translateY(-5px);
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
            <h1 class="display-4 fw-bold">Forum Rules</h1>
            <p class="lead">Guidelines for a respectful and enjoyable community</p>
        </div>
    </div>

    <div class="container my-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 rule-card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-chat-quote text-primary me-2"></i>Respect Others</h5>
                        <p class="card-text">Treat all members with respect. No hate speech, personal attacks, or harassment will be tolerated.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 rule-card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-shield-check text-primary me-2"></i>Keep It Clean</h5>
                        <p class="card-text">No explicit, offensive, or inappropriate content. Keep discussions family-friendly.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 rule-card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-signpost-split text-primary me-2"></i>Stay On Topic</h5>
                        <p class="card-text">Post in the appropriate sections. Off-topic posts may be moved or removed.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 rule-card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-pencil-square text-primary me-2"></i>No Spamming</h5>
                        <p class="card-text">Avoid repeated posts, excessive self-promotion, or any form of spamming.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 rule-card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-lock text-primary me-2"></i>Protect Privacy</h5>
                        <p class="card-text">Do not share personal information about yourself or others without consent.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 rule-card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-currency-dollar text-primary me-2"></i>No Illegal Activities</h5>
                        <p class="card-text">Do not discuss or promote any illegal activities, including piracy or cheating.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 rule-card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-link-45deg text-primary me-2"></i>Use Appropriate Links</h5>
                        <p class="card-text">Only share links to safe and relevant content. No malicious or misleading links.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 rule-card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-person-badge text-primary me-2"></i>Respect Moderators</h5>
                        <p class="card-text">Follow moderator instructions. If you disagree, use appropriate channels to appeal.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 rule-card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-flag text-primary me-2"></i>Report Issues</h5>
                        <p class="card-text">If you see a post that violates these rules, please report it to the moderators.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-5 text-center">
            <p class="lead">By participating in the ConZone forums, you agree to abide by these rules. Failure to do so may result in warnings, post removal, or account suspension.</p>
            <p>Remember, we're all here to share our passion for gaming. Let's keep it fun and friendly for everyone!</p>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>