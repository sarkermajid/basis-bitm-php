<?php include 'header.php'?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">All Employee</h1>
                </div>
            </div>
            <div class="row mt-5">
                <?php foreach ($allEmployees as $employee) { ?>
                <div class="col-md-4">
                    <div class="card card-body text-center">
                        <img src="<?php echo $employee['img'] ?>" alt="">
                        <h3 class="fs-5"><?php echo $employee['title'] ?></h3>
                        <p class="fs-5"> <?php echo substr($employee['description'], 0,150)."..." ?></p>
                        <a href="action.php?page=details&&id=<?php echo $employee['id'] ?>" class="btn btn-outline-dark">Read more...</a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

<?php include 'footer.php'?>