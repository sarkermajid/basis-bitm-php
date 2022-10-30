<?php include 'header.php'?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo $singleEmployee['img'] ?>" alt="">
                </div>
                <div class="col-md-6">
                    <h2><?php echo $singleEmployee['title']?></h2>
                    <p><?php echo $singleEmployee['description']?></p>
                </div>
            </div>
    </section>

<?php include 'footer.php'?>