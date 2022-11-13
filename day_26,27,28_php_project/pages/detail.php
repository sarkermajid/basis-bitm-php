<?php include "header.php"; ?>


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="card mx-auto bg-dark">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="<?php echo $singleBlog['image'] ?>" alt="" class="card-img" height="400">
                        </div>
                        <div class="col-md-6">
                            <div class="card card-body border-0 bg-dark text-white">
                                <h3><?php echo $singleBlog['title'] ?></h3>
                                <hr>
                                <p class="fs-5"><?php echo $singleBlog['description'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include "footer.php"; ?>