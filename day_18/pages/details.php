<?php include "header.php"; ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body">
                        <img src="assets/img/<?php echo $singleBlog['image']; ?>" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <h1><?php echo $singleBlog['title'] ; ?></h1>
                        <p><?php echo $singleBlog['description'] ;?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include "footer.php"?>