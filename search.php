<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results | ConZone Forums</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400&display=swap" rel="stylesheet">
</head>
<style>
    #search-topic {
        border-radius: 0px;
        border-color: #fff;
        color: white;
    }
</style>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container pt-5 my-5">
        <div class="row">
            <!-- Main content -->
            <div class="col-lg-9">
                <h1 class="mb-4 text-center">Search Results</h1>

                <!-- Search form -->
                <form action="search.php" method="GET" class="mb-4">
                    <div class="input-group">
                        <input class="form-control border-light rounded-start-pill" type="search" name="q" placeholder="Type here to search!" aria-label="Search" required value="<?php echo htmlspecialchars($_GET['q'] ?? ''); ?>">
                        <div class="input-group-append">
                            <select class="form-select" id="search-topic" name="category">
                                <option value="" selected disabled>Categories</option>
                                <option value="PC">PC</option>
                                <option value="Console">Console</option>
                                <option value="Mobile">Mobile</option>
                                <option value="Games">Others</option>
                            </select>
                        </div>
                        <div class="input-group-append">
                            <select class="form-select" id="search-topic" name="category">
                                <option value="" selected disabled>Filter by</option>
                                <option value="PC">Votes</option>
                                <option value="Console">Replies</option>
                                <option value="Mobile">Replies</option>
                            </select>
                        </div>
                        <button class="btn btn-outline-secondary rounded-end-pill" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>

                <!-- Search results summary -->
                <p class="mb-4">Showing results for "<strong><?php echo htmlspecialchars($_GET['q'] ?? ''); ?></strong>". Found 42 results.</p>

                <!-- Search results -->
                <?php for ($i=0; $i<5; $i++) { ?>
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-8 mb-3 mb-sm-0">
                                <h5>
                                    <a href="detail.php" class="link-offset-2 link-underline link-underline-opacity-0 link-underline-opacity-75-hover">Search Result Title</a>
                                </h5>
                                <p class="text-muted small mb-2">Posted <i>2 days ago</i> by <b><a href="#" class="text-muted link-underline link-underline-opacity-0 link-underline-opacity-75-hover">User</a></b></p>
                                <p class="mb-2">This is a snippet of the post content that matches the search query. The matching terms could be <mark>highlighted</mark> for better visibility.</p>
                                <div class="small text-muted">
                                    <b>Categories: </b>
                                    <a href="#" class="text-muted me-2"><i>PC</i></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row text-center text-muted">
                                    <div class="col">
                                        <i class="bi bi-bar-chart"></i>
                                        <span class="d-block small">52 Votes</span>
                                    </div>
                                    <div class="col">
                                        <i class="bi bi-chat"></i>
                                        <span class="d-block small">18 Replies</span>
                                    </div>
                                    <div class="col">
                                        <i class="bi bi-eye"></i>
                                        <span class="d-block small">1,234 Views</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <!-- Pagination -->
                <nav aria-label="Search results navigation">
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