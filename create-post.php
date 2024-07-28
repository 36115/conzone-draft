<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Post | ConZone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container pt-5 my-5">
        <div class="row">
                <h1 class="text text-center mb-4">Create New Post</h1>
                <form action="#" method="POST">
                    <div class="mb-3">
                        <label for="topicName" class="form-label">Topic Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control rounded-pill" id="topicName" name="topicName" placeholder="Enter your topic name" required>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category <span class="text-danger">*</span></label>
                        <select class="form-select rounded-pill" id="category" name="category" required>
                            <option value="" selected disabled>Select a category</option>
                            <option value="PC">PC</option>
                            <option value="Console">Console</option>
                            <option value="Mobile">Mobile</option>
                            <option value="Games">Games</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="content" name="content" rows="6" placeholder="Write your post content here" required></textarea>
                    </div>  
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-send"></i> Post
                        </button>
                    </div>
                </form>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>