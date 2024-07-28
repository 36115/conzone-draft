<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forums | ConZone</title>
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
                <form action="search.php" method="POST">
                <h1 class="text text-center">Forums</h1>
                <h5 class="text py-2">Search</h5>
                    <div class="input-group">
                        <input class="form-control border-light rounded-start-pill" type="search" placeholder="Type here to search!" aria-label="Search" required>
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
                        <button class="btn btn-outline-secondary  rounded-end-pill" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>

                <h3 class="text h-3 my-3"><i class="bi bi-fire"></i> Popular Now</h3>

                <!-- Post template -->
                <?php for ($i=0; $i<5; $i++) { ;?>
                    <div id="form-card" class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-8 mb-3 mb-sm-0">
                                <h5>
                                    <a href="detail.php" class="link-offset-2 link-underline link-underline-opacity-0 link-underline-opacity-75-hover">The Future of Gaming on PC & Mobile</a>
                                </h5>
                                <p class="text-muted small mb-2">Posted <i>20 minutes ago</i> by <b><a href="#" class="text-muted link-underline link-underline-opacity-0 link-underline-opacity-75-hover">User</a></b></p>
                                <div class="small text-muted">
                                    <b>Categories: </b>
                                    <a href="#" class="text-muted me-2"><i>Games</i></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row text-center text-muted">
                                    <div class="col">
                                        <i class="bi bi-bar-chart"></i>
                                        <span class="d-block small">141 Votes</span>
                                    </div>
                                    <div class="col">
                                        <i class="bi bi-chat"></i>
                                        <span class="d-block small">122 Replies</span>
                                    </div>
                                    <div class="col">
                                        <i class="bi bi-eye"></i>
                                        <span class="d-block small">3,173 Views</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ;?>

                <h3 class="text h-3 my-3"><i class="bi bi-stars"></i> Newest Post</h3>

                <!-- Post template -->
                <?php for ($i=0; $i<5; $i++) { ;?>
                    <div id="form-card" class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-8 mb-3 mb-sm-0">
                                <h5>
                                    <a href="detail.php" class="link-offset-2 link-underline link-underline-opacity-0 link-underline-opacity-75-hover">What's your opinion about Nintendo lawsuit many assets on Stream Workshop?</a>
                                </h5>
                                <p class="text-muted small mb-2">Posted <i>5 minutes ago</i> by <b><a href="#" class="text-muted link-underline link-underline-opacity-0 link-underline-opacity-75-hover">User</a></b></p>
                                <div class="small text-muted">
                                    <b>Categories: </b>
                                    <a href="#" class="text-muted me-2">Games</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row text-center text-muted">
                                    <div class="col">
                                        <i class="bi bi-bar-chart"></i>
                                        <span class="d-block small">141 Votes</span>
                                    </div>
                                    <div class="col">
                                        <i class="bi bi-chat"></i>
                                        <span class="d-block small">122 Replies</span>
                                    </div>
                                    <div class="col">
                                        <i class="bi bi-eye"></i>
                                        <span class="d-block small">3,173 Views</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ;?>
            </div>
            
            <!-- Sidebar content -->
            <?php include 'sidebar.php'; ?>
        </div>
    </div>
</body>
<?php include 'footer.php'; ?>
</html>