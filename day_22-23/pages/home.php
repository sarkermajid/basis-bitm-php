<?php include "header.php" ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($categories as $category) { ?>
            <div class="col-md-3 mb-4">
                <a class="text-decoration-none" href="action.php?page=category-product&&category_id=<?php echo $category['id'] ?>">
                    <div class="card bg-dark text-white">
                        <img src="assets/img/<?php echo $category['image'] ;?>" alt="" height="250">
                        <h3 class=" text-center"><?php echo $category['name'] ?></h3>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include "footer.php" ?>