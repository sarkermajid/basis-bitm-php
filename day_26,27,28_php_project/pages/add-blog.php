<?php
if(!isset($_SESSION['id']))
{
    header('Location: action.php?page=login');
}
?>
<?php include("header.php") ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card bg-dark fw-semibold text-info shadow-lg">
                        <div class="card-header fw-bold text-center border-info h3">Add Blog Form</div>
                        <div class="card-body">
                            <h4 class="text-center text-success"><?php echo $result; ?></h4>
                            <form action="action.php" method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <div class="col-md-3">Blog Title</div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="title" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">Author Info</div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="author" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">Blog Description</div>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="description" required> </textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">Image</div>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-info fw-semibold" name="btn" value="Create New Blog">
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