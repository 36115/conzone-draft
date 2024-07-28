<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Title | ConZone Forums</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container pt-5 my-5">
        <div class="row">
            <!-- Main content -->
            <div class="col-lg-9">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title">The Future of Gaming on PC & Mobile</h2>
                        <p class="text-muted small mb-2">Posted <i>20 minutes ago</i> by <b><a href="#" class="text-muted link-underline link-underline-opacity-0 link-underline-opacity-75-hover">User</a></b></p>
                        <div class="small text-muted mb-3">
                            <b>Categories: </b>
                            <a href="#" class="text-muted me-2">Games</a>
                        </div>
                        <div class="post-content mb-4">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, nisl nec ultricies ultricies, nunc nisl aliquam nunc, vitae aliquam nisl nunc vitae nisl. Sed euismod, nisl nec ultricies ultricies, nunc nisl aliquam nunc, vitae aliquam nisl nunc vitae nisl.</p>
                            <p>Sed euismod, nisl nec ultricies ultricies, nunc nisl aliquam nunc, vitae aliquam nisl nunc vitae nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <button class="btn btn-outline-primary me-2"><i class="bi bi-hand-thumbs-up"></i> Like</button>
                                <button class="btn btn-outline-secondary"><i class="bi bi-share"></i> Share</button>
                            </div>
                            <div class="text-muted">
                                <span class="me-3"><i class="bi bi-bar-chart"></i> 141 Votes</span>
                                <span class="me-3"><i class="bi bi-chat"></i> 122 Replies</span>
                                <span><i class="bi bi-eye"></i> 3,173 Views</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Comments section -->
                <h3 class="mb-4">Comments</h3>
                
                <!-- Comment form -->
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <textarea class="form-control" rows="3" placeholder="Write a comment..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Post Comment</button>
                        </form>
                    </div>
                </div>

                <!-- Individual comments -->
                <?php for ($i=0; $i<3; $i++) { ?>
                <div class="card mb-3 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <img src="https://via.placeholder.com/50" class="rounded-circle me-3" alt="User Avatar">
                            <div>
                                <h5 class="mb-0">Commenter Name</h5>
                                <p class="text-muted small">Posted 2 hours ago</p>
                            </div>
                        </div>
                        <p>This is a sample comment. It can be a few sentences long and contain the user's thoughts on the post topic.</p>
                        <div>
                            <button class="btn btn-sm btn-outline-secondary me-2"><i class="bi bi-hand-thumbs-up"></i> Like</button>
                            <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-reply"></i> Reply</button>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <!-- Pagination -->
                <nav aria-label="Comment navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
            
            <!-- Sidebar content -->
            <?php include 'sidebar.php'; ?>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>