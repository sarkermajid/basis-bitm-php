<?php include "header.php"; ?>

<section class="py-5">
    <div class="container">
        <h1 class="display-2 fw-bold text-center mb-4">All Products</h1>
        <div class="row">
            <?php foreach ($products as $product) { ?>
            <div class="col-md-3 mb-3">
                <div class="card bg-dark text-white">
                    <img src="assets/img/<?php echo $product['image']?>" alt="" class="card-img" height="250">
                    <div class="card-body">
                        <h3><?php echo $product['name'] ?></h3>
                        <p>TK. <?php echo $product['price'] ?></p>
                        <a href="action.php?page=product-detail&&id=<?php echo $product['id'] ?>" class="btn btn-outline-info">More details</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>