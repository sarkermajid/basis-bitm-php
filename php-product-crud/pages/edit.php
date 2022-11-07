<?php include 'header.php'?>


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card bg-dark text-white">
                    <div class="card-header text-center">
                        <h2 class="text-info fw-bold">Update Product</h2>
                    </div>
                    <h5 class="text-success text-center mt-2">
                        <?php echo isset($updateMessage) ? $updateMessage : ''  ?>
                    </h5>
                    <div class="card-body">
                        <form action="action.php" method="post" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="">Product Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo $productInfo['name'] ?>" name="name" class="form-control">
                                    <input type="hidden" name="id" value="<?php echo $productInfo['id']?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="">Product Price</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo $productInfo['price'] ?>" name="price" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="">Stock Amount</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo $productInfo['stock'] ?>" name="stock" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="">Product Description</label>
                                </div>
                                <div class="col-md-9">
                                    <textarea name="description" rows="3" class="form-control"><?php echo $productInfo['description'] ?></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="">Product Image</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="file" name="image" class="form-control">
                                    <img src="<?php echo $productInfo['image'] ?>" alt="" height="150" width="150" class="mt-2">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for=""></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="submit" value="Update Product" name="update_product" class="btn btn-outline-info w-100">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for=""></label>
                                </div>
                                <div class="col-md-9">
                                    <a href="action.php?page=manage" class="btn btn-outline-info w-100">All Product </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<?php include 'footer.php'?>
