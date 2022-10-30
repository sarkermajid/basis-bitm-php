<?php include "header.php"; ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($blogs as $blog) { ?>
                <div class="col-md-4 col-sm-4">
                    <div class="card border-0 shadow h-100">
                        <img src="assets/img/<?php echo $blog['image'] ?>" alt="" height="250">
                        <div class="card-body text-center">
                            <h5><?php echo $blog['title']?></h5>
                            <p><?php echo substr($blog['description'], 0, 200).'...'?></p>
                            <hr/>
                            <a href="action.php?page=details&&id=<?php echo $blog['id'] ?>" class="btn btn-outline-danger w-100">read more</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

<?php include "footer.php"?>