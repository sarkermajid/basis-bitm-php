<?php include 'header.php'?>


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card bg-dark text-white">
                    <div class="card-header text-center">
                        <h2 class="text-info fw-bold">Add Product Form</h2>
                    </div>
                    <h5 class="text-success text-center">
                        <?php echo isset($message) ? $message : ''  ?>
                    </h5>
                    <div class="card-body">
                        <form action="action.php" method="post" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="">Product Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="">Product Price</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="price" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="">Stock Amount</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="stock" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="">Product Description</label>
                                </div>
                                <div class="col-md-9">
                                    <textarea name="description" rows="3" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="">Product Image</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for=""></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="submit" value="Create New Product" name="add_product" class="btn btn-outline-info w-100"></>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'?>
