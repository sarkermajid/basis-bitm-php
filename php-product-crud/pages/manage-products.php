<?php include 'header.php'; ?>


<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
            <div class="col-md-3">
                <div class="card bg-dark text-white">
                    <img src="<?php echo $product['image']; ?>" alt="" height="250">
                    <div class="card-body">
                        <h3><?php echo $product['name']?></h3>
                        <h5>Price: <?php echo $product['price']?></h5>
                        <p>Stock: <?php echo $product['stock']?></p>
                        <a href="" class="btn btn-outline-info">Edit</a>
                        <a href="" class="btn btn-outline-danger">Delete</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>