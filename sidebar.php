<div class="col-lg-3 mb-4 mb-lg-0">
    <div class="sticky-top" style="top: 100px;">
    <a class="btn btn-success btn-lg rounded-pill mb-4 d-flex justify-content-evenly" href="create-post.php"><span class="bi bi-plus-lg"> Create Post</span></a>
        <!-- Active Topics Card -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Active Topics</h5>
            </div>
            <div class="card-body p-1">
                <ul class="list-group list-group-flush">
                <?php for ($i=0; $i<3; $i++) { ;?>
                    <li class="list-group-item">
                        <h6 class="mb-1">
                            <a href="#" class="link-offset-2-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">pls help!!!</a>
                        </h6>
                        <small class="text-muted">Posted <i>39 minutes ago</i> by <a href="#" class="text-muted link-underline link-underline-opacity-0 link-underline-opacity-75-hover">MasterPC_27895</a></small>
                    </li>
                <?php } ;?>
                </ul>
            </div>
        </div>

        <!-- Stats Card -->
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Stats</h5>
            </div>
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-6 mb-3">
                        <h3 class="mb-0">58</h3>
                        <small class="text-muted">Topics</small>
                    </div>
                    <div class="col-6 mb-3">
                        <h3 class="mb-0">1,856</h3>
                        <small class="text-muted">Posts</small>
                    </div>
                    <div class="col-6">
                        <h3 class="mb-0">300</h3>
                        <small class="text-muted">Members</small>
                    </div>
                    <div class="col-6">
                        <h3 class="mb-0">
                            <a href="#" class="link-offset-2 link-underline link-underline-opacity-0 link-underline-opacity-75-hover">DanielD</a>
                        </h3>
                        <small class="text-muted">Newest Member</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>