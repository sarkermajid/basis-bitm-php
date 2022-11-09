<?php include "header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <h1 class="display-3 fw-bold text-center mb-5">All Product's</h1>
            <?php foreach ($products as $product) { ?>
            <div class="col-md-3">
                <div class="card bg-dark text-white mb-3">
                    <img src="assets/img/<?php echo $product['image']?>" alt="" height="250" class="card-img">
                    <div class="card-body">
                        <h3><?php echo $product['name']?></h3>
                        <h5>Tk. <?php echo $product['price']?></h5>
                        <a href="action.php?page=product-details&&id=<?php echo $product['id'] ?>" class="btn btn-outline-info">More details</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>