<?php include 'header.php'?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center display-3">Home Page</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($studentData as $item) { ?>
                    <div class="col-md-3">
                    <div class="card card-body bg-dark text-info">
                        <h4>Id : <?= $item['id'] ?></h4>
                        <h4>Name : <?= $item['name'] ?> </h4>
                        <h4>Profession : <?= $item['profession'] ?></h4>
                        <h4>Mobile : <?= $item['mobile'] ?></h4>
                    </div>
                </div>
                <?php
                }
                ?>

            </div>
        </div>
    </section>
<?php include "footer.php"; ?>