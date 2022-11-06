<?php include 'header.php'?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card bg-dark text-white shadow-lg">
                    <div class="card-header"><h2 class="text-center text-info">Registration Form</h2></div>
                    <div class="card-body">
                        <h3 class="text-center text-success mb-3"><?php echo isset($message) ? $message : '' ;?></h3>
                        <form action="action.php" method="post">
                            <div class="row mb-3">
                                <label for="" class="col-md-3 fw-bold">Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3 fw-bold">E-mail</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3 fw-bold">Mobile</label>
                                <div class="col-md-9">
                                    <input type="number" name="mobile" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3 fw-bold">Password</label>
                                <div class="col-md-9">
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3 fw-bold"></label>
                                <div class="col-md-9">
                                    <input type="submit" value="Registration" name="submit" class="btn btn-outline-info w-100">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'?>