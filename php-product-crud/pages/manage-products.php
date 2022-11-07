<?php include 'header.php'; ?>


<section class="py-5">
    <div class="container">
        <div class="row">
            <h2 class="display-4 text-center mb-5">All Product's</h2>
            <h5 class="text-success text-center">
                <?php isset($updateMessage) ? $updateMessage : '' ?>
            </h5>
            <?php foreach ($products as $product) { ?>
            <div class="col-md-3">
                <div class="card bg-dark text-white">
                    <img src="<?php echo $product['image']; ?>" alt="" height="250" class="card-img">
                    <div class="card-body">
                        <h3><?php echo $product['name']?></h3>
                        <h5>Price: <?php echo $product['price']?></h5>
                        <p>Stock: <?php echo $product['stock']?></p>
                        <a href="action.php?page=edit&&id=<?php echo $product['id']?>" class="btn btn-outline-info">Edit</a>
                        <a href="" class="btn btn-outline-danger">Delete</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>