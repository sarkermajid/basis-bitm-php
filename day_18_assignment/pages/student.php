<?php include "header.php" ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center display-4 fw-bold text-decoration-underline">Student Information</h1>
                </div>
            </div>
            <div class="row mt-3">
                <?php foreach ($allStudent as $student) { ?>
                <div class="col-md-3">
                    <div class="card bg-dark text-white">
                        <img src="<?php echo $student['image']?>" alt="" height="250">
                        <div class="card-body">
                            <h3><?php echo $student['name']?></h3>
                            <p class="fs-5"> Student Id : <?php echo $student['roll'] ?></p>
                            <p class="fs-6"> <?php echo substr($student['about_me'],0,100).'...'  ?> </p>
                            <hr/>
                            <a href="action.php?page=details&&id=<?php echo $student['id'] ?>" class="btn btn-outline-info w-100">Student details</a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>

<?php include "footer.php"; ?>