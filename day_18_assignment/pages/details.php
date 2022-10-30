<?php include "header.php"; ?>


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="card mx-auto bg-dark">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo $studentDetails['image'] ?>" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <div class="card card-body border-0 bg-dark text-white">
                            <h3><?php echo $studentDetails['name'] ?></h3>
                            <hr>
                            <p class="fs-5">Roll: <?php echo $studentDetails['roll'] ?></p>
                            <p class="fs-5">Profession: <?php echo $studentDetails['profession'] ?></p>
                            <p class="fs-5">About: <?php echo $studentDetails['about_me'] ?></p>
                            <p class="fs-5">Phone: <?php echo $studentDetails['phone'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>