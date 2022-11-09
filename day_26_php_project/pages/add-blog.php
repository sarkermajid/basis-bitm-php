<?php include("header.php") ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card bg-warning fw-semibold shadow-lg">
                        <div class="card-header fw-bold text-center border-dark">Add Blog Form</div>
                        <div class="card-body">
                            <h4 class="text-center text-success"><?php echo $result; ?></h4>
                            <form action="action.php" method="post">
                                <div class="row mb-3">
                                    <div class="col-md-3">Blog Title</div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">Author Info</div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="author">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">Blog Description</div>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="description"> </textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">Image</div>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success fw-semibold" name="btn" value="Create New Blog">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include("footer.php") ?>