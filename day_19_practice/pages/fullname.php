<?php include 'header.php' ?>


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card bg-dark text-white fw-bold p-3">
                    <div class="card-header text-center fw-bold display-4 text-info">Full Name Generator</div>
                    <form action="action.php" method="post">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="">First Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="first_name" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="">Last Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="last_name" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for=""></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="submit" name="full_name_btn" value="Full Name Generate" class="btn btn-outline-info w-100 fw-bold">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="">Result</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo $result ?>" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php' ?>
